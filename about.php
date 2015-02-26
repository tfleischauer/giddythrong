<?php get_header(); ?>

<!-- START MIDDLE-CONTENT-WRAPPER -->
<div id="middle-content-wrapper" class="page-wrapper">

<!-- START SIDEBAR -->
<?php get_sidebar( 'breadcrumbs' ); ?>
<!-- END SIDEBAR -->


<!-- START CONTENT -->
<div id="content" class="about multi-posts">
   
    <?php /*?><h2 class="box-shadow white-bg"><?php the_title(); ?></h2><?php */?> <!-- title of the page ex. 'About' -->  
    
    <h1>This is the about.php template</h1>
    
    <h2 id="page-title" class="white-bg"><?php wp_title(''); ?></h2> 
    
    <!-- needed to display content from the panel -->
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
	
	<?php /*?><div id="post-<?php the_ID(); ?>"><?php */?>
    
    <!-- START BLOG POST -->
	<div class="blog-post">        
        
        <!--<div class="blog-post-image">-->
            <!--<img src="http://placehold.it/220/666666" alt="About Giddy Throng image">-->
       <!-- </div>-->
        
        <!-- START BLOG-DESCRIPTION -->
        <!--<div class="blog-post-description">-->
			<?php the_content('<p class="serif">More &raquo;</p>'); ?>
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