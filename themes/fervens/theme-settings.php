<?php 

// $Id$

function fervens_settings($saved_settings) {
  $defaults = array(
    'layout_type'        => 'fixed-width',
    'layout_column_type' => 'fervens-a',
  );

  $settings = array_merge($defaults, $saved_settings);

  $form['layout'] = array(
    '#type'        => 'fieldset',
    '#title'       => t('Layout'),
    '#collapsible' => TRUE,
    '#collapsed'   => FALSE,
  );

  $form['layout']['layout_type'] = array(
    '#type'          => 'radios',
    '#title'         => t('Layout type'),
    '#default_value' => $settings['layout_type'],
    '#description'   => t('Select the layout type to use.'),
    '#options'       => array(
                          'fixed-width'  => t('Fixed width (960 pixels wide)'),
                          'liquid-width' => t('Liquid width (Maximum 1280 pixels wide'),
                        ),
  );

  $form['layout']['layout_column_type'] = array(
    '#type'          => 'radios',
    '#title'         => t('Layout column type'),
    '#default_value' => $settings['layout_column_type'],
    '#description'   => t('Choose between 3 column types.'),
    '#options'       => array(
                          'fervens-a' => t('Fervens A (Sidebar left, content, sidebar right)'),
                          'fervens-b' => t('Fervens B (Sidebar left, sidebar right, content'),
                          'fervens-c' => t('Fervens C (Content, sidebar left, sidebar right'),
                        ),
  );

  return $form;
}
