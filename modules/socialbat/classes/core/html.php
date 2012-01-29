<?php

defined('SYSPATH') or die('No direct script access.');
class Core_Html extends Kohana_HTML {


  public static function meta(array $attributes = NULL) {

    foreach ($attributes as $key => &$value) {
      $value = empty($value) ? '' : $value;
    }

    ksort($attributes);
    return '<meta'. HTML::attributes($attributes) .' />';
  }


  public static function script($file, array $attributes = NULL, $protocol = NULL, $index = FALSE) {
    $file = (strpos($file, '://') === FALSE ? URL::base($protocol, $index) : NULL) . $file;

    if (substr($file, 0, 5) == 'http:') {
      $file = substr($file, 5);
    }

    if (substr($file, 0, 6) == 'https:') {
      $file = substr($file, 6);
    }

    $attributes['src'] = $file;

    $attributes['type'] = 'text/javascript';

    return '<script'. HTML::attributes($attributes) .'></script>';
  }
}

