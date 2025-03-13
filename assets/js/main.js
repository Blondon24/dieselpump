/*
* Diesel Pump Engineering - Custom JavaScript
*/

(function ($) {
  "use strict";

  // Preloader
  $(window).on('load', function () {
      $('#preloader').fadeOut(1000);
  });

  // Initialize AOS Animation
  AOS.init({
      duration: 1000,
      once: true,
      easing: 'ease'
  });

  // Sticky Navbar
  $(window).on('scroll', function () {
      if ($(window).scrollTop() > 50) {
          $('#mainNav').addClass('navbar-shrink');
      } else {
          $('#mainNav').removeClass('navbar-shrink');
      }
  });

  // Smooth scrolling
  $('a.nav-link').on('click', function (e) {
      if (this.hash !== '') {
          e.preventDefault();
          const hash = this.hash;
          $('html, body').animate({
              scrollTop: $(hash).offset().top - 70
          }, 800);
      }
  });

  // Back to top button
  $(window).scroll(function () {
      if ($(this).scrollTop() > 300) {
          $('.back-to-top').addClass('show');
      } else {
          $('.back-to-top').removeClass('show');
      }
  });

  $('.back-to-top').on('click', function (e) {
      e.preventDefault();
      $('html, body').animate({
          scrollTop: 0
      }, 800);
      return false;
  });

  // Mobile menu
  $('.navbar-toggler').on('click', function () {
      $(this).toggleClass('active');
  });

  // Gallery filter
  $('.gallery-filter .filter-item').on('click', function () {
      $('.gallery-filter .filter-item').removeClass('active');
      $(this).addClass('active');
      
      var filterValue = $(this).attr('data-filter');
      $('.gallery-wrapper').isotope({
          filter: filterValue
      });
  });

  // Initialize Gallery Isotope
  $('.gallery-wrapper').imagesLoaded(function () {
      $('.gallery-wrapper').isotope({
          itemSelector: '.gallery-item',
          percentPosition: true,
          masonry: {
              columnWidth: '.gallery-item'
          }
      });
  });

  // Magnific Popup for Gallery
  $('.gallery-item .gallery-overlay a.image-popup').magnificPopup({
      type: 'image',
      gallery: {
          enabled: true
      }
  });

  // Magnific Popup for Videos
  $('.video-item .play-btn').magnificPopup({
      type: 'iframe'
  });

  // Contact Form Validation
  $('#contactForm').validate({
      rules: {
          name: {
              required: true,
              minlength: 2
          },
          email: {
              required: true,
              email: true
          },
          subject: {
              required: true,
              minlength: 5
          },
          message: {
              required: true,
              minlength: 10
          }
      },
      messages: {
          name: {
              required: "Veuillez entrer votre nom",
              minlength: "Votre nom doit comporter au moins 2 caractères"
          },
          email: {
              required: "Veuillez entrer votre email",
              email: "Veuillez entrer un email valide"
          },
          subject: {
              required: "Veuillez entrer un sujet",
              minlength: "Le sujet doit comporter au moins 5 caractères"
          },
          message: {
              required: "Veuillez entrer votre message",
              minlength: "Votre message doit comporter au moins 10 caractères"
          }
      },
      submitHandler: function(form) {
          // AJAX form submission can be added here
          var formData = $(form).serialize();
          $.ajax({
              type: "POST",
              url: "process-form.php",
              data: formData,
              success: function(response) {
                  $('#formResponse').html('<div class="alert alert-success">Votre message a été envoyé avec succès. Nous vous contacterons bientôt!</div>');
                  form.reset();
              },
              error: function() {
                  $('#formResponse').html('<div class="alert alert-danger">Une erreur est survenue. Veuillez réessayer plus tard.</div>');
              }
          });
          return false;
      }
  });

})(jQuery);