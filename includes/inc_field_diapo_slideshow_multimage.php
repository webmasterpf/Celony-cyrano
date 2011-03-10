<?php
//Includes pour afficher vue slideshow multimage sur fiche formation
if($node->field_diapo_fiche_flash['0']['view']): ?>
    <div id="diapo_fiche">
        <?php foreach ($node->field_diapo_fiche_flash as $item) : ?>
               <?php  print views_embed_view('Diaporama_slideshow_multimage','block_1',$view_args);/*affiche view slideshow diapo*/ ?>
        <?php endforeach; ?>
    </div>
<?php endif; ?>