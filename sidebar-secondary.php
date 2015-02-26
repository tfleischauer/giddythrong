<aside id="secondary">

	<?php if ( is_active_sidebar( 'secondary' ) ) : ?>

		<?php dynamic_sidebar( 'secondary' ); ?>

	<?php else : ?>
    
<?php /*?> replace the code below with whatever default code you want to display in Secondary Sidebar <?php */?>

        <!-- Begin Categories -->
		<h3>Categories</h3>
		<ul>
			<?php wp_list_categories('title_li='); ?>
		</ul>
    	<!-- End Categories -->

        <!-- Begin Meta -->
        <h3>Meta</h3>
        <ul>
        <?php wp_register(); ?>
        <li><?php wp_loginout(); ?></li>
        <?php wp_meta(); ?>
        </ul>
    	<!-- End Meta -->
<?php /*?> end default code to display in Secondary Sidebar <?php */?>

	<?php endif; ?>

</aside><!-- /secondary -->
