<?php
/* 
 * Inclus la vue Documents joints pour page lycee tpl
 * REGLER term display sur default !!
 * Affichage selon argument : nid ou tid - modifier le 16/11/11 par vue globale
 */

?>
<div id="bloc_vdl_autres_evenements">

    <?php

$viewname = 'liste_autres_vdl';
$view = views_get_view ($viewname);
 $viewdisplay = $view->set_display('block_2');




//Exécution de le vue
$view->pre_execute();
$view->execute();

if ($view->result) {
  // S'il y a un resultat on récupère le titre (ajoute tag h3, et le contenu)
    $output = '<div id="ac"><h3>'.$view->get_title().'</h3>' .$view->preview($viewdisplay).'</div>';
  
}

//Affiche la vue
print $output;

?>
    
        
</div>