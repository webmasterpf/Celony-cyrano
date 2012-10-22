<?php
     /*Permet d'afficher contenu field CCK sans limite de nombre - http://drupal.org/node/1240496
      * le premier array sert pour le header de la table, ensuite il s'agit de la table simple ($rows)
      * http://www.group42.ca/theming_101_%E2%80%93_theme_table_function
      */
 if ($node->field_fichiers_cdi[0]['view']): ?>
        <div id="docs-utiles-cdi">
            <h3>Documents utiles</h3>
           <?php
// Table Attributes
$attributes = array(
  'border'      => 1,
  'cellspacing' => 0,
  'cellpadding' => 5,
  'class'       => 'table-cdi'
);
// Table Rows
foreach($node->field_fichiers_cdi as $file) {
  if ($file['view']) {
      $rows[] = array($file['view']);
    }
}
// Render Table
$output = theme_table(array(), $rows,$attributes);
print $output;


?>        </div>
           <?php endif;?>
<br class="clearBoth"/>
