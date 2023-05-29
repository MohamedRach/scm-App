/*
const dropdown = document.querySelector('.drop');
const drop = document.querySelector('.expand');

dropdown.addEventListener('click', () => {
    drop.style.display = 'block';
})*/

$(function() {
    $('.drop').on('click', function() {
        $(this).toggleClass('selected').closest('tr').next().toggle();
    })
});

$(function() {
  
    // contact form animations
    $('.update').click(function() {
      $('#contactForm').fadeToggle();
    })
    $(document).mouseup(function (e) {
      var container = $("#contactForm");
  
      if (!container.is(e.target) // if the target of the click isn't the container...
          && container.has(e.target).length === 0) // ... nor a descendant of the container
      {
          container.fadeOut();
      }
    });
    
  });

  $(document).ready(function() {
    $('.retour').click(function() {
      $('.retourTable').show(); // Show the clicked commandes item
      $('.commandeTable').hide(); // Hide all retour items
    });
  });

  $(document).ready(function() {
    $('.commande').click(function() {
      $('.commandeTable').show(); // Show the clicked commandes item
      $('.retourTable').hide(); // Hide all retour items
    });
  });