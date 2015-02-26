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
                        
            <!--<h3><a href="http://giddythrong.com/giddyup/inventory/">Go To New Finds >></a></h3>-->
                <a href="http://giddythrong.com/giddyup/inventory/"><img src="<?php bloginfo('template_url'); ?>/images/DSC08027-homer-220x220px.jpg" alt="Homer Laughlin Harlequin Casserole Dish">
                <div class="cover"><h3>Go To New Finds >></h3></div>
                
                </a>
                
                    <!-- needed to display content from the panel -->
                    <?php /*?><?php if (have_posts()) : while (have_posts()) : the_post(); ?> <?php */?>
    
                    <?php /*?><div id="post-<?php the_ID(); ?>"><?php */?>
    
                    <!-- START BLOG POST -->
                    <!--<div class="blog-post"> -->               
        
                      <!-- START BLOG-DESCRIPTION -->
                      <!--<div class="blog-post-description">-->
                      <?php /*?><?php the_content('<p class="serif">More &raquo;</p>'); ?><?php */?>
                      <?php /*?><?php edit_post_link('Edit this entry.', '<p class="clear"><small>', '</small></p>'); ?><?php */?>
                      <!-- </div>-->
                      <!-- END BLOG-DESCRIPTION -->
        
                    <!--</div>--> 
                    <!-- END BLOG POST -->
  
                    <!--</div>-->
                    <!-- END DIV POST- --> 
   
                   <?php /*?> <?php endwhile; endif; ?> <?php */?> 
    
           </div> <!-- end cta2 -->
          
          </div> <!-- end cta-one-two -->
          
         <div id="cta-three-four">
         
          <div id="cta-three" class="box-shadow">
          
               <img src="<?php bloginfo('template_url'); ?>/images/placeholder-220x220.png" alt="Placeholder for Sale Items">
                            <div class="cover"><h3>See Sale Items >></h3></div>
             
                    
              <?php /*?><h3>See Sale Items >></h3>     
                  <img src="<?php bloginfo('template_url'); ?>/images/DSC08036-plastic-cups-220x220px.jpg" alt="Vintage Plastic Cups"><?php */?>
                  
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
