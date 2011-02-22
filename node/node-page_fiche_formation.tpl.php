<!--______________NODE TPL POUR FICHE FORMATION CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
<!--______________COLONNE GAUCHE 1________________ -->
  <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
<div id="fiche_col_G1">
     <?php if ($title): /*insertion du titre de la page et style differencié*/?>
     <h1 class="titre_fiche"><?php print $title; ?></h1>
     
    <?php endif; ?>
      <br clear="all"/>
       <!-- Diapo deco fiche formation -->
    <?php
global $theme_path;
include ($theme_path.'/includes/inc_field_diapo_fiche_flash.php');
?>
</div>
<!--______________COLONNE GAUCHE 2________________ -->
<div id="fiche_col_G2">
    <h2>infos pratiques</h2>
    <table id="table_fiche_formation">
        <tbody>
            <tr>
                <td><?php  print $node->field_lien_interne[0]['view'] /*Lien interne frais scolarité*/ ?></td>
            </tr>
            <tr>
                <td><?php  print $node->field_lien_externe[0]['view'] /*Lien externe onisep*/?></td>
            </tr>
            <tr>
                <td><?php  print $node->field_fiche_formation[0]['view'] /*Lien vers fiche pdf*/ ?></td>
            </tr>
        </tbody>
    </table>
    
</div>
<!--______________COLONNE GAUCHE 3________________ -->
   
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