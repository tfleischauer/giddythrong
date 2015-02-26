<?php get_header(); ?>

<!-- START MIDDLE-CONTENT-WRAPPER -->
<div id="middle-content-wrapper" class="page-wrapper">

<!-- START SIDEBAR -->
<?php get_sidebar( 'breadcrumbs' ); ?>
<!-- END SIDEBAR -->

<div id="content" class="four04 multi-posts">

	<h2>Error 404</h2>
    
    <p>Q: What does 404 mean? That doesn't make me feel giddy at all.</p>
	<p>A: It just means the page you were looking for has been moved or removed.</p>
    <p>We apologize for the inconvienience.</p> 
    <p>Try another search to find your topic?<p>
    
    <div id="search404">
    	<?php get_search_form(); ?>
    </div> 
      
</div> <!-- end content -->

<?php get_sidebar( 'primary' ); ?>

<?php get_footer(); ?>