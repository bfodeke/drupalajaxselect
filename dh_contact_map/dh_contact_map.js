/**
 * dh_contact_map.js
 */

(function($){
  Drupal.behaviors.contactMap = {
    attach: function (context, settings) {
      // Exploding values and adding a data attribute.
      $('#dh-contact-map-form-map-1 select option').each(function(){
        var region = $(this).val().split('_');
        $(this).attr('data-region', region[region.length - 1]);
      });

      // Selecting the right option in select list when map is clicked.
      $('.map-region').on('click', function (event){
        event.preventDefault();

        // Determine what map was clicked.
        var parentMapId = $(this).parents('.map-block').attr('data-map');
        var parentMapDiv = $('.map-block[data-map="' + parentMapId + '"]');

        if (!parentMapDiv.hasClass('processing')) {

          parentMapDiv.addClass('processing');

          var clickedRegion = $(this).attr('data-region');

          // Get correct select list.
          var parentSelect = $('select[data-map="' + parentMapId + '"]');
          // Set select list to variable.
          var selectedVal = parentSelect.find('option[data-region="' + clickedRegion + '"]').val();
          parentSelect.val(selectedVal).change();
        }

      });

      // Submit form
    }
  }

  Drupal.ajax.prototype.commands.showRegionContacts = function(ajax, response, status)
  {
    var contactsDiv = $('<div id="contacts-wrapper">').appendTo('#mapContacts .modal-body');

    $(response.regionContacts).each(function () {
      // Begin setting up modal content.
      var ul = $('<ul class="region-contact">').appendTo('#contacts-wrapper');

      $.each(this, function(k, v) {
        // Only show fields that aren't empty, nor 'map' or 'region'
        if(v !== '' && k !== 'map' && k !== 'region') {
          var label = transformLabel(k);
          var content = '<label>' + label + '</label>: ' + v;

          if (k === 'name') {
            content = '<h3 class="contact_name">' + v + '</h3>';
          }
          // Adding link to email.
          if (k === 'email') {
            v = '<span class="glyphicon glyphicon-send"></span> <a href="mailto:' + v + '">' + v + '</a>';
            content = v;
          }
          // Adding link to phone number
          if (k === 'phone_number') {
            v = '<span class="glyphicon glyphicon-earphone"></span> <a href="tel:' + v + '">' + v + '</a>';
            content = v;
          }
          // Region Manager deets.
          if (k === 'region_manager' || k === 'region_manager_phone' || k === 'region_manager_email') {
            // if RM phone
            if (k === 'region_manager_phone') {
              v = '<a href="tel:' + v + '">' + v + '</a>';
            }
            // if RM email
            if (k === 'region_manager_email') {
              v = '<a href="mailto:' + v + '">' + v + '</a>';
            }

            content = '<span class="region-manager"><label>' + label + '</label>: ' + v + '</span>';
          }

          // Set content of list item.
          var li = $('<li class="' + k + '">' + content + '</li>');

          ul.append(li);
        }

        // Remove 'processing' class from div when data returns.
        $('div.map-block').removeClass('processing');
      });
    });

    // Show Modal with contact info.
    $('#mapContacts').modal('show');

    // Remove body contents when closing modal.
    $('#mapContacts').on('hidden.bs.modal', function (e) {
      $('#mapContacts .modal-body #contacts-wrapper').remove();
    });

    // Clear all select lists.
    $('#dh-contact-map-form-map-1 select').each(function(){
      $(this).val([]);
    });

    // Transform label from key names to labels.
    function transformLabel(label) {
      var newLabel = label.split('_').join(' ');

      return newLabel.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
    }
  };
})(jQuery);
