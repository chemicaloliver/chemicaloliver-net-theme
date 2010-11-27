<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>
<aside id="sidebar">

  <nav role="navigation">
   <?php wp_nav_menu( array( 'theme_location' => 'primary','fallback_cb'=> '' ) ); ?>
  </nav>
    <a class="fade" href="http://www.flickr.com/photos/oliversphotos/" title="View my photos on flickr"><img width="30" src="<?php echo $GLOBALS["TEMPLATE_RELATIVE_URL"];?>images/flickr.png"></a>
    <a class="fade" href="http://twitter.com/chemicaloliver" title="follow me on twitter"><img width="30" src="<?php echo $GLOBALS["TEMPLATE_RELATIVE_URL"];?>images/twit.png"></a>


</aside>

