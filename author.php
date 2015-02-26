<?php get_header(); ?>

<!-- START MIDDLE-CONTENT-WRAPPER -->
<div id="middle-content-wrapper" class="page-wrapper">

<!-- START SIDEBAR -->
<?php get_sidebar( 'breadcrumbs' ); ?>
<!-- END SIDEBAR -->

<div id="content" class="author multi-posts">


<!-- This sets the $curauth variable -->
    <?php
    if(isset($_GET['author_name'])) :
        $curauth = get_userdatabylogin($author_name);
    else :
        $curauth = get_userdata(intval($author));
    endif;
    ?>
    <h2 class="posttitle"><?php echo $curauth->display_name; ?></h2>
    
    <p>
<?php if(!empty($curauth->userphoto_thumb_file)){
?>
 
 <div style="float:left;padding-right:15px;padding-bottom:15px;"><img class="photo" alt="<?php echo $curauth->display_name; ?>" src="/wp-content/uploads/userphoto/<?php echo $curauth->userphoto_thumb_file; ?>" /></div>
<?php
}
?>

<?php 
	if(empty($curauth->user_description))	echo $curauth->first_name . ' has not yet written a bio.';
	else echo $curauth->user_description; 
	?></p>
    <?php
	if(!empty($curauth->user_url)){
		?>
        <p>Website: <a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a></p>
        <?
	}
	if(!empty($curauth->twitter)){
		?>
        <p>Twitter: <a href="http://twitter.com/<?php echo $curauth->twitter; ?>">http://twitter.com/<?php echo $curauth->twitter; ?></a></p>
        <?
	}
	?>
    
<!-- The Loop -->
 
 <h2 class="posttitle">Posts by <?php echo $curauth->display_name; ?></h2>

    <?php 
		$hasposts = have_posts(); ?>
		<?php if ($hasposts) : ?>        
        
     <?php while ( have_posts() ) : the_post(); ?>
     
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
      </div> <!-- end post box -->
    <?php /*?><?php endwhile; ?><?php */?>        

		<?php endwhile; ?>
        
		<nav class="post-nav">
            <p class="alignleft"><?php next_posts_link('&laquo; Older Posts') ?></p>
            <p class="alignright"><?php previous_posts_link('Newer Posts &raquo;') ?></p>
		</nav>

	<?php else : ?>
        <p><?php _e( $curauth->first_name.' has not written anything yet.'); ?></p>

</div> <!-- end content -->
    <?php endif; ?>

    <?php /*?><?php if($hasposts) echo '</ul>'; ?><?php */?>

<!-- End Loop -->
</div> <!-- end the post -->

<!-- START SIDEBAR -->
<?php get_sidebar( 'primary' ); ?>
<!-- END SIDEBAR -->

<?php get_footer(); ?>