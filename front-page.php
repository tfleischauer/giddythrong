<?php get_header(); ?>

<!-- START MIDDLE-CONTENT-WRAPPER -->
<div id="middle-content-wrapper" class="page-wrapper">

<!-- START CONTENT -->
<div id="content" class="front-page">

        <?php /*?><div id="hero">
        	<ul class="bxslider">
  				<li><img src="<?php bloginfo('template_url'); ?>/images/DSC08076-mikasa-figurine-940x300.jpg" alt="Mikasa Firguring" /></li>
  				<li><img src="<?php bloginfo('template_url'); ?>/images/DSC08063-candelabra-940x300px.jpg" alt="Candelabra" /></li>
  				<li><img src="<?php bloginfo('template_url'); ?>/images/DSC08113-crown-940x300px.jpg" alt="Crown Victoria China" /></li>
			</ul>
        </div><?php */?>
        
        
        
        <div id="hero" class="box-shadow">

             <?php /*?><?php echo do_shortcode("[huge_it_slider id='1']"); ?><?php */?>
             
             
             <!-- putting a WP loop here instead of shortcode makes it easy for the developer and the client to change from one slider plugin to
              another without needing to edit the template file -->
              
             <?php if (have_posts()) : ?>

				<?php while (have_posts()) : the_post(); ?>

					<?php the_content(); ?> 

				<?php endwhile; ?>
	
			<?php else : ?>

			<><?php _e('Sorry, no posts.'); ?>

			<?php endif; ?>
             
        </div>
        
        <div id="cta-one-two">
        
          <div id="cta-one" class="box-shadow">
                        
              <?php get_sidebar( 'secondary' ); ?>
              
          </div> <!-- end cta-one -->
            
          <div id="cta-two" class="box-shadow">
          
          	<?php if ( is_active_sidebar( 'ctatwo' ) ) : ?>

				<?php dynamic_sidebar( 'ctatwo' ); ?>

				<?php else : ?>

				<!-- Create some custom HTML or call the_widget().  It's up to you. -->

				<?php endif; ?>
                        
            
           </div> <!-- end cta2 -->
          
          </div> <!-- end cta-one-two -->
          
         <div id="cta-three-four">
         
          <div id="cta-three" class="box-shadow">
          
               <?php if ( is_active_sidebar( 'ctathree' ) ) : ?>

				<?php dynamic_sidebar( 'ctathree' ); ?>

				<?php else : ?>

				<!-- Create some custom HTML or call the_widget().  It's up to you. -->

				<?php endif; ?>
                  
          </div> <!-- end cta3 -->
          
          <div id="cta-four" class="box-shadow">
          
          	<?php /*?><?php get_sidebar( 'ctafour' ); ?><?php */?>
            
            <?php if ( is_active_sidebar( 'ctafour' ) ) : ?>

				<?php dynamic_sidebar( 'ctafour' ); ?>

				<?php else : ?>

				<!-- Create some custom HTML or call the_widget().  It's up to you. -->

				<?php endif; ?>
            
          </div> <!-- end cta4 -->
        
        </div> <!-- end cta-three-four -->

</div>
<!-- END CONTENT -->

<?php get_footer(); ?>
