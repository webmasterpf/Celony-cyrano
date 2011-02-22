<?php
//Includes du champ pour le diapo flash sur fiche formation
if($node->field_diapo_fiche_flash['0']['view']): ?>
    <div id="diapo_fiche">
        <?php foreach ($node->field_diapo_fiche_flash as $item) : ?>
                <?php print $item['view']; ?>
        <?php endforeach; ?>
    </div>
<?php endif; ?>