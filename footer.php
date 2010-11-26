<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>

  <footer>
      <p>
          
      </p>
  </footer>
</div> <!--! end of #container -->

  <!-- Javascript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  <script>!window.jQuery && document.write('<script src="<?php echo $GLOBALS["TEMPLATE_RELATIVE_URL"] ?>html5-boilerplate/js/jquery-1.4.2.min.js"><\/script>')</script>


  <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/js/plugins.js") ?>
  <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/js/script.js") ?>


  <!--[if lt IE 7 ]>
    <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/js/dd_belatedpng.js") ?>
  <![endif]-->


  <!-- yui profiler and profileviewer - remove for production -->
  <!-- <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/js/profiling/yahoo-profiling.min.js") ?>
    <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/js/profiling/config.js") ?> -->
  <!-- end profiling code -->


  <!-- asynchronous google analytics: mathiasbynens.be/notes/async-analytics-snippet
       change the UA-XXXXX-X to be your site's ID -->
  <!-- WordPress does not allow Google Analytics code to be built into themes they host. 
       Add this section from HTML Boilerplate manually (html5-boilerplate/index.html), or use a Google Analytics WordPress Plugin-->

  <?php wp_footer(); ?>

</body>
</html>
