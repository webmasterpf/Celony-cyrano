<?php
//Includes pour afficher Galleryformatters dans node.tpl
/*
 * Inclusion de la vue pour bloc vdl global
 * dans le node pour utiliser le node.tpl
 */

?>
<?php
$viewname = 'Diapo_slider_vdl';
$view = views_get_view ($viewname);
$view->set_display('block_2');


//Exécution de le vue
$view->pre_execute();
$view->execute();

if ($view->result) {
  // S'il y a un resultat on récupère le titre (ajoute tag h3, et le contenu)
  $output = '<div id="bloc_vdl_sortie"><h3>'.$view->get_title().'</h3>' . $view->render().'</div>';
}

//Affiche la vue
print $output;

?>
