<!--______________NODE TPL POUR FICHE FORMATION CUSTOM : node-1-2.tpl.php________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
<!--______________COLONNE GAUCHE 1 : pole tertiaire________________ -->
  <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
<div id="fiche_col_G1">
     <?php if ($title): /*insertion du titre de la page et style differencié*/?>
     <h1 class="titre_pole_services"><?php print $title; ?></h1>

    <?php endif; ?>
      <br class="clearBoth"/>
   
<?php
global $theme_path;
include ($theme_path.'/includes/inc_field_diapo_slideshow_multimage.php');
?>
      <br class="clearBoth"/>
 <?php
 /* inclusion d'une region pour bloc dans colonne de gauche*/
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_G1.php');
              ?>
    </div><!-- /fiche_col_G1 -->

<!--______________COLONNE GAUCHE 2 : pole tertiaire________________ -->
<div id="fiche_col_G2">
        <?php
 //affichage du complement splash clignotant 
   if ($node->field_info[0]['view']): ?>
    <div class="starburst"><span><span><span>
                    <?php print $node->field_info[0]['view'] ?>
                </span></span></span></div>
   <br class="clearBoth"/>
        <?php endif; ?>
     
<?php
global $theme_path;
include ($theme_path.'/includes/inc_formation_table_fiche.php');
?>

</div>
<!--______________COLONNE GAUCHE 3 : pole tertiaire________________ -->

<div id="fiche_col_G3">
     <?php print $picture; ?>

    <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>

    <div class="content">
     <?php
     /*insertion du contenu du corps de la page*/
      print $node->content['body']['#value']
      ?>
    </div>

    <?php if ($terms): ?>
      <div class="taxonomy"><?php //print $terms; ?></div>
    <?php endif;?>

    <?php if ($links): ?>
      <div class="links"> <?php print $links; ?></div>
    <?php endif; ?>

</div>

 <!-- retour haut selon resolution de l'ecran -->
          <a href="#general" id="retour_haut">Haut de page</a>
  </div> <!-- /node-inner -->
</div> <!-- /node-->
<!--______________FIN NODE TPL CUSTOM________________ -->
 <?php print_r();?>