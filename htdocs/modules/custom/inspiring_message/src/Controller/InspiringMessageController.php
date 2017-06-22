<?php

namespace Drupal\inspiring_message\Controller;

use Drupal\page_router\PageRouterServices\PageMessageGenerator;
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Response;

/*
 * Returns a randomly generated inspiring message
 */
class InspiringMessageController {
  public function newMessage() {
    return new Response("Always try your best!");
  }
}

