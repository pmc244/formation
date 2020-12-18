<?php
namespace Drupal\perf\Services;

class LazyBuilderService {

  public function page()
  {
    return [
      '#markup' => 'ceci est statique'
    ];
  }
}
