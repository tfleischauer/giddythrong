<aside id="header">

	<?php if ( is_active_sidebar( 'header' ) ) : ?>

		<?php dynamic_sidebar( 'header' ); ?>

	<?php else : ?>
    
<?php /*?> replace the code below with whatever default code you want to display in Header Sidebar <?php */?>

		 <p><?php get_search_form(); ?></p>
		
<?php /*?> end default code to display in Header Sidebar <?php */?>

	<?php endif; ?>

</aside> <!-- /header -->
