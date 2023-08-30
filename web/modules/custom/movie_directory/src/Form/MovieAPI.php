<?php

namespace Drupal\movie_directory\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class MovieAPI extends FormBase
{
    const MOVIE_API_CONFIG_PAGE = 'movie_api_config_page:values';

    /**
     * {@inheritdoc}
     */
    public function getFormId()
    {
        return 'movie_api_config_page';
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $values = \Drupal::state()->get(self::MOVIE_API_CONFIG_PAGE);
        $form = [];

        $form['api_base_url'] = [
            '#type' => 'textfield',
            '#title' => $this->t('API base URL'),
            '#description' => $this->t('The base URL for the API.'),
            '#required' => TRUE,
            '#default_value' => $values['api_base_url'] ?? '',
        ];

        $form['api_key'] = [
            '#type' => 'textfield',
            '#title' => $this->t('API Key (v3 auth)'),
            '#description' => $this->t('This is the api key that will be used to access the API.'),
            '#required' => TRUE,
            '#default_value' => $values['api_key'] ?? '',
        ];

        $form['actions']['#type'] = 'actions';
        $form['actions']['submit'] = [
            '#type' => 'submit',
            '#value' => $this->t('Save'),
            '#button_type' => 'primary',
        ];

        return $form;
    }

    /**
     * {@inheritdoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        $submitted_values = $form_state->getValues();
        \Drupal::state()->set(self::MOVIE_API_CONFIG_PAGE, $submitted_values);

        $messenger = \Drupal::service('messenger');
        $messenger->addMessage($this->t('You new configuration options have been saved.'));
    }
}
