<?php

defined('SYSPATH') or die('No direct script access.');
class Controller_Welcome extends Controller_Abstract_Socialbat {
  public function action_index() {
    $content = Kostache::factory('welcome/index');
    $this->response->body($content);
  }
}

