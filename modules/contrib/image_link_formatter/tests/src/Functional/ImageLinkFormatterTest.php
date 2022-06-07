<?php

namespace Drupal\Tests\image_link_formatter\Functional;

/**
 * @file
 * Contains Drupal\Tests\image\Functional\ImageFieldTestBase.
 */

use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\field\Entity\FieldConfig;
use Drupal\field\Entity\FieldStorageConfig;
use Drupal\file\Entity\File;
use Drupal\link\LinkItemInterface;
use Drupal\Tests\image\Functional\ImageFieldTestBase;
use Drupal\Tests\TestFileCreationTrait;

/**
 * Tests the output of a node with an image wrapped within a link from a field.
 *
 * @group image_link_formatter
 */
class ImageLinkFormatterTest extends ImageFieldTestBase {

  use TestFileCreationTrait {
    getTestFiles as drupalGetTestFiles;
  }

  /**
   * {@inheritdoc}
   */
  public static $modules = ['field_ui', 'image_link_formatter'];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Test the display of an image wrapped within a custom link field.
   *
   * Adds an Image and Link field to the 'article' content type, then creates a
   * node with an empty link and tests the display. Then, a URL link is added to
   * the node and the display is tested again.
   */
  public function testImageLinkFormatterWrappedImage() {
    // Create an image and link field.
    $link_field_name = $this->createLinkField();
    $image_field_name = strtolower($this->randomMachineName());
    $this->createImageField(
      $image_field_name,
      'article',
      ['uri_scheme' => 'public'],
      ['alt_field_required' => 0]
    );

    // Upload an image to a new node of type 'article', without a link value.
    $test_image = current($this->drupalGetTestFiles('image'));
    $nid = $this->uploadNodeImage($test_image, $image_field_name, 'article');
    $node_storage = $this->container->get('entity_type.manager')->getStorage('node');
    $node = $node_storage->load($nid);
    $file = File::load($node->$image_field_name->get(0)->getValue()['target_id']);
    $image_field_settings = [
      'type' => 'image_link_formatter',
      'settings' => ['image_link' => $link_field_name],
    ];

    // Test the formatter when the link field is empty.
    $output = $this->renderField($node, $image_field_name, $image_field_settings);
    $this->assertEqual($output, '<img src="' . $file->createFileUrl() . '" width="40" height="20" alt="" />');

    // Add a link to the node and test the output has been updated.
    $node->$link_field_name = [
      'uri' => 'http://example.com',
      'options' => [],
      'title' => 'Custom Link',
    ];
    $node->save();

    // Test the formatter when a link is present.
    $output = $this->renderField($node, $image_field_name, $image_field_settings);
    $this->assertEqual($output, '<a href="http://example.com"><img src="' . $file->createFileUrl() . '" width="40" height="20" alt="" /></a>');
  }

  /**
   * Render a field on a given entity with the given settings.
   *
   * @param Object $entity
   *   The entity to render the field from.
   * @param string $field_name
   *   The field to render.
   * @param array $settings
   *   An array of field settings or a view mode.
   *
   * @return string
   *   Rendered field HTML.
   */
  public function renderField(Object $entity, $field_name, array $settings) {
    $build = $entity->get($field_name)->view($settings);
    \Drupal::service('renderer')->renderRoot($build[0]);
    $field_output = trim($build[0]['#markup']);
    $field_output = str_replace("\n", '', $field_output);
    return $field_output;
  }

  /**
   * Create a link field attached to the 'article' node type, used in the tests.
   */
  protected function createLinkField() {
    $field_name = strtolower($this->randomMachineName());
    // Create a field with settings to be validated.
    $this->fieldStorage = FieldStorageConfig::create([
      'entity_type' => 'node',
      'field_name' => $field_name,
      'type' => 'link',
      'cardinality' => FieldStorageDefinitionInterface::CARDINALITY_UNLIMITED,
    ]);
    $this->fieldStorage->save();
    $this->field = FieldConfig::create([
      'entity_type' => 'node',
      'field_name' => $field_name,
      'bundle' => 'article',
      'settings' => [
        'title' => DRUPAL_DISABLED,
        'link_type' => LinkItemInterface::LINK_GENERIC,
      ],
    ]);
    $this->field->save();
    return $field_name;
  }

}
