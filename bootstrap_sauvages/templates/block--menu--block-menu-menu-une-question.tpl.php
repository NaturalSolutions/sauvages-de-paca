<section id="<?php print $block_html_id; ?>" class="<?php print $classes; ?> clearfix span4"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if ($title): ?>
    <h2<?php print $title_attributes; ?>><?php print $title; ?>PPPPPPPPPPPPPPPPP</h2>
  <?php endif;?>
  <?php print render($title_suffix); ?>

  <?php print $content ?>
  
</section> <!-- /.block -->