<?php

namespace Drupal\page_router\PageRouterServices;
/**
 * Generates a message and a counter printed out the number of times as the input paramter.
 */
class PageMessageGenerator {
  public function getMessage($count) {

    $i = 0;
    do {
      echo "count is " . $i . '<br/>';
      $i++;
    } while ($i < $count);
    return "Hello from Laurie!";
  }
}
