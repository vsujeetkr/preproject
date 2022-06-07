<?php

namespace Drupal\image_link_formatter\Plugin\Field\FieldFormatter;

use Drupal\Core\Entity\EntityFieldManagerInterface;
use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\Core\Field\FieldDefinitionInterface;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\image\Plugin\Field\FieldFormatter\ImageFormatter;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Extends Core 'image' formatter plugin to add a link from a custom field.
 *
 * @FieldFormatter(
 *   id = "image_link_formatter",
 *   label = @Translation("Image wrapped within link field"),
 *   field_types = {
 *     "image"
 *   },
 *   quickedit = {
 *     "editor" = "image"
 *   }
 * )
 *
 * @see \Drupal\image\Plugin\Field\FieldFormatter\ImageFormatter
 */
class ImageLinkFormatter extends ImageFormatter implements ContainerFactoryPluginInterface {

  /**
   * The entity field manager service.
   *
   * @var \Drupal\Core\Entity\EntityFieldManagerInterface
   */
  private $entityFieldManager;

  /**
   * {@inheritdoc}
   */
  public function __construct($plugin_id, $plugin_definition, FieldDefinitionInterface $field_definition, array $settings, $label, $view_mode, array $third_party_settings, AccountInterface $current_user, EntityStorageInterface $image_style_storage, EntityFieldManagerInterface $entity_field_manager) {
    parent::__construct($plugin_id, $plugin_definition, $field_definition, $settings, $label, $view_mode, $third_party_settings, $current_user, $image_style_storage);
    $this->entityFieldManager = $entity_field_manager;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $plugin_id,
      $plugin_definition,
      $configuration['field_definition'],
      $configuration['settings'],
      $configuration['label'],
      $configuration['view_mode'],
      $configuration['third_party_settings'],
      $container->get('current_user'),
      $container->get('entity_type.manager')->getStorage('image_style'),
      $container->get('entity_field.manager')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function settingsForm(array $form, FormStateInterface $form_state) {
    $element = parent::settingsForm($form, $form_state);
    // Add the link fields options to the 'image_link' select dropdown.
    $element['image_link']['#options'] += $this->getLinkFieldsOptions();
    return $element;
  }

  /**
   * {@inheritdoc}
   */
  public function settingsSummary() {
    $summary = parent::settingsSummary();

    $image_link_setting = $this->getSetting('image_link');
    $link_fields = $this->getLinkFieldsOptions();
    // Add link field label to summary, if any is selected.
    if (isset($link_fields[$image_link_setting])) {
      $summary[] = $this->t('Linked to :link_field_label', [':link_field_label' => $link_fields[$image_link_setting]]);
    }

    return $summary;
  }

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    // Extend core image formatter with a URL provided by a custom link field.
    $elements = parent::viewElements($items, $langcode);

    $image_link_setting = $this->getSetting('image_link');
    $link_fields = $this->getLinkFieldsOptions();
    if (isset($link_fields[$image_link_setting])) {
      /** @var \Drupal\link\Plugin\Field\FieldType\LinkItemList $link_items */
      $link_items = $items->getEntity()->get($image_link_setting);
      // If a link field is selected in formatter's settings, iterate through
      // each rendered image and set its '#url' value to matching link URL.
      foreach ($elements as $delta => $element) {
        /** @var \Drupal\link\Plugin\Field\FieldType\LinkItem $link_item_value */
        $link_item_value = $link_items->get($delta);
        if (!empty($link_item_value)) {
          $elements[$delta]['#url'] = $link_item_value->getUrl();
        }
      }
    }

    return $elements;
  }

  /**
   * Helper function to get a list of link fields attached to entity and bundle.
   *
   * @return array
   *   An options array of all link fields attached to this entity and bundle.
   */
  public function getLinkFieldsOptions() {
    $options = [];
    // Filter all link fields attached to this entity with this bundle.
    $link_fields = array_filter($this->entityFieldManager->getFieldDefinitions(
        $this->fieldDefinition->getTargetEntityTypeId(),
        $this->fieldDefinition->getTargetBundle()
      ),
      function (FieldDefinitionInterface $element) {
        return $element->getType() === 'link';
      });

    // Populate options array keyed by field name, for each link field found.
    foreach ($link_fields as $link_field) {
      $options[$link_field->getName()] = $link_field->getLabel() . ' (' . $link_field->getName() . ')';
    }
    return $options;
  }

}
