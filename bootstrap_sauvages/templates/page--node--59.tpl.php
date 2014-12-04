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
      <h2>Projet Sauvages de PACA</h2>
      <p>Sauvages de PACA est un projet initié par Tela Botanica et la Région PACA. Il est la déclinaison du programme national Sauvages de ma rue en région PACA. Sauvages de ma rue fait partie du programme de sciences participatives du Muséum national d'Histoire naturelle, Vigie-Nature. Le site Sauvages de PACA est le résultat de la collaboration des chercheurs du Laboratoire Population Environnement et Développement d'Aix Marseille Université (Valérie Montes et Christine Robles), de Tela Botanica (Réseau de la botanique francophone) et de la Région PACA (Franck Quenault et Sabrina Berthoud). Il est animé par l'association Tela Botanica et les structures chargées de l'animation de ce programme en région (Espaces Régionaux Internet Citoyen, Laboratoire Population Environnement et Développement etc.).</p>
      <p><strong>Maîtrise d’ouvrage :</strong> Tela Botanica<br/>
      <strong>Direction de projet :</strong> Tela Botanica et Région PACA<br/>
      <strong>Montage du projet :</strong> Jérémy Salinier (Tela Botanica)<br/>
      <strong>Chef de projet :</strong> Audrey Tocco (Tela Botanica)</p>
      <hr>
      <h2>Site Web</h2>
        <p><strong>Ce site est réalisé avec le CMS Drupal par Natural Solutions :</strong> </br>
          <address><a href="http://www.natural-solutions.eu" alt="Aller sur le site de Natural Solutions" target="_blanck"><strong>Natural Solutions</strong></a> </br>
          Société par Actions Simplifiée </br>
          68 rue Sainte 13001 MARSEILLE</br>
          SIREN : 50233391700024</br>
          Tél. : 04 91 33 53 87</br>
          email : contact @ natural-solutions.eu </br>
          </address>
        </p>
        <p><strong>Hébergement</strong> : <a href="http:///www.graal-network.com" alt="Aller sur le site de Graal Network" target="_blanck"><strong>Graal Network</strong></a></p>
	<address>18 rue Negresko 13008 MARSEILLE</address>
        <p><strong>Direction de la publication :</strong> <a href="http:///www.tela-botanica.org" alt="Aller sur le site de Tela Botanica" target="_blanck">Association Tela Botanica </a>
          <address><a href="http:///www.tela-botanica.org" alt="Aller sur le site de Tela Botanica" target="_blanck"><strong>Tela Botanica</strong></a></br>
          Association Loi 1901</br>
          Siège social : Institut de Botanique, 163 rue Auguste Broussonnet, 34090 Montpellier</br>
          SIRET : 42889895100028</br>
          Tél. : 04 67 52 41 22</br>
          email : sauvages @ tela-botanica.org</br>
          </address>
        </p>
        <p><strong>Conception éditoriale :</strong> Tela Botanica</p>
        <p><strong>Base de données et interfaces de saisie des observations :</strong> Tela Botanica (CarnetEnLigne)</p>
        <p><strong>Conception graphique :</strong> Natural Solutions</p>
        <p><strong>Logo « Sauvages de ma rue » :</strong> Jean-Marc Dumont </p>
        <p><strong>Photos :</strong> Réseau Tela Botanica (licence cc-by-sa) - Bertrand Bui, Michel Pourchet, Remi Tournebize, Herve-Goeau, Thierry-Pernot, Daniel Barthelemy, Sébastien Jésel, Christophe Bernier, Genevieve Botti, Liliane Roubaudi, Claude Figureau, Jacques Marechal, John De Vos, Mathieu Menand, Claude Echardour, Vincent Jouhet, Alain-RIVIERE et Sophie-LEFETZ.</p>
        <p><strong>FlickR :</strong> (licence cc-by-sa) – Alazere, Sarah Gregg, naturgucker.de, Peter M Greenwood</p>
        <p><strong>Illustrations naturalistes :</strong> Tela Botanica</p>
        <p><strong>Police de caractères utilisée pour le titrage :</strong> <a href="http://www.smeltery.net/fonts/trottoir" alt="Aller sur le site de Smeltery" target="_blanck">Police TRottoir par Smeltery</a></p>
        <p><strong>Espace rédacteur :</strong> structures d'animations - Tela Botanica, Laboratoire Population Environnement et Développement, La Boate, Arborescence, Centre d'Animation du Vieux Moulin, Espace citoyen et de la création des canourgues, E4, Ville de Marseille.</p>
        <p><strong>Observations :</strong> Les observations collectées dans le cadre du programme Sauvages de PACA sont transmises au service <a href="http://www.tela-botanica.org/page:cel" target="_blanck" alt="Aller sur la page de présenation du cel sur le site de Tela Botanica" title="Aller sur la page de présenation du cel sur le site de Tela Botanica">Carnet En Ligne (CEL)</a> élaboré par Tela Botanica. En transmettant leurs observations, les utilisateurs acceptent les conditions définies dans <a href="http://www.tela-botanica.org/page:charte_carnet_en_ligne" alt="Charte d'utilisation du Carnet en ligne" title="Lire la charte d'utilisation du Carnet en Ligne" target="_blanck">la charte du CEL</a>.</p>
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
