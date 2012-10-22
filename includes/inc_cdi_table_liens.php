<?php
     /*Permet d'afficher contenu field CCK sans limite de nombre - http://drupal.org/node/1240496
      * le premier array sert pour le header de la table, ensuite il s'agit de la table simple ($rows)
      */
 if ($node->field_lien_cdi[0]['view']): ?>
        <div id="liens-utiles-cdi">
            <h3>  Des liens utiles</h3>
           <?php
$rows = array();
foreach($node->field_lien_cdi as $file) {
  if ($file['view']) {
      $rows[] = array($file['view']);
    }
}
$output = theme_table(array(), $rows, array('class' => 'table-cdi'));
print $output;
?>


        </div>
           <?php endif;?>
<br class="clearBoth"/>
