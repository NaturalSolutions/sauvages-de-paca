<?php global $base_path; ?> 
<?php if ($content): ?>

    <div class="ombre-footer">
    </div>
    <div class="region region-footer container">
				<div class="row-fluid">
						<div class="span12">
								<a id="ancre_top" class="pull-right" href="#"><img src="<?php echo base_path();?>sites/all/themes/bootstrap_sauvages/image/picto/picto-retour.png" alt="retour au sommet"/><p>retour</p></a>
						</div>						
				</div>
				<div class="row-fluid">
						<div class="span12">
								<?php print $content; ?>
						</div>
				</div>
				<div class="row-fluid wrapper-accroche">
						<div class="span12">
							<p class="span8 offset2" id="accroche-footer" >Je me promène en ville, j’identifie et je photographie les plantes sauvages de ma rue. Je transmets les informations aux scientifiques&nbsp;!</p>
						</div>
				</div>
				<div class="row-fluid">
						<div class="span12">
								<div class="wrap-participe-footer">
										<a class="btn btn-large btn-participe span3 offset5" href="<?php echo $base_path;?>programme-sauvages-de-ma-rue-paca">Je participe</a>
										<img class="fleur-footer" src="<?php echo base_path();?>sites/all/themes/bootstrap_sauvages/image/picto/fleur-footer.png" alt=""/>
								</div>
						</div>
				</div>
    </div>
	<a id="copyright" href="<?php echo $base_path;?>credits-et-mentions-legales"><p>crédits & mentions légales</p></a>
    </div>
  <div class="row-fluid white footer-bottom">
    <div class="container">
      
      <div class="span3 middle-in-span">
	     <a href="http://www.vigienature.mnhn.fr" alt="Aller sur le site de Vigie Nature" target="_blanck"><img class="center-in-span" src="<?php echo $base_path;?>sites/all/themes/bootstrap_sauvages/image/logo/logo_vigie_nature_mail.jpg"/></a>
      </div>
      <div class="span9 middle-in-span">
        <p>Sauvages de PACA est l'adaptation de l'observatoire sur la flore urbaine Sauvages de ma rue qui fait partie du programme de sciences participatives du Muséum national d'Histoire naturel,Vigie-Nature.</p>
      </div>
    </div>
  </div>
  
<?php endif; ?>
