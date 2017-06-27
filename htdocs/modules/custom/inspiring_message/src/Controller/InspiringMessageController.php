<?php

namespace Drupal\inspiring_message\Controller;

/*
 * Returns a randomly generated inspiring message
 */
class InspiringMessageController {
  public function newMessage() {

    // TODO: make this class and methods more OOP
    // TODO: add private/public/protected to properties and methods
    // TODO: split out inspring message into its own method
    // TODO: move inspring message into a service, and use inheritance here
    // TODO: dependency injection

    // TODO: Change $nids variable name(because it contains nodes, not node IDs.
    //       ......Name a variable after what it contains, not after how its being used

    // TODO:  Loading entities for only using the array keys is a waste of resources if there is an alternative. Find an
    //          alternative that only returns node IDs, does the randomizing _
    //          and_ limits the results to content of type 'inspring'.
    $welcome_message = $this->welcomeMessage();

    $nids = \Drupal::EntityTypeManager()->getStorage('node')->loadMultiple();

    // TODO: only get message node with type = inspiring

    // Select body from random node to display as inspiring message.
    // TODO: Replace -> value.
    //        Loading value This only loads the text from the message, but ignores the text format.
    //        Using the raw text without processing it with the right format is unsafe!
    $random_message = \Drupal::EntityTypeManager()->getStorage('node')->load(array_rand($nids))->get('body')->value;

    // TODO: replace #prefix/#sufix witgh drupal 8 inline template to combine html and string.
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

    // TODO: change message string concatenation
    $current_user = \Drupal::currentuser();

    // Generate customized welcome message with username and current date.
    $welcome_message = 'Hello ' . $current_user->getDisplayName() . '</br>';
    $welcome_message .= 'Today is ' . date("l M d, Y G:i", time());

    return $welcome_message;
  }
}

