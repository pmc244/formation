<?php

namespace Drupal\perf\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'PerfBlock' block.
 *
 * @Block(
 *  id = "perf_block",
 *  admin_label = @Translation("Perf block"),
 * )
 */
class PerfBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['#create_placeholder'] = TRUE;
    $build['#lazy_builder'] = ['perf.lazybuilders:page', []];

    return $build;
  }

}
