<?php get_header(); ?>

<!-- START MIDDLE-CONTENT-WRAPPER -->
<div id="middle-content-wrapper" class="page-wrapper">

<!-- START SIDEBAR -->
<?php get_sidebar( 'breadcrumbs' ); ?>
<!-- END SIDEBAR -->
                
<!-- START CONTENT -->
<h2 id="page-title" class="white-bg"><?php wp_title(''); ?></h2>

<?php if (have_posts()) : ?>

<div id="content" class="index multi-posts">



    <?php while (have_posts()) : the_post(); ?>
    	<div class="blog-post white-bg box-shadow">
        
        
        
    
    	<!--<div class="post-box">  -->       
        
    	<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
        
      
        
        <p class="postmetadata">
            <span class="date">Posted on <?php the_time('F jS, Y') ?></span> in 
            <span class="cat"><?php the_category(', ') ?></span>
            <span class="author"><?php _e('By');?> <?php the_author_posts_link(); ?></span>
         	<?php /*?><span class="comments">with <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></span><?php */?>
        </p>
		<?php the_content('More &raquo;'); ?>
     	<?php edit_post_link('Edit this entry.', '<p><small>', '</small></p>'); ?>
        
        <!-- </div> -->   <!-- end post-box -->
        
        
        
    	</div>  <!-- end blog-post -->
    <?php endwhile; ?>

		<nav class="post-nav white-bg">
            <p class="alignleft"><?php next_posts_link('&laquo; Older Posts') ?></p>
            <p class="alignright"><?php previous_posts_link('Newer Posts &raquo;') ?></p>
		</nav>
     
</div> <!-- end content -->
<?php endif; ?>
<!-- END CONTENT -->

<?php get_sidebar( 'primary' ); ?>

<?php get_footer(); ?>