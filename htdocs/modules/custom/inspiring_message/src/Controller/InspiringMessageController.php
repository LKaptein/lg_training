<?php

namespace Drupal\inspiring_message\Controller;

/*
 * Returns a randomly generated inspiring message
 */
class InspiringMessageController {
  public function newMessage() {

    $welcome_message = $this->welcomeMessage();

    $nids = \Drupal::EntityTypeManager()->getStorage('node')->loadMultiple();

    // TODO: only get message node with type = inspiring

    // Select body from random node to display as inspiring message
    $random_message = \Drupal::EntityTypeManager()->getStorage('node')->load(array_rand($nids))->get('body')->value;

    $build = [
      'title' => [
        '#markup' => $welcome_message,
        '#prefix' => '<h2 id="elements">',
        '#suffix' => '</h2>',
      ],
      'content' => [
        '#markup' => '<p>' . $random_message . '</p>',
        '#prefix' => '<div>',
        '#suffix' => '</div>',
      ]
    ];
    return $build;
  }

  /*
   * This function returns the welcome message personalized with username and date.
   */
  public function welcomeMessage(){
    $current_user = \Drupal::currentuser();

    // Generate customized welcome message with username and current date.
    $welcome_message = 'Hello ' . $current_user->getDisplayName() . '</br>';
    $welcome_message .= 'Today is ' . date("l M d, Y G:i", time());

    return $welcome_message;
  }
}

