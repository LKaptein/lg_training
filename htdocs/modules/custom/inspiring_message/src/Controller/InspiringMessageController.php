<?php

namespace Drupal\inspiring_message\Controller;

//use Drupal\page_router\PageRouterServices\PageMessageGenerator;
//use Drupal\Core\Controller\ControllerBase;
//use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Response;

/*
 * Returns a randomly generated inspiring message
 */
class InspiringMessageController {
  public function newMessage() {
    $current_user = \Drupal::currentuser();
    $welcome_message = 'Hello ' . $current_user->getDisplayName() . '</br>';
    $welcome_message .= 'Today is ' . date("l M d, Y G:i", time());

    $inspring_message = "<h3>Always try your best!</h3>";
    return new Response($welcome_message . '<p>' . $inspring_message);
  }
}

