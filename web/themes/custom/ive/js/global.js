/**
 * @file
 * Global utilities.
 *
 */
(function ($, Drupal, drupalSettings) {
  'use strict';
  $(document).ready(function () {
    alert('Bonjour ' + drupalSettings.username);
  })

  Drupal.behaviors.ive = {
    attach: function (context, settings) {

    }
  };

})(jQuery, Drupal, drupalSettings);
