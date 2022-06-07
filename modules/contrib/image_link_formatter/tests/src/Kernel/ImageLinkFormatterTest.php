<?php

namespace Drupal\Tests\image_link_formatter\Kernel;

use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Core\Url;
use Drupal\entity_test\Entity\EntityTest;
use Drupal\field\Entity\FieldConfig;
use Drupal\field\Entity\FieldStorageConfig;
use Drupal\link\LinkItemInterface;
use Drupal\Tests\image\Kernel\ImageFormatterTest;

/**
 * Tests the rendering of an image wrapped within a link through the formatter.
 *
 * @group image
 */
class ImageLinkFormatterTest extends ImageFormatterTest {

  /**
   * {@inheritdoc}
   */
  public static $modules = ['file', 'image', 'link', 'image_link_formatter'];

  /**
   * The name of the Link field used for testing the formatter.
   *
   * @var string
   */
  protected $fieldNameLink;

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    // Extend parent's 'setUp' method by adding a link field to the entity type.
    parent::setUp();

    // Initialize link field used for testing the formatter.
    $this->fieldNameLink = mb_strtolower($this->randomMachineName());

    // Create link field storage.
    FieldStorageConfig::create([
      'entity_type' => $this->entityType,
      'field_name' => $this->fieldNameLink,
      'type' => 'link',
      'cardinality' => FieldStorageDefinitionInterface::CARDINALITY_UNLIMITED,
    ])->save();
    // Create link field configuration.
    FieldConfig::create([
      'entity_type' => $this->entityType,
      'field_name' => $this->fieldNameLink,
      'bundle' => $this->bundle,
      'settings' => [
        'title' => DRUPAL_DISABLED,
        'link_type' => LinkItemInterface::LINK_GENERIC,
      ],
    ])->save();

    // Save link field's entity view display settings.
    $this->display = \Drupal::service('entity_display.repository')
      ->getViewDisplay($this->entityType, $this->bundle)
      ->setComponent($this->fieldNameLink, [
        'type' => 'link',
        'label' => 'hidden',
      ]);
    $this->display->save();
  }

  /**
   * Tests Image Link Formatter URL options handling with a Link field.
   *
   * @see \Drupal\Tests\image\Kernel\ImageFormatterTest::testImageFormatterUrlOptions()
   */
  public function testImageLinkFormatterUrlOptions() {
    // Configure image field to display with 'image_link_formatter', pointing to
    // the link field created in setUp.
    $this->display->setComponent($this->fieldName, [
      'type' => 'image_link_formatter',
      'label' => 'hidden',
      'settings' => [
        'image_link' => $this->fieldNameLink,
      ],
    ]);

    // Create a test entity with the image and link fields set.
    $entity = EntityTest::create([
      'name' => $this->randomMachineName(),
    ]);
    // Number of values to generate for each field.
    $delta_max = 3;
    $entity->{$this->fieldName}->generateSampleItems($delta_max);
    $entity->{$this->fieldNameLink}->generateSampleItems($delta_max);
    $entity->save();

    // Generate the render array to verify URL options are as expected.
    $build = $this->display->build($entity);
    // Test multiple values for image and link fields, indexed by delta.
    for ($delta = 0; $delta < $delta_max; $delta++) {
      $this->assertInstanceOf(Url::class, $build[$this->fieldName][$delta]['#url']);
      $build[$this->fieldName][$delta]['#url']->setOption('attributes', ['data-attributes-test' => 'test123']);

      /** @var \Drupal\Core\Render\RendererInterface $renderer */
      $renderer = $this->container->get('renderer');

      $output = $renderer->renderRoot($build[$this->fieldName][$delta]);
      $this->assertStringContainsString('<a href="' . $entity->{$this->fieldNameLink}->get($delta)->getUrl()->toString() . '" data-attributes-test="test123"', (string) $output);
    }

  }

}
