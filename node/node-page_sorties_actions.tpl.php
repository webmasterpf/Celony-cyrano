<!--______________NODE TPL POUR TdC PAGE SORTIE ACTIONS CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
<!--______________COLONNE GAUCHE 1________________ -->
 
<div id="pageSortieActions_col_G1">
     <?php if ($title): /*insertion du titre de la page et style differencié*/?>
     <h1 class="titre_vdl_sortie"><?php print $title; ?></h1>
     
    <?php endif; ?>
      <br class="clearBoth"/>
       <!-- Table pour infos en plus -->
        <?php
global $theme_path;
include ($theme_path.'/includes/inc_vdl_table_infos_plus.php');
?>
        <br class="clearBoth"/>
 <?php
 /* inclusion d'une region pour bloc dans colonne de gauche*/
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_G1.php');
              ?>
   
</div>
<!--______________COLONNE GAUCHE 2________________ -->
<div id="pageSortieActions_col_G2">
     <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>
    <?php
     /*insertion du contenu du corps de la page*/
      print $node->content['body']['#value'];
      ?>

       <?php if ($node->field_choix_galerie_vdl[0]['view']): ?>
        <div id="bloc-galerie-vdl">
           <?php  print $node->field_choix_galerie_vdl[0]['view'] /*Vue galerie vdl*/ ?>
        </div>
           <?php endif;?>

     <!-- retour haut selon resolution de l'ecran -->
          <!--<a href="#general" id="retour_haut">Haut de page</a>-->
</div>
<!--______________COLONNE GAUCHE 3________________ -->
   
<div id="pageSortieActions_col_G3">
     <?php print $picture; ?>
  

    <div class="content">

   <div id="bloc-autres-vdl">

    <?php
    /*
global $theme_path;
include ($theme_path.'/includes/inc_vdl_autres_evenements.php');
*/
   ?>
  

        <?php if ($node->field_vue_autres_vdl[0]['view']): /*Affichage conditionnel du bloc Autres sorties*/?>
        <div id="bloc-autres-vdl">
                <?php  print $node->field_vue_autres_vdl[0]['view']; /*Autres sorties selon taxo type de vdl*/ ?>
        </div>
        <?php endif;?>
       
   </div>

    
    </div>

    <?php if ($terms): ?>
      <div class="taxonomy"><?php //print $terms; ?></div>
    <?php endif;?>

    <?php if ($links): ?>
      <div class="links"> <?php //print $links; ?></div>
    <?php endif; ?>

</div>
    <!-- <pre> <?php print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->

  </div> <!-- /node-inner -->
</div> <!-- /node-->
<!--______________FIN NODE TPL CUSTOM________________ -->