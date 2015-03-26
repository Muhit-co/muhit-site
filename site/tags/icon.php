<?php

// custom icon tag function for IONICONS
// adapted from http://getkirby.com/forum/code-snippets/20141201/fontawesome-icon-tag
kirbytext::$tags['icon'] = array(
  'attr' => array(
    'size',
    'fixed',
    'pull',
    'rotate',
    'flip',
    'stack',
    'border',
    'spin',
    'inverse',
    'rescale',
    'iconcolor',
    'stackcolor'
  ),
  'html' => function($tag) {
      $html = '';
      $html .= '<i class="ion-' . $tag->attr('icon');
      if($tag->attr('size'))   $html .= ' ion-' . $tag->attr('size');
      $html .= '"></i>';
    return $html;
  }
);

?>