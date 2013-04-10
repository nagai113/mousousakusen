<?php get_header(); ?>

<!-- [ #container ] -->
<div id="container" class="innerBox">
	<!-- [ #content ] -->
	<div id="content">
	<h2><?php single_cat_title(); ?></h2>
	<?php
		$category_description = category_description();
		if ( ! empty( $category_description ) )
			echo '<div class="archive-meta">' . $category_description . '</div>'; ?>
	<div class="infoList">
	<?php
	$options = biz_vektor_get_theme_options();
	if ( $options['listInfoArchive'] == 'listType_set' ) { ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part('module_loop_info2'); ?>
		<?php endwhile ?>
	<?php } else { ?>
		<ul class="entryList">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part('module_loop_info'); ?>
		<?php endwhile; ?>
		</ul>
	<?php } ?>
	</div><!-- [ /.infoList ] -->
	<?php pagination($additional_loop->max_num_pages); ?>
	</div><!-- #content -->

<!-- [ #sideTower ] -->
<div id="sideTower">
	<?php get_template_part('module_side_info'); ?>
	<div class="localSection">
	<?php get_sidebar(); ?>
	</div>
</div>
<!-- [ /#sideTower ] -->
</div>
<!-- [ /#container ] -->

<?php get_footer(); ?>