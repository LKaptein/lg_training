<?php

namespace Drupal\wizzlern_webservice\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\wizzlern_webservice\Plugin\HtmlParserManager;

/**
 * Class DebugHtmlParser.
 *
 * @package Drupal\wizzlern_webservice\Controller
 */
class DebugHtmlParser extends ControllerBase {

  /**
   * Drupal\wizzlern_webservice\Plugin\HtmlParserManager definition.
   *
   * @var \Drupal\wizzlern_webservice\Plugin\HtmlParserManager
   */
  protected $pluginManagerHtmlParser;

  /**
   * {@inheritdoc}
   */
  public function __construct(HtmlParserManager $plugin_manager_html_parser) {
    $this->pluginManagerHtmlParser = $plugin_manager_html_parser;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('plugin.manager.html_parser')
    );
  }

  /**
   * Build.
   *
   * @return string
   *   Return Hello string.
   */
  public function build() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: build')
    ];
  }

}
