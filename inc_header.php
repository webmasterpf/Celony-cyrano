<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

  <head>
    <title><?php print $head_title; ?></title>
    <!-- stats-SEO -->
    <meta name="google-site-verification" content="msBEDS9QaIIEpzPS6_Wi-HOzKWr1Kw0dageOmF-4rbs" />
    <meta name="y_key" content="e0a3005490e0c1fc"/>
    <meta name="msvalidate.01" content="ADFD4C87A757AE4461AE5F7793002836" />
    <?php print $head; ?>
    <?php print $styles; ?>
    
    <?php print $scripts; ?>
    <script src="<?php //print $base_path . path_to_theme() ?>/js/typos.js" type="text/javascript" charset="utf-8"></script>
       <!--[if IE]>
      <link rel="stylesheet" type="text/css" href="<?php print $base_path . path_to_theme() ?>/css/for_ie.css" />
      <![endif]-->
<!-- CU3ER content JavaScript part starts here   -->
<script type="text/javascript" src="<?php print $base_path  ?>sites/all/3rdparty/cu3er/js/swfobject.js"></script>
<script type="text/javascript" src="<?php print $base_path  ?>sites/all/3rdparty/cu3er/js/CU3ER.js"></script>
<script type="text/javascript">
  // add your FlashVars
  var vars = { xml_location : '<?php print $base_path  ?>sites/all/3rdparty/cu3er/CU3ER-config.xml' };
  // add Flash embedding parameters, etc. wmode, bgcolor...
  var params = { bgcolor : '#ffffff' };
  // Flash object attributes id and name
  var attributes = { id:'CU3ER', name:'CU3ER' };
  // dynamic embed of Flash, set the location of expressInstall if needed
	swfobject.embedSWF('<?php print $base_path  ?>sites/all/3rdparty/cu3er/CU3ER.swf', "CU3ER", 550, 480, "10.0.0", "js/expressinstall.swf", vars, params, attributes );
  // initialize CU3ER class containing Javascript controls and events for CU3ER
  var CU3ER_object = new CU3ER("CU3ER");
</script>
<!-- CU3ER content JavaScript part ends here   -->
<!-- Start CU3OX.com HEAD section id=1 -->
<script language="JavaScript" src="<?php print $base_path  ?>sites/all/3rdparty/cu3ox/engine/swfobject.js" type="text/javascript"></script>
<!-- Start CU3OX.com HEAD section -->
  </head>

 <body class="<?php print $body_classes; ?>">
 
	<div id="general">
 
    <!-- ______________________ HEADER _______________________ -->
	 <div id="header">
	 
		<div id="header-inner">
	
        <div id="headHaut">
		
          <div id="logoHead">
	           <?php if (!empty($logo)): ?>
		           <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/></a>
	          <?php endif; ?>
	       </div>   
		   
         <div id="menuImg">
              <?php if (!empty($navStatic)): ?>
		           <?php print $navStatic; ?>
	          <?php endif; ?>
          </div>

          </div><!-- /headHaut -->
		 <div id="headBas">
		 
	<?php if (!empty($site_slogan)): ?>
            <div id="site-slogan">
	<?php print $site_slogan; ?>
            </div><!-- /site-slogan -->
            <?php endif; ?>


            <div id="headSearch">
		  <?php if (!empty($search_box)): ?>
		  <?php print $search_box ?>
		  <?php endif; ?>
		  </div><!-- /recherche -->

                  
          <div id="menuHead">
	        <?php if (!empty($menuDyn)): ?>
			   <?php print $menuDyn; ?>
            <?php endif; ?>

          </div><!-- /menuHead -->
		 
		  
		</div><!-- /headBas -->
               
      
	  </div> <!-- /header-inner -->
   </div> <!-- /header -->
