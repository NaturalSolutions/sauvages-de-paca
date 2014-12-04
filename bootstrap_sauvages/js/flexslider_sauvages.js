(function ($) {
   Drupal.behaviors.flexsliderFrontPage = {
      attach: function(context, settings) {
         $('.front-espece').once('flexHome', function() {
            jQuery('.front-espece').flexslider({
               animation: "slide",
               slideshow: false,
               itemWidth: 300,
               itemMargin: 5,
               minItems: 2,
               maxItems: 8,
               controlsContainer: ".flexslider-container",
             });
            jQuery('.front #fold5 .iFrame').append("<iframe class='img-rounded' frameborder='0' height='350px' width='100%' marginheight='0' marginwidth='0' scrolling='no' src='http://maps.google.fr/maps/ms?msid=206464739515709819259.0004b641be26cf2ac5d3b&amp;msa=0&amp;source=gplus-ogsb&amp;ie=UTF8&amp;t=m&amp;vpsrc=0&amp;ll=43.767127,5.50415&spn=2.582366,4.471436&t=m&z=8&amp;output=embed' width='425'></iframe><br><small><span data-scayt_word='Afficher' data-scaytid='26'>Afficher</span> <a href='http://maps.google.fr/maps/ms?msid=206464739515709819259.0004b641be26cf2ac5d3b&amp;msa=0&amp;source=embed&amp;ie=UTF8&amp;t=m&amp;vpsrc=0&amp;ll=43.667872,2.669678&amp;spn=2.384087,3.295898&amp;z=7' style='color:#0000FF;text-align:left'><span data-scayt_word='Sauvages' data-scaytid='14'>Sauvages</span> des <span data-scayt_word='villes' data-scaytid='28'>villes</span></a> <span data-scayt_word='sur' data-scaytid='13'>sur</span> <span data-scayt_word='une' data-scaytid='29'>une</span> carte plus <span data-scayt_word='grande' data-scaytid='30'>grande</span></small>");
         });
      }
   };
   Drupal.behaviors.flexsliderSpeciesPage = {
      attach: function(context, settings) {
         $('.node-type-fiche-espece').once('flexEspece', function() {
            jQuery(window).load(function() {
               jQuery('.slider-carousel-thumb').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                itemWidth: 210,
                itemMargin: 5,
                asNavFor: '.slider-with-carousel-thumb'
              });
               
              jQuery('.slider-with-carousel-thumb').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                sync: ".slider-carousel-thumb"
              });
               var nbTaxon = jQuery('.node-type-fiche-espece .result ').attr("id");
               jQuery('.node-type-fiche-espece .iFrame ').append("<iframe frameborder='0' scrolling='no' src='http://www.tela-botanica.org/widget:cel:cartoPoint?projet=sauvages&amp;dept=13,84,83,06,04,05&amp;titre=Observations%20en%20PACA&amp;num_taxon= "+ nbTaxon +"' style='width:100%;height:600px;'></iframe>");
            
            });
         });
      }
   };

})(jQuery);