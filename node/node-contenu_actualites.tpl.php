<!--______________NODE TPL POUR TdC PAGE CONTENU ACTUALITE CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
<!--______________COLONNE GAUCHE 1________________ -->
  <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
<div id="pageLycee_col_G1">
     <?php if ($title): /*insertion du titre de la page et style differencié*/?>
     <h1 class="titre_pl"><?php print $title; ?></h1>
     <?php endif; ?>
     <br clear="all"/>
      <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_G1.php');
              ?>

        
       
</div>
<!--______________COLONNE GAUCHE 2________________ -->
<div id="pageLycee_col_G2">
     <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>
    <?php
     /*insertion du contenu du corps de la page*/
      print $node->content['body']['#value']
      ?>
      <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_G2.php');
              ?>
    
</div>
<!--______________COLONNE GAUCHE 3________________ -->
   
<div id="pageLycee_col_G3">
     <?php print $picture; ?>

   

    <div class="content">

        <?php
                  global $theme_path;
                  include ($theme_path.'/includes/inc_actus_bloc_rp.php');
                  ?>
        
        <br clear="all"/>
          
    </div>

    <?php if ($terms): ?>
      <div class="taxonomy"><?php //print $terms; ?></div>
    <?php endif;?>

    <?php if ($links): ?>
      <div class="links"> <?php //print $links; ?></div>
    <?php endif; ?>

</div>
   

  </div> <!-- /node-inner -->
</div> <!-- /node-->
<!--______________FIN NODE TPL CUSTOM________________ -->