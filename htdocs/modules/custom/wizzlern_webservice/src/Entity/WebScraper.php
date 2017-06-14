<?php

namespace Drupal\wizzlern_webservice\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;

/**
 * Defines the Web scraper entity.
 *
 * @ConfigEntityType(
 *   id = "web_scraper",
 *   label = @Translation("Web scraper"),
 *   handlers = {
 *     "list_builder" = "Drupal\wizzlern_webservice\WebScraperListBuilder",
 *     "form" = {
 *       "add" = "Drupal\wizzlern_webservice\Form\WebScraperForm",
 *       "edit" = "Drupal\wizzlern_webservice\Form\WebScraperForm",
 *       "delete" = "Drupal\wizzlern_webservice\Form\WebScraperDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\wizzlern_webservice\WebScraperHtmlRouteProvider",
 *     },
 *   },
 *   config_prefix = "web_scraper",
 *   admin_permission = "administer site configuration",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/web_scraper/{web_scraper}",
 *     "add-form" = "/admin/structure/web_scraper/add",
 *     "edit-form" = "/admin/structure/web_scraper/{web_scraper}/edit",
 *     "delete-form" = "/admin/structure/web_scraper/{web_scraper}/delete",
 *     "collection" = "/admin/structure/web_scraper"
 *   }
 * )
 */
class WebScraper extends ConfigEntityBase implements WebScraperInterface {

  /**
   * The Web scraper ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The Web scraper label.
   *
   * @var string
   */
  protected $label;

}
