<?php get_header(); ?>

<!-- [ #container ] -->
<div id="container" class="innerBox">
	<!-- [ #content ] -->
	<div id="content">
	<h2><?php single_tag_title(); ?></h2>
	<?php
		$category_description = category_description();
		if ( ! empty( $category_description ) )
			echo '<div class="archive-meta">' . $category_description . '</div>'; ?>
	<div class="infoList">
	<?php
	$options = biz_vektor_get_theme_options();
	if ( $options['listBlogArchive'] == 'listType_set' ) {
		get_template_part('module_loop_blog2');
	} else {
		get_template_part('module_loop_blog');
	} ?>
	</div>

	</div><!-- #content -->

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