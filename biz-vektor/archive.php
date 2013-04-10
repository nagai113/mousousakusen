<?php get_header(); ?>

<!-- [ #container ] -->
<div id="container" class="innerBox">
	<!-- [ #content ] -->
	<div id="content">
	<h2><?php printf( get_the_date('Y'."年".'M') ); ?></h2>
	<div class="infoList">
	<?php
	$options = biz_vektor_get_theme_options();
	if ( $options['listBlogArchive'] == 'listType_title' ) {
		get_template_part('module_loop_blog');
	} else {
		get_template_part('module_loop_blog2');
	} ?>
	</div><!-- [ /.infoList ] -->
	<?php pagination($additional_loop->max_num_pages); ?>
	</div>
	<!-- [ /#content ] -->

<!-- [ #sideTower ] -->
<div id="sideTower">
	<?php get_template_part('module_side_blog'); ?>
	<div class="localSection">
	<?php get_sidebar(); ?>
	</div>
</div>
<!-- [ /#sideTower ] -->
</div>
<!-- [ /#container ] -->

<?php get_footer(); ?>