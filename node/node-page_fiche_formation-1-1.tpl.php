<!--______________NODE TPL POUR FICHE FORMATION CUSTOM : node-1-2.tpl.php________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
<!--______________COLONNE GAUCHE 1 : pole services________________ -->
  <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
<div id="fiche_col_G1">
     <?php if ($title): /*insertion du titre de la page et style differencié*/?>
     <h1 class="titre_pole_tertiaire"><?php print $title; ?></h1>

    <?php endif; ?>
      <br clear="all"/>
    <!-- Diapo deco fiche formation -->

<?php
global $theme_path;
include ($theme_path.'/includes/inc_field_diapo_fiche_flash.php');
?>
    
</div><!-- fin colonne G1-->
<!--______________COLONNE GAUCHE 2 : pole services________________ -->
<div id="fiche_col_G2">
    <?php
global $theme_path;
include ($theme_path.'/includes/inc_table_fiche_formation.php');
?>

</div>
<!--______________COLONNE GAUCHE 3 : pole services________________ -->

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


  </div> <!-- /node-inner -->
</div> <!-- /node-->
<!--______________FIN NODE TPL CUSTOM________________ -->