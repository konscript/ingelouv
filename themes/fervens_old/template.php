<?php
// $Id$

/**
* Initialising theme settings.
*/
if (is_null(theme_get_setting('layout_type'))) {
  global $theme_key;

  $defaults = array(
    'layout_type'        => 'fixed-width',
    'layout_column_type' => 'fervens-a',
  );

  $settings = theme_get_settings($theme_key);

  if (module_exists('node')) {
    foreach (node_get_types() as $type => $name) {
      unset($settings['toggle_node_info_' . $type]);
    }
  }

  variable_set(str_replace('/', '_', 'theme_'. $theme_key .'_settings'), array_merge($defaults, $settings));

  theme_get_setting('', TRUE);
}

/**
* Adding HTML classes to <body> tag. Used for creating the base layout.
*/
function fervens_body_class($is_front, $search_box, $sidebar_left, $sidebar_right) {
  if ($is_front) {
    $class = 'front-page';
  }
  else {
    $class = 'not-front-page';
  }

  if (!empty($search_box)) {
    $class .= ' search-box';
  }

  $class .= ' ' . theme_get_setting('layout_type') . ' ' . theme_get_setting('layout_column_type');

  if ($sidebar_left != '' && $sidebar_right != '') {
    $class .= ' sidebar-left-and-right';
  }
  else {
    if ($sidebar_left != '') {
      $class .= ' sidebar-left';
    }
    else if ($sidebar_right != '') {
      $class .= ' sidebar-right';
    }
  }

  $class .= ' ' . theme_get_setting('layout_column_type');

  if ($sidebar_left != '' && $sidebar_right != '') {
    $class .= '-sidebar-left-and-right';
  }
  else {
    if ($sidebar_left != '') {
      $class .= '-sidebar-left';
    }
    else if ($sidebar_right != '') {
      $class .= '-sidebar-right';
    }
  }

  return $class;
}

/**
* Replace the default RSS icon with theme's version.
*/
function fervens_feed_icon($url, $title) {
  if ($image = theme('image', path_to_theme() . '/images/rss.png', t('Syndicate content'), $title)) {
    return '<a href="' . check_url($url) . '" class="feed-icon">' . $image . '</a>';
  }
}

/**
* Implements template_preprocess_block() function.
* Adds 'first' and 'last' class to blocks for styling.
*/
function fervens_preprocess_block(&$variables) {
  $variables['block']->extra_classes = '';

  static $block_counter = array();

  if (!isset($counts[$variables['block']->region])) {
    $block_counter[$variables['block']->region] = count(block_list($variables['block']->region));
  }

  if ($block_counter[$variables['block']->region] == 1) {
    $variables['block']->extra_classes .= 'last';
  }
  else {
    if ($variables['block_id'] == 1) {
      $variables['block']->extra_classes .= 'first';
    }
    elseif (($variables['block_id'] == $block_counter[$variables['block']->region])) {
      $variables['block']->extra_classes .= 'last';
    }
    else {
      $variables['block']->extra_classes .= 'normal';
    }
  }
}
