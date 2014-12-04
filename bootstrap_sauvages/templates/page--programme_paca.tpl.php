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
      <div class="en-tete programme row-fluid">
        <div class="span12 en-tete-intro">
          <div class="span4"><img class="photo center-in-span" src="<?php echo $base_path;?>sites/all/themes/bootstrap_sauvages/image/photo/Marseille-sauvages-de-ma-rue-ronde.png" alt="photo illustrant la page programme sauvages de ma rue PACA"/></div>
          <p class="span8 lead">Le programme <a href="http://sauvagesdemarue.mnhn.fr/sauvages-de-ma-rue/presentation" target="_blank"><strong>Sauvages de ma rue</strong></a> s’adapte à la biodiversité spécifique des villes du sud-est de la France et se décline en <strong>Sauvages de PACA</strong>&nbsp;!</p>
        <div class="span2 offset6 hidden-phone"><img class="fleur-footer" src="<?php echo base_path();?>sites/all/themes/bootstrap_sauvages/image/picto/fleur-footer.png" alt=""/></div>
        </div>
        <div class="fond-entete visible-desktop"></div>
        <div class="row-fluid">
          <ul class="en-tete-point span12">
            <li class="span3 picto-outil">
              <div class="span3">
                <div class="picto-programme picto-ou"></div>
              </div>
              <p class="span9"><a href="http://www.marseille.fr/" target="_blank" alt="aller sur le site">Marseille</a> et <a href="http://www.salondeprovence.fr/" target="_blank">Salon de Provence</a>, deux villes pionnières, s’impliquent dans ce projet.</p>
            </li>
            <li class="span4 picto-outil">
              <div class="span2">
                <div class="picto-programme picto-reseau"></div>
              </div>
              <p class="span10"><a href="http://tela-botanica.org/" target="_blank" alt="aller sur le site">Tela Botanica</a>, réseau de la botanique francophone, pilote le programme Sauvages de PACA aux côtés de la Région PACA.</p>
            </li>
            <li class="span5 picto-outil">
              <div class="span2">
                <div class="picto-programme picto-analyse"></div>
              </div>
              <p class="span10">Le <a href="http://lped.org/" target="_blank" alt="aller sur le site">"Laboratoire Population Environnement et Développement"</a> (Aix-Marseille université/IRD)
              est le partenaire scientifique privilégié pour l’analyse les données collectées en région PACA.</p>
            </li>
          </ul>
        </div>
        <div class="fond-acteur visible-desktop"></div>
        </div>
     
      <div id="comment-participer" class="well">
        <div class="span12">
          <h2>Comment participer ?</h2>
          <div class="row-fluid  img-rounded" id="participe-mobile">
            <div class="span6 picto-outil">
              <div >
                <div class="picto-programme picto-mobile"></div>
              </div>
            </div>
            <div class="span6 texte-mobile">
                <h4>J'utilise l'application mobile.</h4>
              <ul>
                <li>J'identifie les plantes sauvages</li>
                <li>Je recueille mes observations</li>
                <li>J'envoie mes données aux scientifiques</li>
              </ul>
                <a href="<?php echo $base_path;?>application-mobile" class="btn btn-small btn-primary" title="En savoir plus" target="_self"> en savoir +</a>
            </div>
            </div>
           
              <div class="c-est-par-ici span2 offset10 hidden-phone">
                <p class="">Pas de Smartphone.</p><p><em> C'est par ici !</em></p>
              </div>
              
            
              
              <div class="span2 offset10 picto-programme picto-fleche hidden-phone"></div>
            
        </div>
      
    
        <div class="row-fluid hidden-phone">
          <div class="span11 offset1" id="participe-papier">
            <div class="span3 picto-outil">
                <div class="encart-image">
                  <div class="picto-programme picto-livre img-circle"></div>
                </div>
                <div class="encart-texte">
                  <h4>J'identifie</h4>
                  <p>Plusieurs guides sont à ma disposition pour reconnaître les plantes sauvages que j'observe.</p>
                  <a href="<?php echo $base_path;?>identification" class="btn btn-mini btn-primary" title="En savoir plus" target="_self"> en savoir +</a>
                </div>
            </div>
            <div class="span1 fleche-noire">
              <img  src='<?php echo $base_path;?>sites/all/themes/bootstrap_sauvages/image/picto/picto-fleche-r-61.png' alt="fleche suite"/>
            </div>
            <div class="span3 picto-outil">
                <div class="encart-image">
                  <div class="picto-programme picto-fiche_terrain img-circle"></div>
                </div>
                <div class="encart-texte">
                  <h4>Je prends des notes</h4>
                  <p>J'imprime ma fiche de terrain pour noter les informations sur les plantes observées.</p>
                  <a href="<?php echo $base_path;?>fiche-de-terrain" class="btn btn-mini btn-primary" title="En savoir plus" target="_self"> en savoir +</a>
                </div>
            </div>
            <div class="span1 fleche-noire">
              <img  src='<?php echo $base_path;?>sites/all/themes/bootstrap_sauvages/image/picto/picto-fleche-r-61.png' alt="fleche suite"/>
            </div>
            <div class="span3 picto-outil"> 
              <div class="encart-image">
                <div class="picto-programme picto-ordi img-circle"></div>
              </div>
              <div class="encart-texte">
                <h4>Je saisie en ligne</h4>
                <p>Je remplis le formulaire en ligne pour transmettre mes informations aux scientifiques.</p>
                <a href="<?php echo $base_path;?>saisie-des-donnees" class="btn btn-mini btn-primary" title="En savoir plus" target="_self"> en savoir +</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="cheminement row-fluid iFrame">
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
