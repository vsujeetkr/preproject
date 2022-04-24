<?php

namespace Drupal\call_now_button\Form;

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\StringTranslation\StringTranslationTrait;

/**
 * Provides settings for Call Now Button module.
 */
class CallNowButtonConfigForm extends ConfigFormBase {

  use StringTranslationTrait;

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'call_now_button_config_form';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'call_now_button.settings',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $config = $this->config('call_now_button.settings');

    $form['configuration'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Configuration'),
    ];

    $form['configuration']['call_now_button_status'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Enable Button Call Now'),
      '#default_value' => $config->get('call_now_button_status'),
    ];

    $form['configuration']['call_now_button_phone_number'] = [
      '#type' => 'number',
      '#title' => $this->t('Phone Number'),
      '#default_value' => $config->get('call_now_button_phone_number'),
      '#required' => TRUE,
    ];

    $form['configuration']['call_now_button_text'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Button Text'),
      '#default_value' => $config->get('call_now_button_text'),
    ];

    $button_position_options = [
      'right_corner' => $this->t('Right Corner'),
      'left_corner' => $this->t('Left Corner'),
      'center_bottom' => $this->t('Center Bottom'),
      'full_bottom' => $this->t('Full Bottom'),
    ];

    $form['configuration']['call_now_button_popup_position'] = [
      '#type' => 'radios',
      '#title' => $this->t('Position'),
      '#default_value' => $config->get('call_now_button_popup_position'),
      '#options' => $button_position_options,
    ];

    $form['#attached']['library'][] = 'call_now_button/global-styling';

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Save settings.
    $this->config('call_now_button.settings')
      ->set('call_now_button_status', $form_state->getValue('call_now_button_status'))
      ->set('call_now_button_phone_number', $form_state->getValue('call_now_button_phone_number'))
      ->set('call_now_button_text', $form_state->getValue('call_now_button_text'))
      ->set('call_now_button_popup_position', $form_state->getValue('call_now_button_popup_position'))
      ->save();

    parent::submitForm($form, $form_state);
  }

}
