<!-- ______________________ NODE.TPL OVERRIDE BASE _______________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
<!-- ______________________ COLONNE GAUCHE _______________________ -->


       <div id="left-content">
        <?php if ($title): /*insertion du titre de la page et style differencié*/?>
     <h1 class="title"><?php print $title; ?></h1>

    <?php endif; ?>
           <br clear="all"/>
          <?php if ($node->field_vue_actus_lycee[0]['view']): ?>
           <div id="bloc-actu-lycee">
         <?php  print $node->field_vue_actus_lycee[0]['view'] /*Vue actus du lycée*/ ?>
           </div>
         <?php endif;?>
 <?php if ($left): ?>
 <?php print $left; ?>
<?php endif; ?>
                                    
       </div><!-- /colonne gauche -->
   
 <!--______________COLONNE GAUCHE 2________________ -->
<div id="middle-content">
     <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>
    <?php
     /*insertion du contenu du corps de la page*/
      print $node->content['body']['#value']
      ?>

</div>
<!--______________COLONNE GAUCHE 3________________ -->

<div id="right-content">
     <?php print $picture; ?>



    <div class="content">
   <?php if ($right): ?>
 <?php print $right; ?>
<?php endif; ?>


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