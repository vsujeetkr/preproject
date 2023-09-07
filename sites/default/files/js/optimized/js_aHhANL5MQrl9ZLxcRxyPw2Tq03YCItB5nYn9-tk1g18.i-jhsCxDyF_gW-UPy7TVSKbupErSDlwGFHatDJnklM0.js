(function ($) {
  'use strict';

  Drupal.behaviors.preproject = {
    attach: function () {

      $(document).ready(function () {
        $("#block-mainnavigation .nav li:has(ul) > a").click(function(e) {
          e.preventDefault();
        });
      })

    },
  }
})(jQuery);
