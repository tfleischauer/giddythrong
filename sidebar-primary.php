<!-- use a different id to create unique CSS styles for your sidebar -->
<aside id="primary">

	<?php if ( is_active_sidebar('primary') ) : ?><?php /*?> you'll need to register your sidebar's name in functions.php <?php */?>

		<?php dynamic_sidebar('primary'); ?>

	<?php else : ?>
    
    <?php /*?> replace this code with whatever default code you want to display your sidebar if no widgets are active <?php */?>
      <h3>Primary Sidebar</h3>
        <p>Look, it's the Primary Sidebar!</p>
        
        <!-- Begin Pages -->
        <h3>Pages</h3>
        <ul>
        <?php wp_list_pages('post_title&depth=1&title_li='); ?>
        </ul>
    	<!-- End Pages -->
        
        <!-- Begin Categories -->
		<h3>Categories</h3>
		<ul>
			<?php wp_list_categories('title_li='); ?>
		</ul>
    	<!-- End Categories -->

      <h3>Subhead</h3>        
        <p>Magna aliquam erat volutpat malesuada ac purus.</p>
       
    <?php /*?> end default code to display in Primary sidebar <?php */?>

	<?php endif; ?>

</aside>