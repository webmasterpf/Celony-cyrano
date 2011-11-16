<?php
/* 
 * Code pour inclure le bloc video sur les tpl des actus ou annonces
 *  du fait du theming selon taxo et type de contenu
 */

     /*Permet d'afficher contenu field CCK sans limite de nombre - http://drupal.org/node/1240496
      * le premier array sert pour le header de la table, ensuite il s'agit de la table simple ($rows)
      */
 if ($node->field_video_rp[0]['view']): ?>
       <div class="video_rp ombrage_bloc">
               <?php
$rows = array();
foreach($node->field_video_rp as $file) {
  if ($file['view']) {
      $rows[] = array($file['view']);
    }
}
$output = theme_table(array(), $rows, array('class' => 'table-video-rp'));
print $output;
?>


        </div>
           <?php endif;?>