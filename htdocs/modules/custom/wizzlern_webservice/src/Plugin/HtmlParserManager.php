<?php

namespace Drupal\wizzlern_webservice\Plugin;

use Drupal\Core\Plugin\DefaultPluginManager;
use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;

/**
 * Provides the Html parser plugin manager.
 */
class HtmlParserManager extends DefaultPluginManager {


  /**
   * Constructor for HtmlParserManager objects.
   *
   * @param \Traversable $namespaces
   *   An object that implements \Traversable which contains the root paths
   *   keyed by the corresponding namespace to look for plugin implementations.
   * @param \Drupal\Core\Cache\CacheBackendInterface $cache_backend
   *   Cache backend instance to use.
   * @param \Drupal\Core\Extension\ModuleHandlerInterface $module_handler
   *   The module handler to invoke the alter hook with.
   */
  public function __construct(\Traversable $namespaces, CacheBackendInterface $cache_backend, ModuleHandlerInterface $module_handler) {
    parent::__construct('Plugin/HtmlParser', $namespaces, $module_handler, 'Drupal\wizzlern_webservice\Plugin\HtmlParserInterface', 'Drupal\wizzlern_webservice\Annotation\HtmlParser');

    $this->alterInfo('wizzlern_webservice_html_parser_info');
    $this->setCacheBackend($cache_backend, 'wizzlern_webservice_html_parser_plugins');
  }

}
