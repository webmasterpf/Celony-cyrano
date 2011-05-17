<?php
//Includes pour afficher Galleryformatters dans node.tpl
/*
 * Normalement les champs CCK sont testés avant d'être affichés.
 *
 * 
 *
 */
if($node->field_gallery_formatter_vdl[0]['view']
        OR $node->field_gallery_formatter_vdl[1]['view']
        OR $node->field_gallery_formatter_vdl[2]['view']
        OR $node->field_gallery_formatter_vdl[3]['view']):?>
<!-- Diapo deco fiche formation -->
    <div id="diapo_fiche">

               <?php  print $node->field_gallery_formatter_vdl[0]['view']; ?>

    </div>
<?php endif; ?>