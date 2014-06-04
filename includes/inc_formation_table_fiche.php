<?php
/* 
 * Inclusion du tableau qui affiche les infos pratiques dans les fiches formation
 * 
 */

?>
<h2>infos pratiques</h2>
    <table id="table_fiche_formation">
        <tbody>
            <?php if ($node->field_lien_interne[0]['view']): ?>                
            <tr>
                <td><?php ( print $node->field_lien_interne[0]['view']); /*Lien interne frais scolarité*/ ?></td>
            </tr>
             <?php endif; ?>
             <?php if ($node->field_lien_externe[0]['view']
                     OR $node->field_lien_externe[1]['view']
                     OR $node->field_lien_externe[2]['view']
                     OR $node->field_lien_externe[3]['view']
                     ): ?>
             <?php if ($node->field_lien_externe[0]['view']): ?>
            <tr><td><?php  (print $node->field_lien_externe[0]['view']); /*Lien externe*/?></td>
            </tr><?php endif; ?>
            <?php if ($node->field_lien_externe[1]['view']): ?>
            <tr><td><?php  (print $node->field_lien_externe[1]['view']); /*Lien externe*/?></td></tr>
                <?php endif; ?>
            <?php if ($node->field_lien_externe[2]['view']): ?>
            <tr><td><?php  (print $node->field_lien_externe[2]['view']); /*Lien externe*/?></td></tr>
                <?php endif; ?>
            <?php if ($node->field_lien_externe[3]['view']): ?>
            <tr><td><?php  (print $node->field_lien_externe[3]['view']); /*Lien externe*/?></td></tr>
                <?php endif; ?>
            <?php endif; ?>
             <?php if ($node->field_fiche_formation[0]['view']): ?>
            <tr>
                <td><?php  (print $node->field_fiche_formation[0]['view']); /*Lien vers fiche pdf*/ ?></td>
                
            </tr>
            <tr>
                <td><?php  (print $node->field_fiche_formation[1]['view']); /*Lien vers fiche pdf*/ ?></td>
                
            </tr>
            <?php endif; ?>
             <?php if ($node->field_passerelle[0]['view']): ?>
             <tr>
                <td><?php ( print $node->field_passerelle[0]['view']); /*Lien vers schema passerelle pdf*/ ?></td>
            </tr>
             <?php endif; ?>
             
            <tr>
                <td><?php  (print $node->field_vue_evenements [0]['view']); /*Inclusion vue derniers evenements*/ ?></td>
            </tr>
           
        </tbody>
    </table>
