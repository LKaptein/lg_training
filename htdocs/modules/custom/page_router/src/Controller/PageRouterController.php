<?php

namespace Drupal\page_router\Controller;

use Drupal\page_router\PageRouterServices\PageMessageGenerator;
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Response;

//Step 1: print out message to page
//class PageRouterController {
//  public function myMessage($count) {
//    $i=0;
//    do {
//      echo "count is ". $i . '<br/>';
//      $i++;
//    } while ($i < $count);
//
//    return new Response("Laurie's First Custom Page!!");
//  }
//}

//Step 2: Move message to a new file that will become a service.
class PageRouterController {
  public function myMessage($count) {

    $PageMessageGenerator = new PageMessageGenerator();
    $message = $PageMessageGenerator->getMessage($count);
    return new Response($message);
  }
}

//Step 3: Add Message Generator as a service
//class PageRouterController extends ControllerBase {
//
//  private $PageMessageGenerator;
//
//  public function __construct(PageMessageGenerator $PageMessageGenerator) {
//    $this->PageMessageGenerator = $PageMessageGenerator;
//  }
//
//  public function myMessage ($count) {
//
//    $message = $PageMessageGenerator->->myMessage($count);
//
//    return new Response($message);
//  }
//
//  public static function create(ContainerInterface $container) {
//    $PageMessageGenerator = $container ->get('page_router.PageMessageGenerator');
//    return new static ($PageMessageGenerator);
//  }

