<?php
/* 
 * Code pour inclure le bloc Celony actus via PHP
 */

?>

<?php
$viewname = 'liste_actu_lycee';
$view = views_get_view ($viewname);
$view->set_display('page_1');


//Exécution de le vue
$view->pre_execute();
$view->execute();

if ($view->result) {
  // S'il y a un resultat on récupère le titre (ajoute tag h3, et le contenu
  $output = '<div id="bloc-actu-lycee"><h3>'.$view->get_title().'</h3>' . $view->render().'</div>';
}

//Affiche Celony actus
print $output;

?>