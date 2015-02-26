<?php get_header(); ?>

<!-- START MIDDLE-CONTENT-WRAPPER -->
<div id="middle-content-wrapper" class="page-wrapper">

<!-- START SIDEBAR -->
<?php get_sidebar( 'breadcrumbs' ); ?>
<!-- END SIDEBAR -->

<div id="single-item">
	
<!-- START CONTENT -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="content" class="single">

<div class="white-bg box-shadow o-hidden">

  <?php /*?>  <strong class="breadcrumb"><?php if (function_exists('bcn_display')) { bcn_display(); } ?></strong><?php */?>
    
    <h2><?php the_title(); ?></h2>   
             
    <p class="postmetadata meta-info">
    	<span class="date">Posted on <?php the_time('F jS, Y') ?></span> in 
		<span class="cat"><?php the_category(', ') ?></span>
		<span class="author"><?php _e('By');?> <?php the_author_posts_link(); ?></span>.
    </p>
    
    <p class="postmetadata meta-info"><span><?php the_tags( 'Tags: ', ', ' , '. ' ); ?></span> </p>
    
     <!--<div id="product-images">
      <div id="product-image-focus">
          
      </div> --><!-- end product-image-focus -->
     <!-- <div id="product-thumbnails">
      
      </div>--> <!-- end product thumbnails -->
    <!--</div> --><!-- product images -->     
    
    <?php the_content('More &raquo;'); ?>

</div>
    
		<nav class="post-nav">            
			<div class="alignleft"><?php previous_post_link('&laquo; %link', '%title', true) ?></div>
			<div class="alignright"><?php next_post_link('%link &raquo;', '%title', true) ?></div>
		</nav>
    
    <?php edit_post_link('Edit this entry.', '<p><small>', '</small></p>'); ?>
	<?php comments_template(); ?>
    <?php endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
    
</div> <!-- end single-item -->    
    
</div>
<!-- END CONTENT -->

<?php get_footer(); ?>