<?php 

// $Id: page.tpl.php,v 1.1.2.3 2009/01/11 18:17:25 ebizondrupalservices Exp $
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
 <head>
<?php global $base_url;?>
    <title><?php print $head_title ?></title>
    <?php print $head ?>
    <?php print $styles ?>
    <?php print $scripts ?>
   
  </head>



  <body>

    <div id="layout">
      
      <div id="header">
        
	<div id="logo">
              
        <?php
          // Prepare header
          $site_fields = array();
          if ($site_name) {
            $site_fields[] = check_plain($site_name);
          }
          if ($site_slogan) {
            $site_fields[] = check_plain($site_slogan);
          }
          $site_title = implode(' ', $site_fields);
          $site_fields[0] = '<span>'. $site_fields[0] .'</span>';
          $site_html = implode(' ', $site_fields);

          if ($logo || $site_title) {
            print '<h1><a href="'. check_url($base_path) .'" title="'. $site_title .'">';
            if ($logo) {
              //print '<img src="'. check_url($logo) .'" alt="'. $site_title .'" id="logo" />';
            }
            print $site_html .'</a></h1>';
          }
        ?>
       


 
       




        </div>
        <hr class="noscreen" />   
          
              
        <div id="navigation">
        <ul>
          <li><?php if (isset($primary_links)) { ?><?php print theme('links', $primary_links, array('class' =>'links', 'id' => 'navlist')) ?><?php } ?></li>
        </ul>
        </div>
        <hr class="noscreen" />  
    
      </div>
      
        <div class="rbroundbox">
	         <div class="rbtop"><div>&nbsp;</div></div>
		          <div class="rbcontent">
          			
          		<div class="contents">
                          <?php print $messages;?>
	  <?php print $tabs;?>
	  <?php print $breadcrumb; ?>  
              </div>
              <div id="panel-right"><div id="panel-right-inside">
                <?php print $search_box; ?>
              </div></div>	
          			
        		  </div>
	         <div class="rbbot"><div>&nbsp;</div></div>
        </div>
          
	<div id="main">
         
         <div class="mainpage">         
         <?php print $content;?> 
	       </div>
              <div class="rightblock">
              <?php print $right;?>
              </div>
        </div>
        </div>
        <div id="footer">
        <div id="footer-inside">
        
        <!-- Please don't delete this. You can use this template for free and this is the only way that you can say thanks to me -->
          <!--<p id="dont-delete-this">Design by <a href="http://www.davidkohout.cz">David Kohout</a> | Our tip: <a href="http://www.goodmood.cz" title="Absinthe, Becherovka, Slivovitz store">Absinthe Store</a></p>-->
	<!-- Thank you :) -->
	</div><div style="clear: both;"></div></div>
       <?php print $closure ?>
  </body>
</html>
