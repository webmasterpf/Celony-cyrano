<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<?php if ($node->field_choix_galerie_vdl[0]['view']): ?>
        <div id="bloc-galerie-vdl">
           <?php  print $node->field_choix_galerie_vdl[0]['view'] /*Vue galerie vdl*/ ?>
        </div>
<?php endif;?>