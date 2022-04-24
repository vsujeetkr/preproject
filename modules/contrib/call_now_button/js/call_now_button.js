/**
 * @file
 * JS file for call now button.
 */

(function ($, Drupal, drupalSettings) {

  'use strict';

  Drupal.behaviors.callNowButton = {
    attach: function (context, settings) {
      var call_now_button = settings.call_now_button;
      $("body").once().append(call_now_button);
    }
  };
})(jQuery, Drupal, drupalSettings);
