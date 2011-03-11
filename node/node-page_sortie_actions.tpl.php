<!--______________NODE TPL POUR TdC PAGE SORTIE ACTIONS CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
<!--______________COLONNE GAUCHE 1________________ -->
  <!-- <pre> <?php print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
<div id="pageSortieActions_col_G1">
     <?php if ($title): /*insertion du titre de la page et style differencié*/?>
     <h1 class="titre_pl"><?php print $title; ?></h1>
     
    <?php endif; ?>
      <br clear="all"/>
       <!-- Table pour infos en plus -->
       <table id="table_infos_plus" border="0">
           <tbody>
               <tr>
                   <td> <p>Sortie réalisée dans le cadre de la formation</p><br>
    <?php  print $node->field_relatif_formation[0]['view'] /*Noderef fiche*/ ?>
                   </td>
                   <td><?php  print $node->field_fiche_action[0]['view'] /*Fiche action*/ ?></td>
                   <td><?php  print $node->field_lien_utile_vdl[0]['view'] /*Fiche action*/ ?></td>
                   <td><?php  print $node->field_lien_utile_vdl[1]['view'] /*Fiche action*/ ?></td>
                   <td><?php  print $node->field_lien_utile_vdl[2]['view'] /*Fiche action*/ ?></td>
               </tr>
           </tbody>
       </table>

   
</div>
<!--______________COLONNE GAUCHE 2________________ -->
<div id="pageSortieActions_col_G2">
     <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>
    <?php
     /*insertion du contenu du corps de la page*/
      print $node->content['body']['#value']
      ?>
    
</div>
<!--______________COLONNE GAUCHE 3________________ -->
   
<div id="pageSortieActions_col_G3">
     <?php print $picture; ?>

   

    <div class="content">
   

         <?php if ($node->field_vue_autres_vdl[0]['view']): /*Affichage conditionnel du bloc Autres sorties*/?>
         <div id="bloc-autres-vdl">
         <?php  print $node->field_vue_autres_vdl[0]['view'] /*Autres sorties selon taxo type de vdl*/ ?>
         </div>
                 <?php endif;?>
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