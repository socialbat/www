<?php

defined('SYSPATH') or die('No direct script access.');
class Controller_Dashboard extends Controller_Abstract_Socialbat {
  public function action_index() {
    $content = Kostache::factory('dashboard/index');
    $this->response->body($content);
  }
}

