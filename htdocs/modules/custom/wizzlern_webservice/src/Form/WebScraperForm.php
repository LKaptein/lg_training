<?php

namespace Drupal\wizzlern_webservice\Form;

use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class WebScraperForm.
 *
 * @package Drupal\wizzlern_webservice\Form
 */
class WebScraperForm extends EntityForm {

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    $form = parent::form($form, $form_state);

    $web_scraper = $this->entity;
    $form['label'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Label'),
      '#maxlength' => 255,
      '#default_value' => $web_scraper->label(),
      '#description' => $this->t("Label for the Web scraper."),
      '#required' => TRUE,
    ];

    $form['id'] = [
      '#type' => 'machine_name',
      '#default_value' => $web_scraper->id(),
      '#machine_name' => [
        'exists' => '\Drupal\wizzlern_webservice\Entity\WebScraper::load',
      ],
      '#disabled' => !$web_scraper->isNew(),
    ];

    /* You will need additional form elements for your custom properties. */

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $web_scraper = $this->entity;
    $status = $web_scraper->save();

    switch ($status) {
      case SAVED_NEW:
        drupal_set_message($this->t('Created the %label Web scraper.', [
          '%label' => $web_scraper->label(),
        ]));
        break;

      default:
        drupal_set_message($this->t('Saved the %label Web scraper.', [
          '%label' => $web_scraper->label(),
        ]));
    }
    $form_state->setRedirectUrl($web_scraper->toUrl('collection'));
  }

}
