<?php get_header(); ?>

<!-- START MIDDLE-CONTENT-WRAPPER -->
<div id="middle-content-wrapper" class="page-wrapper">

<!-- START SIDEBAR -->
<?php get_sidebar( 'breadcrumbs' ); ?>
<!-- END SIDEBAR -->
                
<!-- START CONTENT -->
<?php if (have_posts()) : ?>
<div id="content" class="category multi-posts">

<?php /*?><h2 id="page-title" class="white-bg"><?php wp_title(''); ?></h2><?php */?>
<h2><?php single_cat_title( '', true ); ?></h2> <!-- puts single category at top of page -->

    <?php while (have_posts()) : the_post(); ?>
    	<div class="post-box">
    	<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
        <p class="postmetadata">
            <span class="date">Posted on <?php the_time('F jS, Y') ?></span> in 
            <span class="cat"><?php the_category(', ') ?></span>
            <span class="author"><?php _e('By');?> <?php the_author_posts_link(); ?></span>
         	<?php /*?><span class="comments">with <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></span><?php */?>
        </p>
		<?php the_content('More &raquo;'); ?>
     	<?php edit_post_link('Edit this entry.', '<p><small>', '</small></p>'); ?>
        </div>
    <?php endwhile; ?>

		<nav class="post-nav">
            <p class="alignleft"><?php next_posts_link('&laquo; Older Posts') ?></p>
            <p class="alignright"><?php previous_posts_link('Newer Posts &raquo;') ?></p>
		</nav>

</div>
<?php endif; ?>
<!-- END CONTENT -->

<?php get_sidebar( 'primary' ); ?>

<?php get_footer(); ?>

<!--</div>-->
<!-- END MIDDLE-CONTENT-WRAPPER -->