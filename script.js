
  $('.dropdown-container-slidemorph .dropdown-submenu').each(function() {
  var self = $(this)

  var label = $('> a .dropmenu-item-label', this) ? $('> a .dropmenu-item-label', this).text() : $('> a', this).text()
  var backlink = $('<li class="dropdown-backlink"><a href="#">' + label + '</a></li>')

  $(this).find('ul').first().prepend(backlink)

  // Attach listeners to the back buttons
  $(this).find('> ul > li').on('click', function(e){
      e.preventDefault()
      e.stopPropagation()

      var self = $(this)
      var container = self.closest('.dropdown-submenu')
      var parentDropdown = container.closest('.dropdown-menu')

      if (!self.hasClass('dropdown-backlink')) {
        container.find('> a .dropmenu-item-content').text(self.text())
      }

      self.closest('.dropdown-container').css({
        'width': parentDropdown.outerWidth(),
        'height': parentDropdown.outerHeight()
      })

      container.removeClass('open')
   })

})

// Initialize menu width
$(document).on('shown.bs.dropdown', function(e) {
  var self = $(e.target)
  var container = self.find('.dropdown-container-slidemorph')
  var submenu = container.find('> .dropdown-menu').first()

  // Add dimensions only if they haven't been already set
  if (typeof container.attr('style') === typeof undefined) {
    self.find('.dropdown-container-slidemorph, .dropdown-container-slidemorph > .dropdown-menu').each(function() {
      $(this).css({
        'width': submenu.outerWidth(),
        'height': submenu.outerHeight()
      })
    })
  }
})

$('[data-toggle="slideMorph"]').on('click', function(e) {
  e.preventDefault()
  e.stopPropagation()

  var self = $(this)
  var container = self.parent()
  var parentDropdown = self.closest('.dropdown-menu')
  var submenu = container.find('.dropdown-menu')

  container.addClass('open')

  self.closest('.dropdown-container').css({
    'width': submenu.outerWidth(),
    'height': submenu.outerHeight()
  })
})

$('#slideMorph > .dropdown-toggle').click()
