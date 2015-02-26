<?php get_header(); ?>

<!-- START MIDDLE-CONTENT-WRAPPER -->
<div id="middle-content-wrapper" class="page-wrapper">

<!-- START SIDEBAR -->
<?php get_sidebar( 'breadcrumbs' ); ?>
<!-- END SIDEBAR -->

<!-- START CONTENT -->

<div id="content" class="search multi-posts">

	<?php if (have_posts()) : ?>

		<h2 class="pagetitle">Search Results</h2>
		<ul>
		<?php while (have_posts()) : the_post(); ?>
		<li id="post-<?php the_ID(); ?>"> <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></li>
		<?php endwhile; ?>
		</ul>
	<?php else : ?>

		<h2>No posts found about your topic.</h2>
        <h3>Try a different search?</h3>
    	<p><?php get_search_form(); ?></p> 

	<?php endif; ?>
		
</div>
<!-- END CONTENT -->

<?php get_sidebar( 'primary' ); ?>

<?php get_footer(); ?>