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
      <?php //print render($page['content']); ?>
      <div class="en-tete">
        <img src="<?php echo $base_path;?>sites/all/themes/bootstrap_sauvages/image/photo/Marseille-sauvages-de-ma-rue.jpg"/>
        <p class="lead">Le programme <a href="http://sauvagesdemarue.mnhn.fr/sauvages-de-ma-rue/presentation" target="_blank"><strong>Sauvages de ma rue</strong></a> s’adapte à la biodiversité spécifique des villes du sud-est de la France et se décline en <strong>Sauvages de PACA</strong>&nbsp;!</p>
        <ul>
          <li class="lead"><a href="http://www.marseille.fr/" target="_blank">Marseille</a> et <a href="http://www.salondeprovence.fr/" target="_blank">Salon de Provence</a>, deux villes pionnières, s’impliquent dans ce projet.</li>
          <li class="lead">Le <a href="http://lped.org/" target="_blank">"Laboratoire Population Environnement et Développement"</a> (Aix-Marseille université/IRD) accompagne l’association <a href="http://www.tela-botanica.org/‎" target="_blank">Tela Botanica</a> a dans le pilotage du projet en PACA.
        C’est le partenaire scientifique privilégié pour l’analyse les données collectées.
          </li>
        </ul>
        
        </div>
     
      <div id="comment-participer" class="well">
        <div class="span12">
          <h2>Comment participer ?</h2>
          <div class="row-fluid">
            <div class="span4 offset4 picto-outil">
              <a href="<?php echo $base_path;?>application-mobile" title="En savoir plus" target="_self">
                <div class="background-circle img-circle">
                  <div class="picto-programme picto-mobile"></div>
                </div>
                <h4>J'utilise l'application mobile.</h4>
              </a>
            </div>
            <div class=""row-fluid>
              <div class="span12 c-est-par-ici">
                <p>Pas de Smartphone.</p><p><em> C'est par ici !</em></p>
              </div>
            </div>
          </div>
        </div>
      
    
        <div class="row-fluid">
          <div class="span3 picto-outil">
            <a href="<?php echo $base_path;?>identification" title="En savoir plus" target="_self">
              <div class="background-circle img-circle">
                <div class="picto-programme picto-livre"></div>
              </div>
              <h4>J'identifie</h4>
            </a>
          </div>
          <div class="span1 fleche-noire">
            <img  src='<?php echo $base_path;?>sites/all/themes/bootstrap_sauvages/image/picto/fleche-r-70.png' alt="fleche suite"/>
          </div>
          <div class="span4 picto-outil">
            <a href="<?php echo $base_path;?>fiche-de-terrain" title="En savoir plus" target="_self">
              <div class="background-circle img-circle">
                <div class="picto-programme picto-fiche_terrain"></div>
              </div>
              <h4>Je prends des notes</h4>
            </a>
          </div>
          <div class="span1 fleche-noire">
            <img  src='<?php echo $base_path;?>sites/all/themes/bootstrap_sauvages/image/picto/fleche-r-70.png' alt="fleche suite"/>
          </div>
          <div class="span3 picto-outil">
            <a href="<?php echo $base_path;?>saisie-des-donnees" title="En savoir plus" target="_self">
              <div class="background-circle img-circle">
                <div class="picto-programme picto-ordi"></div>
              </div>
              <h4>Je saisie en ligne</h4>
            </a>
          </div>
        </div>
      </div>
      
      <div class="cheminement">
        <div class="span12">
          <div class="fleche-suivant-r">
            <a href="<?php echo $base_path;?>observations" title="En savoir plus" target="_self">les observations</a>
          </div>
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
