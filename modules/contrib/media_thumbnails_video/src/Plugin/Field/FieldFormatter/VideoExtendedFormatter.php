<?php

namespace Drupal\media_thumbnails_video\Plugin\Field\FieldFormatter;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\file\Plugin\Field\FieldFormatter\FileVideoFormatter;
use Drupal\media\MediaInterface;

/**
 * Plugin implementation of the 'file_video' formatter.
 *
 * @FieldFormatter(
 *   id = "file_video_extended",
 *   label = @Translation("Video extended"),
 *   description = @Translation("Display the file using an HTML5 video tag."),
 *   field_types = {
 *     "file"
 *   }
 * )
 */
class VideoExtendedFormatter extends FileVideoFormatter {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $elements = parent::viewElements($items, $langcode);
    foreach ($elements as $key => $element) {
      $attributes = $this->prepareAttributes();
      $item = $items[$key];
      $source_entity = $item->getEntity();
      $poster = $this->getPoster($source_entity);
      if ($poster) {
        $attributes->setAttribute('poster', $poster);
      }

      $elements[$key]['#theme'] = 'file_video';
      $elements[$key]['#attributes'] = $attributes;
    }

    return $elements;
  }

  /**
   * Get poster.
   *
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   Entity object.
   *
   * @return bool|string
   *   Url to poster or false.
   */
  protected function getPoster(EntityInterface $entity) {
    if ($entity instanceof MediaInterface) {
      $thumbnail = $entity->get('thumbnail')->entity;
      if ($thumbnail) {
        $url = file_create_url($thumbnail->getFileUri());
        return $url;
      }
    }

    return FALSE;
  }

}
