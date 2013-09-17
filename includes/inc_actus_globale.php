<?php
/* 
 * Vue actu globale pour page actualité globale
 */

?>
<?php
$viewname_ag1 = 'Actualites_liste_globale';
$view = views_get_view ($viewname_ag1);
$viewdisplay_ag1 = $view->set_display('block_1');
//$args_ldj1 = $view->set_arguments(array($node->nid));

//$emptyTextVue = $view->display_handler->get_option('empty');
//$emptyText = $view->display_handler->set_option('empty','<div class="vue-txt-vide">Pas de contenu à afficher pour cette année.</div>');

//Code change avec Views3

//$view->display['block_1']->handler->handlers['header']['area_1']->options['content'] = "texte header embed_views code 1";
//$view->$handler->display->display_options['header']['area']['content'] = "texte header embed_views code 2";
//Casse la page lors de test
//$emptyText=$view->$handler->display->display_options['empty']['area']['content'] = "texte empty embed_views code 2"; 
  

//Exécution de le vue
$view->pre_execute();
$view->execute();

if (!empty($view->result)) {
   
  // S'il y a un resultat on récupère le titre (ajoute tag h3, et le contenu)
  $output = '<div id="bloc_actus_globales"><h3 class="classe-h3">'.$view->get_title().'</h3>' .$view->preview($viewdisplay_ag1).'</div>';

  //Affiche la vue si contenu
print $output;
}
//sinon affiche texte vide
elseif (empty($view->result)) {
      

    //Formatage du texte vide,ajout du titre de la vue
     $outputEmpty = '<div id="bloc_actus_globales"><h3 class="classe-h3">'.$view->get_title().'</h3>'.$emptyText.'</div>';
    // $outputEmpty = '<div id="bloc_actus_globales"><h3 class="classe-h3">'.$view->get_title().'</h3>'.$emptyTextVue.'</div>';
    // drupal_set_message('$EmptyTextVue : '.$emptyTextVue.'status');
     //Affichage du texte vide
  print $outputEmpty;
}
?>