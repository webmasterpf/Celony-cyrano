<?php
//Includes pour afficher vue slideshow multimage sur fiche formation
/*
 * Normalement les champs CCK sont testés avant d'être affichés.
 *http://drupal.org/node/1061132
 * http://drupalfr.org/forum/support/developpement/27294-vue-slideshow-avec-imagefield-multi-image-inclus-dans-nodetpl
 *  
 */
if($node->field_diapo_fiche_flash[0]['view']
        OR $node->field_diapo_fiche_flash[1]['view']
        OR $node->field_diapo_fiche_flash[2]['view']
        OR $node->field_diapo_fiche_flash[3]['view']):?>
<!-- Diapo deco fiche formation -->
    <div id="diapo_fiche">
       
               <?php  print views_embed_view('Diaporama_slideshow_multimage','block_1',$view_args); ?>
       
    </div>
<?php endif; ?>