<?php

namespace Drupal\inspiring_message\Controller;

Use \Drupal\Component\Render\MarkupInterface;
/*
* Returns practice exercises and output
*/

class PracticeController {
  public function stringFormatting() {
    $output = 'sample';

    // 1. Return plain text
    $output = 'This is plain text.';
    $build[] = array(
      '#plain_text' => $output,
    );

    // 2. Return simple HTML
    $output = '<p>Here is some text <strong>with HTML formatting</strong>';
    $build[] = array(
      '#markup' => $output,
    );

    // 3. Static text with variables -  placeholder replacement value is a string
    $number = 'abc';
    $translatedText = FormattableMarkup::placeholderFormat()('Translatable text with a number .. @number', [@number => (string) $number]);
    return $build;
  }
}
