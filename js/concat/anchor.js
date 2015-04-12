/**
 * anchor.js
 *
 * Handles anchoring the navbar to the top edge on scroll
 * Based on https://github.com/thoughtbot/refills/blob/master/source/javascripts/menuAnchorAnimation.js
 */

 (function() {
  var reachSupplyAnchor = jQuery('.anchor');

  jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() > 100) {
      reachSupplyAnchor.addClass('anchor-moved');
    } else if (jQuery(this).scrollTop() <= 100) {
      reachSupplyAnchor.removeClass('anchor-moved');
    }
  });
})();