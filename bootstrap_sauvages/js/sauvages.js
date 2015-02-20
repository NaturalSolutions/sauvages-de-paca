var doc = document.documentElement;
doc.setAttribute('data-useragent', navigator.userAgent);

jQuery(document).ready(function(){
  jQuery('.logo-couleur').hide();
    jQuery('.span3').hover(function() {
      jQuery(this).find('.logo-gris').toggle();
      jQuery(this).find('.logo-couleur').toggle();
  });
  jQuery('.ckeditor_links').hide();
  var UserLogged = jQuery('body').hasClass('logged-in');
  if (UserLogged) {
    jQuery('#navbar nav .menu.nav').first().find('.last').hide();
  }
});


(function ($) {
  Drupal.behaviors.LoginToboggan = {
    attach: function (context, settings) {
      $('#toboggan-login', context).once('toggleboggan_setup', function () {
        $(this).hide();
        Drupal.logintoboggan_toggleboggan();
      });
    }
  };

  Drupal.logintoboggan_toggleboggan = function() {
    $("#toboggan-login-link").before("<i id='icon-togglebogan' class='icon-chevron-down'></i>");
    $("#toboggan-login-link").click(
      function () {
        $("#toboggan-login").slideToggle("fast");
        if ($("#icon-togglebogan").hasClass('icon-chevron-down')){
          $("#icon-togglebogan").removeClass('icon-chevron-down').addClass('icon-chevron-up');
        }else{
          $("#icon-togglebogan").removeClass('icon-chevron-up').addClass('icon-chevron-down');
        }
        this.blur();
        return false;
      }
    );
  };
})(jQuery);





