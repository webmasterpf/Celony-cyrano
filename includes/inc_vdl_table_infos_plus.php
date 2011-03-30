<?php
// fichier pour le tableau listant les champs, afin de les organiser.Affichage conditionnel php
// n'utilise pas de vue. http://drupalfr.org/forum/support/developpement/26886-resolu-affichage-conditionnel-dans-template-de-valeurs-cck

?>
  <?php  if(
          $node->field_relatif_formation[0]['view']
          OR $node->field_fiche_action[0]['view']
          OR  $node->field_lien_utile_vdl[0]['view']
          OR $node->field_lien_utile_vdl[1]['view']
          OR $node->field_lien_utile_vdl[2]['view']

  ):?>
<table id="table_infos_plus" border="0">
    <tbody>
        <tr><td><h3>Infos en plus</h3> </td></tr>
        <tr>
            <td> <p>Sortie réalisée dans le cadre de la formation:<br>
                    <?php  print $node->field_relatif_formation[0]['view'] /*Noderef fiche*/ ?></p>
                <hr class="ombrage_bas"/>
            </td>
        </tr>
        <tr><td>
                <?php if ($node->field_fiche_action[0]['view']): ?>
                    <?php  print $node->field_fiche_action[0]['view'] /*Fiche action*/ ?>
                <hr class="ombrage_bas"/></td></tr>
                <?php endif; ?>
        <tr><td>
                <?php if ($node->field_lien_utile_vdl[0]['view']): ?>
                    <?php  print $node->field_lien_utile_vdl[0]['view'] /*Fiche action*/ ?>
                <hr class="ombrage_bas"/>
                <?php endif; ?>
            </td></tr>
        <tr><td>
                <?php if ($node->field_lien_utile_vdl[1]['view']): ?>
                    <?php  print $node->field_lien_utile_vdl[1]['view'] /*Fiche action*/ ?>
                <hr class="ombrage_bas"/>
                <?php endif; ?>
            </td></tr>
        <tr><td>
                <?php if ($node->field_lien_utile_vdl[2]['view']): ?>
                    <?php  print $node->field_lien_utile_vdl[2]['view'] /*Fiche action*/ ?>
                <hr class="ombrage_bas"/>
                <?php endif; ?>
            </td></tr>

    </tbody>
</table>
 <?php endif; ?>