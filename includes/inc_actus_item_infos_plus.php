<?php
/* 
 * Table permettant d'afficher les champs CCK
 * condition que champ soit rempli
 */

?>
<!-- Bloc des infos en plus : audio; fichier joint -->
<?php  if ($node->field_fichier_joint_rp[0]['view']
OR $node->field_fichier_joint_rp[1]['view']
OR $node->field_fichier_joint_rp[2]['view']
OR $node->field_fichier_audio_rp[0]['view']
): ?>

<table id="table_infos_plus" border="0">
    <tbody>
        <tr><td><h3>Infos en plus</h3> </td></tr>
        <?php if ($node->field_fichier_joint_rp[0]['view']): ?>
        <tr>
            <td>
              <?php  print $node->field_fichier_joint_rp[0]['view'] /*Fichier joint 1*/ ?>
                <hr class="ombrage_bas"/>
            </td>
        </tr>
                        <?php endif; ?>

        <?php if ($node->field_fichier_joint_rp[1]['view']): ?>
        <tr><td>
                    <?php  print $node->field_fichier_joint_rp[1]['view'] /*Fichier joint 2*/ ?>
                <hr class="ombrage_bas"/>
            </td></tr>
        <?php endif; ?>
        <?php if ($node->field_fichier_joint_rp[2]['view']): ?>
        <tr><td>
                    <?php  print $node->field_fichier_joint_rp[2]['view'] /*Fichier joint 3*/ ?>
                <hr class="ombrage_bas"/>
            </td></tr>
        <?php endif; ?>

        <?php if ($node->field_fichier_audio_rp[0]['view']): ?>
        <tr><td>
                    <?php  print $node->field_fichier_audio_rp[0]['view'] /*Fichier son*/ ?>
                <hr class="ombrage_bas"/>
            </td></tr>
        <?php endif; ?>

    </tbody>
</table>
<?php endif; ?>


