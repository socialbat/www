<?php

defined('SYSPATH') or die('No direct script access.');
class View_Dashboard_Index extends View_Abstract_Layout {

  /**
   * Occurs before the kostache layout is rendered
   */
  function before(&$html) {
    parent::before($html);

    // You can overide $html array here
    // $html['head']['title'] = 'overriden';
  }

  function pages() {
    return 'the pages';
  }
}

