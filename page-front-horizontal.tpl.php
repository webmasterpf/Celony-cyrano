<?php $theme_path = drupal_get_path('theme', 'cyrano_ce'); include ($theme_path.'/includes/inc_header.php'); ?>
<!-- ______________________ LAYOUT HOMEPAGE HORIZONTAL_______________________ -->
 <!-- ______________________ CONTENU _______________________ -->
    
	<div id="mainPage">
	
     
   

          <?php if ($content_top): ?>
            <div id="content-top">
              <?php print $content_top; ?>
            </div> <!-- /#content-top -->
          <?php endif; ?>

            <!-- ______________________ CONTENT TOP NODE_______________________ -->
               <?php if ($content_top_node): ?>
            <div id="content-top-node">
	              <?php print $content_top_node; ?>
            </div> <!-- /#content-top-node -->
            <?php endif; ?>
            
   <!-- ______________________ ZONE DIAPO _______________________ -->
			
              <?php if ($DiapoHP): ?>
                 <div id="HPDiapo"><?php print $DiapoHP; ?></div>
              <?php endif; ?>
              
            
         
<br class="clearBoth"/>


<!-- ______________________ PARTIE BAS GAUCHE _______________________ -->
                 <?php if ($HPBasGauche): ?>
                 <div id="BasGaucheHP"><?php print $HPBasGauche; ?></div>
              <?php endif; ?>  
		 
<!-- ______________________ PARTIE BAS DROITE _______________________ -->
      
	  
	 
        <?php if ($HPBasDroit): ?>
     <div id="BasDroitHP"><?php print $HPBasDroit; ?></div>
        <?php endif; ?>
		
     
	  
   
	<br class="clearBoth"/>
	<!-- ______________________ CONTENU BAS _______________________ -->
    <?php if ($content_bottom_home): ?>
    <div id="content-bottom-home">
      <?php print $content_bottom_home; ?>
         <?php print $feed_icons; ?>
    </div><!-- /#content-bottom -->
    <?php endif; ?>
	
	
	 </div> <!-- /mainPage -->
     <?php $theme_path = drupal_get_path('theme', 'cyrano_ce'); include ($theme_path.'/includes/inc_footer.php'); ?>
