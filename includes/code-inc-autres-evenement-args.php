<?php/*

                $viewname = 'liste_autres_vdl';
                $view = views_get_view ($viewname);
                $viewdisplay = $view->set_display('block_1');

//vid = 4 , type d'evenement pour site en prod
                $lesVid=array('4');

// on recupere le vid (taxonomie) et l'on verifie si c'est celui voulu
                if ( !empty($node->taxonomy)  ) {
// Récupération du 1er element du tableau
                    $term = array_shift($node->taxonomy);
                    // verifie si l'un des termes appartiennent bien à l'un des vid définis dans le tableau
                    if ( in_array($term->vid,$lesVid) ) {
                        $args = $term->tid;
                        $view->set_arguments($args);
                        //debugage
                        drupal_set_message('VID vocabulaire: '.$term->vid.' et le terme id : '.$term->tid,'status');
                        drupal_set_message('Vue utilisé: '.$viewname,'status');
                        $output = '<div id="ac"><h3>'.$view->get_title().'</h3>' .$view->preview($viewdisplay, $args).'</div>';
                        drupal_set_message('Argument pour la vue : tid '.$args.'/ nid '.$node->nid,'status');
                        drupal_set_message('Vue sortie des valeurs avant affichage : '.$output,'status');
                        if (!empty($view->result)) {
                            print $output;
                            drupal_set_message('Vue sortie des valeurs: '.$output,'status');
                        }
                    }
                }
                */?>