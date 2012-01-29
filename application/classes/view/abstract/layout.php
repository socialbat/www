<?php

defined('SYSPATH') or die('No direct script access.');
abstract class View_Abstract_Layout extends Kostache_Layout {

  public $html = array();

  public function before(&$html) {}

  public function html() {
    // Set default title
    $this->html['head']['title'] = __('Socialb.at default title');

    // Set default CSS styles
    $this->html['head']['styles'] = array();
    $this->html['head']['styles'][] = 'assets/css/reset.css';
    $this->html['head']['styles'][] = 'assets/css/grid.css';
    $this->html['head']['styles'][] = 'assets/css/style.css';

    // Set default CSS styles
    $this->html['scripts'] = array();
    $this->html['scripts'][] = 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js';
    $this->html['scripts'][] = 'assets/js/socialbat.js';

    // Set default META tags
    $this->html['head']['metas'] = array();
    $this->html['head']['metas'][] = array(
      'charset' => 'utf-8',
    );

    // Set default FB META tags
    $this->html['head']['metas_fb'] = array();
    $this->html['head']['metas_fb']['admins'] = 'lucas.michot,damien.livre';

    // Set default OG META tags
    $this->html['head']['metas_og'] = array();
    $this->html['head']['metas_og']['site_name'] = 'socialb.at';

    // Allows html to be overriden
    $this->before($this->html);

    // Format CSS styles
    foreach ($this->html['head']['styles'] as & $style) {
      $style = Html::style($style);
    }
    $this->html['head']['styles'] = implode(PHP_EOL, $this->html['head']['styles']);

    // Format scripts
    foreach ($this->html['scripts'] as & $script) {
      $script = Html::script($script);
    }
    $this->html['scripts'] = implode(PHP_EOL, $this->html['scripts']);

    // Add FB META tags to META tags
    foreach ($this->html['head']['metas_fb'] as $key => $value) {
      $this->html['head']['metas'][] = array(
        'fb:'. $key => $value,
      );
    }

    // Add OG META tags to META tags
    foreach ($this->html['head']['metas_og'] as $key => $value) {
      $this->html['head']['metas'][] = array(
        'og:'. $key => $value,
      );
    }

    // Format META tagss
    $metas = array();
    foreach ($this->html['head']['metas'] as & $meta) {
      $meta = Html::meta($meta);
      $metas[md5($meta)] = $meta;
    }
    sort($metas);
    $this->html['head']['metas'] = implode(PHP_EOL, $metas);

    // Return html specific variable
    return $this->html;
  }
}

