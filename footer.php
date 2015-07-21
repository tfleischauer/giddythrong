</div>
<!-- END MIDDLE-CONTENT-WRAPPER -->



<div id="menu-footer" class="page-wrapper">
    <nav id="nav-footer" class="box-shadow">

           <?php wp_nav_menu( array( 
                'theme_location' => 'nav-footer' ,
                'menu' => 'Nav-Footer' ,
                'container'  => 'ul'
            ) ); ?>
    
    </nav> <!-- end nav-footer -->
</div> <!-- end menu-footer -->

<!--<div id="all-footers">-->

<footer class="page-wrapper">
	<div class="middle-content-wrapper box-shadow">
		<span id="copyright"><?php print ("&copy; " . date ('Y') . " "); ?>Giddy Throng. All Rights Reserved. </span> 
        <span id="design-credit">Web Design <a href="http://www.portfolio.troyfleischauer.com" target="_blank">Troy Fleischauer</a></span>
        <span class="log-in"><?php wp_loginout(); ?></span>
    </div>
</footer>
        
        <!-- begin validation buttons -->
          <p id="validation-icons">
           <a href="http://validator.w3.org/check?uri=referer">
            <img src="http://www.w3.org/html/logo/badge/html5-badge-h-solo.png" 
            width="31" height="32" alt="valid HTML5" />
           </a>
           <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3">
            <img src="http://jigsaw.w3.org/css-validator/images/vcss" 
             alt="Valid CSS3" height="31" width="88" />
           </a>
          </p>
         <!-- end validation buttons -->

<!--</div> --><!-- end all footers -->

<?php /* wp_footer function must be last item before closing body tag: many plugins use this hook to reference JavaScript files */ ?>
<?php wp_footer(); ?> 
</body>
</html>