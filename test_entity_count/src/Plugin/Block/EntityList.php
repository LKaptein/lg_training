<?php

/**
 * @file
 * Contains \Drupal\test_entity_count\Plugin\Block\EntityList.php
 */

namespace Drupal\test_entity_count\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a recent games block.
 *
 * @Block(
 *   id = "entity_list",
 *   admin_label = @Translation("Entity List"),
 *   category = @Translation("Entity List")
 * )
 */
class EntityList extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    $title = 'abc';
    $value = 'test';

    //1. get a single node;
//    $id = 96;
//    $node = \Drupal::EntityTypeManager()->getStorage('node')->load($id);
//
//    $title = $node->label();

    //2. Load multiple nodes
//    $ids = array( 83, 93, 96);
//    $nids = \Drupal::EntityTypeManager()->getStorage('node')->loadMultiple($ids);
//    $title ='';
//    foreach ($nids as $nid){
    // @todo No need to wrap $nid->label() into ( and ). (I did not know this was possible at all.)
    // @todo A break tag without closing tag should be '<br/>' or '<br />'.
//      $title  = $title .  ($nid->label()) . '<br>';
//    }

    //3. load all nodes
//    $nids = \Drupal::EntityTypeManager()->getStorage('node')->loadMultiple();
//    $title ='';
//    foreach ($nids as $nid){
//      $title  = $title .  ($nid->label()) . '<br>';
//    }

    //4. other examples: roles, users, blocks, files, taxonomy_vocabulary
//    $nids = \Drupal::EntityTypeManager()->getStorage('taxonomy_term')->loadMultiple();
//    $title ='';
//    foreach ($nids as $nid){
//      $title  = $title .  ($nid->label()) . '<br>';
//    }

    //load NID that does not exist
//    $id = 977776;
//    $node = \Drupal::EntityTypeManager()->getStorage('node')->load($id);
//    if (empty($node)){
//      debug("it is empty");
//    }

    //3. load multiple nodes, some that do not exist
    // @todo According to the latest drupal code style, arrays should be written as [...] instead of array(...).
//    $nids = array(-1, 96, 97);
//    $nodes = \Drupal::EntityTypeManager()->getStorage('node')->loadMultiple($nids);
//    if (count($nids)!=count($nodes)){
//      debug('it is not equal');
//    }

    //2. get node properties;
    $id = 113;
    $node = \Drupal::EntityTypeManager()->getStorage('node')->load($id);

//    //get the title of the node
//    $title = $node->label();
//    //get the status of the node
//    $status = $node->isPublished();
//    //Get the created date (timestamp) of a node.
//    $created_date = format_date($node->getCreatedTime(), 'm');
//    //Get the changed date (timestamp) of a node.
    // Note that date() is a PHP function that does not use the Drupal time zone
    // setting. The Drupal alternative is format_date().
//    $changed_date = date('m.d.y', $node->getChangedTime());
//    debug($changed_date);

//    Get the value of the field_text.
//    $value = $node->get('field_text')->value;
//    //    Get the value of the field field_bool.
//    $value = $node->get('field_field_bool')->value;
//    Get the second value of field_words.
//    $value = $node->get('field_words')->get(1)->get('value')->getValue();
//    Get an array with all values of field_words
    // @todo Rephrasing the exercise:
    //   Get all words from field_words into an array for example: $values = ['word 1', 'word 2', 'word 3']
//    $value = $node->get('field_words');

    //Get data from complex configurable fields
//    Get the text value from the formatted text field field_description.
    // @todo The result must be in the form of $value = '<p>Some description text.</p>'
//    $value = $node->get('field_description')->get(0)->get('value')->getValue();
//    Get the text format value from the formatted text field.
    // @todo The result must be in the form of $value = 'the_text_format'.
//    $value = $node->get('field_description')->get(0)->get('format')->getValue();
//    The the alt text from the field field_image.
    // @todo The two lines below can be simplified to: $value = $node->get('field_image')->alt.
//    $value = $node->get('field_image')->getValue();
//    $alt = $value[0]['alt'];
      // @todo See the comment above for the simplest format.
//    $value = $node->get('field_image')->get(0)->get('alt')->getValue();


//    Get data from referenced entities
    //    Get the referenced entity ID from the field field_ref_article.
//    $tax_id = $node->get('field_article')->get(0)->get('target_id')->getValue();
//    $taxonomy_term = $node->get('field_article')->entity;
//
////    Get the title of the referenced article.
    // @todo Different entities can have different methods to retrieve the titel.
    //   But all have one method that works for _all_ content entities: label()
    //   Better get used to using that one.
//    $value = $taxonomy_term->getTitle();
////    Get the body text of the referenced article.
   // @todo Revisit this when you have corrected the "Get data from complex configurable fields" exercises above.
//    $value = $taxonomy_term->get('field_body')->get(0)->get('value')->getValue();

//    Set the value of a base field
//For most or all bases fields, you will find setter methods to set the field value.
//    Set the title of the node.

//    $node->setTitle(('New Title'));
//    $node->save();

    $node->setChangedTime(time());
    $node->save();

    debug(time());

    $items = [
      $title
    ];

    $build = [
      '#theme' => 'item_list',
      '#items' => $items,
    ];

    return $build;
  }

}
