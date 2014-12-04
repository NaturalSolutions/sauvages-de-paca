<?php global $base_path; ?> 
<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>


  <header>
    <?php print render($title_prefix); ?>
    <?php if (!$page && $title): ?>
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>
    <?php print render($title_suffix); ?>

    <?php if ($display_submitted): ?>
      <span class="submitted">
        <?php // print $user_picture; ?>
        <?php print $submitted; ?>
      </span>
    <?php endif; ?>
  </header>


  <?php if(!empty( $content["field_image"]["#object"])){
    $field_img_title = $content["field_image"]["#object"]->field_image['und'][0]['title'];};
    $field_img_alt = $content["field_image"]["#object"]->field_image['und'][0]['alt'];
    $field_img_url = $content["field_image"]["#object"]->field_image['und'][0]['uri']; 
  ?>
  <?php if(!empty($content['body']["#object"])){$field_body = $content['body']["#object"]->body["und"][0]["value"];} ?>
  <?php if(!empty($content["field_galerie_image"]["#object"]->field_galerie_image['und'][0]["is_default"])){$field_galerie_img_default = $content["field_galerie_image"]["#object"]->field_galerie_image['und'][0]["is_default"];}; ?>
  <?php if(!empty($content["field_galerie_image"]["#object"])){$field_galerie_img_array = $content["field_galerie_image"]["#object"]->field_galerie_image['und'];}; ?>
  <?php if(!empty($content["field_fichier_telecharger"]["#object"])){$field_fichier= render(field_view_field('node', $node, 'field_fichier_telecharger', array('label'=>'hidden')));};?>
  <?php if(!empty($content["field_mots_cles"])){$field_mot_cle_array = $content["field_mots_cles"]["#object"]->field_mots_cles['und']; }?>
  <div class="clearfix article-principal row-fluid">
    <div class="span12">
      <?php if(!empty($field_body)) { ?>  
        <div class="article-body span8"><?php print $field_body; ?></div>
      <?php } ?>
      <?php if(!empty($field_img_url)) { ?> 
        <div class="article-image span4"><img class="img-rounded" src="<?php print image_style_url("large", $field_img_url); ?>" alt="<?php print $field_img_alt ?>" title="<?php print $field_img_title ?>"/></div>
      <?php } ?>
    </div>
  </div>
  <?php if(!empty($field_galerie_img_array) ) { ?>
  <div class="article-galerie well">
    <?php print render($content["field_galerie_image"]); ?>
  </div>
  <?php } ?>
  
  <?php if(!empty($field_mot_cle_array)) { ?>
  <div class="article-mot_cle">
    <span><?php print $content["field_mots_cles"]["#title"];?> : </span>
    <ul>
      <?php foreach($field_mot_cle_array as $item) { ?>
       <li><?php print $item["taxonomy_term"]->name; ?></li>
      <?php }?>
    </ul>
  </div>
  <?php } ?>
   <?php if(!empty($field_fichier)) { ?>
  <hr>
  <div class="article-fichier">
    <p>Fichier(s) à télécharger : </p>
    <?php print $field_fichier;?>     
  </div>
  <?php } ?>
  <?php
    // Hide comments, tags, and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    hide($content['field_tags']); 
    //print render($content);
  ?>

  <?php if (!empty($content['field_tags']) || !empty($content['links'])): ?>
    <footer>
      <?php hide($content['field_tags']); ?>
      <?php print render($content['links']); ?>
    </footer>
  <?php endif; ?>

  <?php print render($content['comments']); ?>

</article> <!-- /.node -->
