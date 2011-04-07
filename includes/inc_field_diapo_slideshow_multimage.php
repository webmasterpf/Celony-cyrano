<?php
//Includes pour afficher vue slideshow multimage sur fiche formation
/*
 * Normalement les champs CCK sont testés avant d'être affichés.
 *
 */
if($node->field_diapo_fiche_flash['0']['view']): ?>
<!-- Diapo deco fiche formation -->
    <div id="diapo_fiche">
        <?php foreach ($node->field_diapo_fiche_flash as $item) : ?>
               <?php  print views_embed_view('Diaporama_slideshow_multimage','block_1',$view_args); ?>
        <?php endforeach; ?>
    </div>
<?php endif; ?>