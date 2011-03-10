<!-- ______________________node-page_pole-1-2.tpl - pole services _______________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">

    <?php if (!$page): ?>
      <h2 class="title"><a href="<?php //print $node_url; ?>"><?php //print $title; ?></a></h2>
    <?php endif; ?>

    <?php print $picture; ?>

    <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>
<!-- ______________________ PARTIE CUSTOMISEE _______________________ -->
 <div id="liste_formation_pole_services">
                  <?php if ($title): ?>
                <h1 class="title-page-bloc"><?php print $title; ?></h1>
              <?php endif; ?>
               
<?php print $node->field_vue_pole_formation[0]['view'] ?>
</div>
    <?php if ($terms): ?>
      <div class="taxonomy"><?php //print $terms; ?></div>
    <?php endif;?>

    <?php if ($links): ?> 
      <div class="links"> <?php print $links; ?></div>
    <?php endif; ?>

  </div> <!-- /node-inner -->
</div> <!-- /node-->