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

//Dotted in section foldJeu
Drupal.behaviors.fillLine = {
  attach: function (context, settings) {
    jQuery('.item-container').each(function(){
      jQuery('.class-nat-order').addClass('pull-right');
      var item = jQuery('.class-nat-name', jQuery(this));
      var score = jQuery('.class-nat-order', jQuery(this));
      var itemWidth = item.width();
      var scoreWidth = score.width();

      var offset1 = item.offset().left;
      var offset2 = score.offset().left;
      var fillerWidth = (offset2 - offset1) - (itemWidth + scoreWidth);

      jQuery('.fill', jQuery(this)).css('width', fillerWidth - 10);
    });
  }
};

//same height for the blocks
Drupal.behaviors.blockSameheight = {
  attach: function (context, settings) {
    var heightDivJeu = jQuery("#foldJeu #block-views-v-obs-block").height();
    jQuery("#foldJeu .span4 .block").height(heightDivJeu);
  }
};

// hide content user-profile in page content user
Drupal.behaviors.hideUserProfileContent = {
  attach: function (context, settings) {
    jQuery('.user-profile-content .profile').hide();
  }
};

// Add tooltip Bootstrap 2 for badge display with colorbox module
Drupal.behaviors.tooltipColoBox = {
  attach: function (context, settings) {
    jQuery('.file-badge a.colorbox.init-colorbox-processed.cboxElement').tooltip();
  }
};

// display title on hover on obs
Drupal.behaviors.hoverTitle = {
  attach: function (context, settings) {
    // jQuery('.page-user-obs',context).once(function(){
    //   jQuery('.view-id-v_obs a').find('.obs-caption').height(0);
    //   jQuery('.view-id-v_obs a').hover(
    //     function(){
    //       if (!jQuery(this).find('.obs-caption').hasClass('animated')) {
    //         jQuery(this).find('.obs-caption').dequeue().stop().animate({ height: "36px" });
    //       }
    //     },
    //     function(){
    //       jQuery(this).find('.obs-caption').addClass('animated').animate({ height: "0px" }, "normal", "linear", function() {
    //         jQuery(this).removeClass('animated').dequeue();
    //       });
    //     }
    //   );
    // });
  }
};


// Custom login toboggan
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





