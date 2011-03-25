<?php
/* 
 * Code pour inclure le bloc video sur les tpl des actus ou annonces
 *  du fait du theming selon taxo et type de contenu
 */

?>
<?php if ($node->field_video_rp[0]['view']): ?>
<div class="video_rp ombrage_bloc">
    <?php  print $node->field_video_rp[0]['view'] /*Fichier video*/ ?>
</div>
<?php endif; ?>