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
       <div class="en-tete row-fluid">
          <div class="span12 en-tete-intro">
            <div class="span4 middle-in-span"><img class="center-in-span img-rounded "  src="<?php echo $base_path ?>sites/default/files/pictures/Couv-sauvage-national-petit.png" title="Couverture du livre Sauvages de ma rue"  alt="Couverture du livre Sauvages de ma rue" /></div>
            <div class="span8 middle-in-span">
              <h2 >Le livre « Sauvages de ma rue – guide des plantes sauvages des villes de France »</h2>
              <p class="sous-lead">Le livre Sauvages de ma rue présente les <strong>240 plantes sauvages</strong> les plus répandues dans les rues des villes de France métropolitaine.</p>
              <p class="sous-lead">Chaque espèce est décrite de façon claire et sans terme technique afin que tous citadins puissent <strong>apprendre à identifier</strong> les plantes sauvages qui poussent dans leur environnement immédiat.</p>
              <p class="sous-lead">Il est également consultable ou empruntable dans différentes structures locales.</p>
            </div>          
        </div>
          <div class="fond-entete visible-desktop"></div>
        <div class="fond-acteur visible-desktop"></div>
        </div>
      <div class="well">
        <div class="iFrame row-fluid">
          <div class="span12 img-rounded">
            <h3>Guides empruntables et consultables en région PACA</h3>
              <iframe frameborder=0 style='width:100%;height:500px' src='http://www.zeemaps.com/pub?group=587468&list=1&x=5.184400&y=43.493339&z=9'> </iframe>
          </div>
        </div>
      </div>
      <div class="row-fluid c-est-par-ici-wrapper">
        <div class="c-est-par-ici span3 offset9">
          <p class="lead">Le mini-guide à télécharger&nbsp;!</p><p><em> C'est par ici&nbsp;!</em></p>
        </div>      
        <div class="span2 offset10 picto-programme picto-fleche"></div>
      </div>
      <div class="row-fluid " id="le-mini-guide">
        <div class="span12 well jaune">
          <div class="span3">
            <a href="<?php print file_create_url($node->field_fichier_telecharger['und'][0]['uri'])?>" target="_blank" alt="Télécharger le mini guide"><img class="center-in-span img-rounded"  src="<?php echo $base_path ?>sites/all/themes/bootstrap_sauvages/image/photo/mini-guide-couv.jpg" alt="Couverture du livre Sauvages de ma rue" /></a>
          </div>
          <div class="span9">
            <h2>Le mini-guide à construire soi-même</h2>
            <p class="sous-lead">Le mini-guide <strong>Sauvages de PACA</strong> présente les <strong>12 plantes sauvages</strong> les plus fréquemment rencontrées dans les rues de la région PACA.</p>
            <p class="sous-lead">Construisez-le vous même et parcourez les rues, mini-guide en poche.</p>
            <?php if(!empty($node->field_fichier_telecharger) ) { ?>
             <?php //$field = field_view_field('node', $node, 'field_fichier_telecharger'); ?>
             <?php $output_fft = render(field_view_field('node', $node, 'field_fichier_telecharger', array('label'=>'hidden'))); ?>
             <div class="btn">
               <span class="">Télécharger le Mini-guide </span>
               <?php echo $output_fft; ?>
               <span class="filesize"><?php print format_size($node->field_fichier_telecharger['und'][0]['filesize']); ?></span>
             </div>
            <?php } ?> 
          </div>
        </div>
      </div>     
      <div class="cheminement row-fluid">
        <div class="span12">
          <div class="fleche-suivant-r">
            <a href="<?php echo $base_path;?>fiche-de-terrain" title="En savoir plus" target="_self">Je prends des notes</a>
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
