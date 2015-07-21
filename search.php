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

		<h3 class="padding-bottom">No posts found about your topic.</h3>
        <p>Try a different search?</p>
    
        <div id="search404">
            <?php get_search_form(); ?>
        </div> 

	<?php endif; ?>
		
</div>
<!-- END CONTENT -->

<?php get_sidebar( 'primary' ); ?>

<?php get_footer(); ?>