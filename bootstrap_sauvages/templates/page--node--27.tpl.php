<header id="navbar" role="banner" class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <?php if (!empty($logo)): ?>
        <a class="logo pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>

      <?php if (!empty($site_name)): ?>
        <h1 id="site-name">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="brand"><?php print $site_name; ?></a>
        </h1>
      <?php endif; ?>

      <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
        <div class="nav-collapse collapse">
          <nav role="navigation">
            <?php if (!empty($primary_nav)): ?>
              <?php print render($primary_nav); ?>
            <?php endif; ?>
            <?php if (!empty($secondary_nav)): ?>
              <?php print render($secondary_nav); ?>
            <?php endif; ?>
            <?php if (!empty($page['navigation'])): ?>
              <?php print render($page['navigation']); ?>
            <?php endif; ?>
          </nav>
        </div>
      <?php endif; ?>
    </div>
  </div>
</header>

<div class="main-container container">

  <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#header -->

  <div class="row-fluid">

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="span3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>  

    <section class="<?php print _bootstrap_content_span($columns); ?>">  
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted hero-unit"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <div class="well"><?php print render($page['help']); ?></div>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php // print render($page['content']); ?>
      
      <div class="en-tete row-fluid">
        <div class="span12 en-tete-intro">
          <div class="span7">
            <h2>Sauvages de ma rue mobile</h2>
            <div class="picto-launcher inline-block-left"></div>
            <p class="lead inline-block-right">Avec l'application <em>Sauvages de ma rue mobile</em>, arpentez les rues, amusez-vous à reconnaître les plantes et envoyez vos données aux scientifiques!</p>
            <hr class="invisible">
                <div class="">
                  <a href="https://play.google.com/store/apps/details?id=eu.NaturalSolutions.SauvagesDeMaRue" alt="Télécharger l'application Sauvages de ma rue mobile sur Google Play" title="Télécharger l'application Sauvages de ma rue mobile sur Google Play" class="btn-store google-play">Google Play</a>
                
                  <a href="https://itunes.apple.com/us/app/sauvages-ma-rue-identification/id871906105?l=fr&ls=1&mt=8" alt="Bientôt disponible sur Apple Store" class="btn-store apple-store">Apple Store</a>
                </div>
              
          </div>    
      
          <div class="span5 picto-outil">
            <div class="capture-mobile-large"></div>
          </div>
        </div>
        <div class="fond-entete"></div>
      </div>
    
      <div class="row-fluid social-network">
        <!-- AddThis Button BEGIN -->
        <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
        <a class="addthis_button_facebook"></a>
        <a class="addthis_button_twitter"></a>
        <a class="addthis_button_google_plusone_share"></a>
        </div>
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-528b30ee78f93aee"></script>
        <!-- AddThis Button END -->
      </div>
      <div class="row-fluid visible-desktop">
        <div class="span3">
          <div class="capture-mobile-liste"></div>
        </div>
        <div class="span3">
          <div class="capture-mobile-cle"></div>
        </div>
        <div class="span3">
          <div class="capture-mobile"></div>
        </div>
        <div class="span3">
          <div class="capture-mobile"></div>
        </div>
      </div>
      
    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="span3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
</div>
<footer class="footer container">
  <?php print render($page['footer']); ?>
</footer>
