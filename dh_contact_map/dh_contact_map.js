/**
 * dh_contact_map.js
 */

(function($){
  Drupal.behaviors.contactMap = {
    attach: function (context, settings) {
      $('.map-region').on('click', function (event){
        event.preventDefault();

        var clickedRegion = $(this).attr('data-region');
        var parentMapDiv = $(this).parents('.map-block');
        // console.log($(this).attr('data-region'));

        // Set select list to variable.
        parentMapDiv.find('select').val(clickedRegion);

      });
    }
  }
})(jQuery);