<?php
/*
Template Name: Sample
*/

/*
To create a unique page template, 
change the template name on line 3 above, and
replace all instances of 'sample' in the code below
to reflect the unique name/id of 
the header, sidebar, footer, etc. you want to call. 

Then save this file as your-unique-template-name.php
*/ 
?>

<?php get_header('sample'); ?>


<!-- START SIDEBAR -->
<?php get_sidebar('sample'); ?>
<!-- END SIDEBAR -->

<!-- START CONTENT -->
<div id="content" class="sample">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>">
        <h2><?php the_title(); ?></h2>    
		<?php the_content('<p class="serif">More &raquo;</p>'); ?>
        <?php edit_post_link('Edit this entry.', '<p class="clear"><small>', '</small></p>'); ?>
        <p><a href="#" onclick="window.print()"><img class="print" src="<?php bloginfo('template_directory'); ?>/images/printer.png" alt="Print Page" title="Print Page" /></a></p>
		<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
	</div>
   
	<?php endwhile; endif; ?>  
    <?php comments_template('sample'); ?>
</div>
<!-- END CONTENT -->

<?php get_footer('sample'); ?>