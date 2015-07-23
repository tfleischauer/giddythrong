<?php get_header(); ?>

<!-- START MIDDLE-CONTENT-WRAPPER -->
<div id="middle-content-wrapper" class="page-wrapper">

<!-- START SIDEBAR -->
<?php get_sidebar( 'breadcrumbs' ); ?>
<!-- END SIDEBAR -->

<!-- START CONTENT -->
<h2 id="page-title" class="white-bg"><?php wp_title(''); ?></h2> 

<?php if (have_posts()) : ?>

<div id="content" class="page-about multi-posts">   
    
    <!-- needed to display content from the panel -->
	<?php while (have_posts()) : the_post(); ?> 
    
    <!-- START BLOG POST -->
	<div>        
        
        
        <!-- START BLOG-DESCRIPTION -->
        <!--<div class="blog-post-description">-->
			<?php the_content('More &raquo;'); ?>
        	<?php edit_post_link('Edit this entry.', '<p class="clear"><small>', '</small></p>'); ?>
       <!-- </div>-->
        <!-- END BLOG-DESCRIPTION -->
        
    </div> 
    <!-- END BLOG POST -->


</div>
<!-- END CONTENT -->   
   
	<?php endwhile; endif; ?>  
   

<?php get_sidebar( 'primary' ); ?>

<?php get_footer(); ?>