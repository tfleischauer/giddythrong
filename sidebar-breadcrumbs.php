<aside id="breadcrumbs">

	<?php if ( is_active_sidebar( 'breadcrumbs' ) ) : ?>

		<?php dynamic_sidebar( 'breadcrumbs' ); ?>

	<?php else : ?>

      <h3><?php the_title(); ?></h3>
      
     <?php /*?> <p>Silence is golden.</p><?php */?>

	<?php endif; ?>

</aside><!-- end breadcrumbs -->
