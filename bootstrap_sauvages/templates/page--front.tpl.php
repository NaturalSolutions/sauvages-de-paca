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

<div class="main-container ">

  <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#header -->
  <div class="row-fluid">
    <div class="logo-region"><a href="http://www.regionpaca.fr/" target="_blank" title="Aller sur le site : http://www.regionpaca.fr/"><img src='<?php echo $base_path;?>sites/all/themes/bootstrap_sauvages/image/logo/Region_PACA-onglet.png' alt="logotype Région Provence Alpes Cote d'Azur"/></a></div>

    <?php //if ($page['fold1']): ?> <!-- /region fold1 -->
    <section id="fold1" class="span12 fold1">
        <div class="container">
          <?php // print render($page['fold1']); ?>
          <div class="span6">
            <img src='<?php echo $base_path;?>sites/all/themes/bootstrap_sauvages/image/logo/logosauvagespaca-480.png' alt="logotype Sauvages de ma rue"/>
            <h2>Provence Alpes Côte d'Azur</h2>
            <p class="accroche">Je me promène en ville, j’identifie et je photographie les plantes sauvages de ma rue. Je transmets les informations aux scientifiques&nbsp;!</p>
          </div>
          <div class="span6 bonhomme">
            <img class="pull-right" src='<?php echo $base_path;?>sites/all/themes/bootstrap_sauvages/image/bonhomme/bonhomme-fold1.png' alt="personnage Sauvages de ma rue PACA"/>
            <a href="<?php echo $base_path;?>programme-sauvages-de-ma-rue-paca" title ="je participe à Sauvages de ma rue PACA" class="btn btn-large pull-right btn-participe">Je participe</a>
          </div>
        </div>
    </section>
    <?php // endif; ?>

    <?php // if ($page['fold2']): ?> <!-- /region fold2 -->
    <section id="fold2" class="span12 fold2">
      <?php // print render($page['fold2']); ?>
      <!-- carousel espèces-->
      <h4 class="caption-carousel">Les sauvages Méditerranéennes</h4>
      <?php print views_embed_view('v_liste_espece','block'); ?>
    </section>
    <?php //endif; ?>

    <?php if ($page['fold3']): ?> <!-- /region fold3 -->
     <section id="fold3" class="span12 fold3">
      <div class="container">
        <div class="row-fluid">
          <div class="span6 offset6">
            <img src='<?php echo $base_path;?>sites/all/themes/bootstrap_sauvages/image/bonhomme/bonhomme-fold2.png' alt="personnage Sauvages de ma rue"/>
          </div>
        </div>
      </div>
     </section>
    <section>
      <div class="container">
        <div class="row-fluid">
          <div class="span12">
            <div class="row-fluid">
              <div class="span4">
                <?php print render($page['fold3']); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php endif; ?>

    <section id="fold4" class="span12 fold4">
      <div class="container">
        <div class="row-fluid">
          <div class="span12">
            <div class="row-fluid">
              <div class="span6 offset3">
                 <h3>Les outils</h3>
                 <p>Vous avez trouvé des plantes sauvages dans la rue&nbsp;?<br/>
                 Des outils vous permettent de les identifier et de collecter vos observations très facilement.<br/>
                 <em>Essayez-les !</em></p>
               </div>
            </div>
          
            <div class="row-fluid">
              <div class="span8 offset2">
                <div class="span3 picto-outil">
                  <a href="<?php echo $base_path;?>application-mobile" title="En savoir plus" target="_self">
                    <div class="background-circle img-circle">
                      <div class="picto-programme picto-mobile"></div>
                    </div>
                    <h4>Application Mobile</h4>
                  </a>
                </div>
                <div class="span3 picto-outil">
                  <a href="<?php echo $base_path;?>identification/#le-livre" title="En savoir plus" target="_self">
                    <div class="background-circle img-circle">
                      <div class="picto-programme picto-livre"></div>
                    </div>
                    <h4>Livre</h4>
                  </a>
                </div>
                <div class="span3 picto-outil">
                  <a href="<?php echo $base_path;?>identification/#le-mini-guide" title="En savoir plus" target="_self">
                    <div class="background-circle img-circle">
                      <div class="picto-programme picto-mini_guide"></div>
                    </div>
                   <h4>Mini-guide</h4>
                  </a>
                </div>
                <div class="span3 picto-outil">
                  <a href="<?php echo $base_path;?>fiche-de-terrain" title="En savoir plus" target="_self">
                    <div class="background-circle img-circle">
                      <div class="picto-programme picto-fiche_terrain"></div>
                    </div>
                    <h4>Fiche de terrain</h4>
                  </a>
               </div>
              </div>
            </div>
        
          </div>
        </div>
      </div>
    </section>
    
    <section id="fold5" class="span12 fold5">
      <div class="container actualité">
        <div class="span12">
          <div class="span4 middle-in-span">
            <h3 class=""><a  href="<?php echo $base_path;?>actualités" target="_self" alt="voir toutes les actualités">Actualités</a></h3>
          </div>
          <div class="span8 middle-in-span">
            <!-- *****block view actualité promu en page d'accueil***** -->
            <?php print views_embed_view('v_actu_front','block'); ?>
            <div class="clearfix">
              <a class="btn pull-right green-sauvages" href="<?php echo $base_path;?>actualités" target="_self" alt="voir toutes les actualités"><i class="icon-plus"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="container hidden-phone">
        <div class="span7 iFrame">
        </div>
        <div class="span5 fold-block-text">
          <h3>les animateurs locaux</h3>
          <p>Plusieurs structures proposent des sorties Sauvages de PACA. Contactez-les et apprenez à plusieurs à reconnaître les Sauvages de vos rues&nbsp;!</p>
        </div>
      </div> 
    </section>
    
     <section id="fold6" class="span12 fold6">
      <div class="container">
        <div class="row-fluid ">
            <div class="span12">
              <h3>Les partenaires</h3>
              <div class="row-fluid">
                <div class="span6">
                  <h4>Les pilotes</h4>
                  <div class="row-fluid">
                    <!-- *****block view partenaire pilote****** -->
		      <?php print views_embed_view('v_liste_partenaire','block'); ?>
                  </div>
                </div>
            
                <div class="span6">
                  <h4>Les financeurs</h4>
                    <div class="row-fluid">
                    <!-- *****block view partenaire financier****** -->
                    <?php print views_embed_view('v_liste_partenaire','block_2'); ?>
                    </div>
                </div>
              </div>
              <div class="row-fluid">
                <div class="span6">
                 <h4>Les acteurs sur Marseille</h4>
                  <div class="row-fluid">
                <!-- *****block view partenaire acteur sur Marseille****** -->
		  <?php print views_embed_view('v_liste_partenaire','block_1'); ?>
                  </div>
                </div>
                <div class="span6">
                  <h4>Les acteurs sur Salon de Provence</h4>
                  <div class="row-fluid">
                  <!-- *****block view partenaire acteur sur Salon de Provence****** -->
		  <?php print views_embed_view('v_liste_partenaire','block_3'); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>

  </div>
</div>
<footer class="footer container">
  <?php print render($page['footer']); ?>
</footer>

