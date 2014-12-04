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
      <article>
        <div class="row-fluid ">
          <div class="well jaune span12">
            <div class="span3">
              <img class="center-in-span img-rounded" src="<?php echo $base_path ?>sites/all/themes/bootstrap_sauvages/image/photo/fiche_terrain_paca.jpg" title="Fiche de terrain Sauvages de PACA"  alt="Fiche de terrain Sauvages de PACA" />
            </div>
            <div class="span9">
              <p class="lead">La fiche de terrain vous permettra de prendre en note sur le terrain la date et la rue du relevé,
                les espèces observées dans une rue concernée et le(s) milieu(x) dans le(s)quel(s) elles se trouvent.
              </p>
              <?php if(!empty($node->field_fichier_telecharger) ) { ?>
             <?php //$field = field_view_field('node', $node, 'field_fichier_telecharger'); ?>
             <?php $output_fft = render(field_view_field('node', $node, 'field_fichier_telecharger', array('label'=>'hidden'))); ?>
             <div class="btn">
               <span class="">Télécharger la fiche de terrain </span>
               <?php echo $output_fft; ?>
               <span class="filesize"><?php print format_size($node->field_fichier_telecharger['und'][0]['filesize']); ?></span>
             </div>
            <?php } ?> 
          </div>
           
            </div>
          </div>
        </div>
      </article>
      
      
      <div class="cheminement row-fluid">
        <div class="fleche-groupe span3 offset9">
          <div class="fleche-precedent-l">
            <a href="<?php echo $base_path;?>identification" title="En savoir plus" target="_self">J'identifie</a>
          </div>
          <div class="fleche-suivant-r">
            <a href="<?php echo $base_path;?>saisie-des-donnees" title="En savoir plus" target="_self">Je saisie</a>
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
