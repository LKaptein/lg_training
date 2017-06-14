<?php

namespace Drupal\page_router\Controller;

use Symfony\Component\HttpFoundation\Response;

/**
 * Output for a page redirect to NewPage
 */
class PageRouterController {
  public function myMessage($count) {
    $i=0;
    do {
      echo "count is ". $i . '<br/>';
      $i++;
    } while ($i < $count);

    return new Response("Laurie's First Custom Page!!");
  }

}
