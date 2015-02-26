<?php
/*
Template Name: Special
*/

/*
This is an example page that calls the secondary sidebar. 
It's based on sample.php.

Change the template name to whatever you want, by re-naming the file and editing line 3, above.

You can call a unique header, sidebar, footer, etc. 
as shown in the get_sidebar example, below.
*/
?>

<?php get_header(); ?>


<!-- START SIDEBAR -->
<?php get_sidebar('secondary'); ?>
<!-- END SIDEBAR -->

<!-- START CONTENT -->
<div id="content" class="special">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>">
        <h2><?php the_title(); ?></h2>     
		<?php the_content('<p class="serif">More &raquo;</p>'); ?>
        <?php edit_post_link('Edit this entry.', '<p class="clear"><small>', '</small></p>'); ?>
        <p><a href="#" onclick="window.print()"><img class="print" src="<?php bloginfo('template_directory'); ?>/images/printer.png" alt="Print Page" title="Print Page" /></a></p>
		<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
	</div>
   
	<?php endwhile; endif; ?>  
    <?php comments_template(); ?>
</div>
<!-- END CONTENT -->

<?php get_footer(); ?>