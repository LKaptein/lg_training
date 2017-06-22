<?php

namespace Drupal\inspiring_message\Controller;

use Drupal\page_router\PageRouterServices\PageMessageGenerator;
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Response;

/*
 * returns a randomly generated inspiring message
 */
class InspiringMessageController {
  public function returnMessage() {
    return new Response("Have a great day!!");
  }
}

