<?php

namespace Drupal\wizzlern_webservice\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Defines a Html parser item annotation object.
 *
 * @see \Drupal\wizzlern_webservice\Plugin\HtmlParserManager
 * @see plugin_api
 *
 * @Annotation
 */
class HtmlParser extends Plugin {


  /**
   * The plugin ID.
   *
   * @var string
   */
  public $id;

  /**
   * The label of the plugin.
   *
   * @var \Drupal\Core\Annotation\Translation
   *
   * @ingroup plugin_translatable
   */
  public $label;

}
