<?php

namespace Drupal\inspiring_message\Controller;

/*
 * Returns a randomly generated inspiring message
 */
class InspiringMessageController {
  public function newMessage() {

    $current_user = \Drupal::currentuser();

    // generate customized welcome message with username and current date
    $welcome_message = 'Hello ' . $current_user->getDisplayName() . '</br>';
    $welcome_message .= 'Today is ' . date("l M d, Y G:i", time());

    $terms = \Drupal::entityManager()->getStorage('taxonomy_term')->loadTree('inspiring_message');

    $termID = 3;

    // TODO select random taxonomy term from array
    //$termID = array_rand($terms);

    //get description for the random term selected
    $random_message = taxonomy_term_load($termID)->get('description')->getValue();

    $inspring_message = $welcome_message . '<p><h2>' . $random_message . '</h2>';

    //return new Response($welcome_message . '<p><h2>' . $random_message . '</h2>');
    $items = [
      $inspring_message
    ];

    $build = [
      '#theme' => 'item_list',
      '#items' => $items,
    ];

    return $build;
  }
}

