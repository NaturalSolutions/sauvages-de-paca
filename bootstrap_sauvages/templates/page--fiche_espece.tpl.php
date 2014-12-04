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
      
      
      <?php
      if($node){
        //print_r($node);
        $taxonNid = $node->nid;
        if(!empty($node->field_num_taxon_eflore)){
          $numTaxonEflore = $node->field_num_taxon_eflore['und'][0]['value'];
        }
        if(!empty($node->field_nom_scientifique)){
          $nomScieEflore = $node->field_nom_scientifique['und'][0]['value'];
        }
        
      }
      ?>
      
      <h2 class="nom-scientifique"><em><?php print $nomScieEflore ?></em></h2>
      
      <?php if(!empty($node->field_famille)): ?>
        <p class="famille">Famille des <?php print $node->field_famille['und'][0]['value']?></p>
      <?php endif; ?>
      <?php if(!empty($node->field_floraison)): ?>
        <p class="floraison">Floraison : <?php print $node->field_floraison['und'][0]['value']?></p>
      <?php endif; ?>
      <?php
      print views_embed_view('v_liste_espece','block_1',$taxonNid);
      print views_embed_view('v_liste_espece','block_2',$taxonNid);
      ?>
      <?php if(!empty($node->field_description)): ?>
          <div class="row-fluid">
            <div class="span12">
              <div class="span10">
              <h3>Description</h3>
              <p><?php print $node->field_description['und'][0]['value']?></p>
              </div>
              <?php if(!empty($node->field_illustration_naturaliste)): ?>
                <div class="span2 ">
                  <img class="img-style-flex" src="<?php print file_create_url($node->field_illustration_naturaliste['und'][0]['uri']); ?>" alt="" />
                </div>
              <?php endif; ?>
            </div>
          </div>
      <?php endif; ?>
      <?php if(!empty($node->field_histoire)): ?>
        <h3>Histoire</h3>
        <p><?php print $node->field_histoire['und'][0]['value']?></p>
      <?php endif; ?>
      <?php if(!empty($node->field_proprietes_usages)): ?>
        <h3>Propriétés et usages</h3>
        <p><?php print $node->field_proprietes_usages['und'][0]['value']?></p>
      <?php endif; ?>
      <?php if(!empty($node->field_ou_le_trouver)): ?>
        <h3>Où le trouver ?</h3>
        <p><?php print $node->field_ou_le_trouver['und'][0]['value']?></p>
      <?php endif; ?>
      <?php if(!empty($numTaxonEflore)): ?>
      <div class="iFrame hidden-phone">
          <hr>
          <h3>Carte des observations</h3>
      </div>
      <?php endif; ?>
      <?php //print render($page['content']); ?>
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
