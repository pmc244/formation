(function ($, Drupal, drupalSettings) {
  $(document).ready(function () {
    alert('Bonjour ' . drupalSettings.user);
  })
})(jQuery, Drupal, drupalSettings);
