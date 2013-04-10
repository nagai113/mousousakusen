<?php
/**
 * The main template file.
 */
get_header(); ?>
<!-- [ #container ] -->
<div id="container" class="innerBox">
	<!-- [ #content ] -->
	<div id="content">

<?php if ( have_posts()) : the_post(); ?>
	<?php
	$topFreeContent = NULL;
	$topFreeContent = get_the_content();
	if ($topFreeContent) { ?>
		<div id="topFreeArea">
		<?php
		$options = biz_vektor_get_theme_options();
		if ($options['topEntryTitleDisplay'] == true) :?>
			<?php if (get_post_type() === 'page') { ?>
			<h2><?php the_title(); ?></h2>
			<?php } else { ?>
			<h2 style="margin-bottom:4px;"><?php the_title(); ?></h2>
			<p class="entry-meta">
			<span class="infoDate">投稿日 : <?php the_time('Y'); ?>年<?php the_time('m'); ?>月<?php the_time('d'); ?>日 | </span>
			<span class="infoCate">カテゴリー : <?php the_category(',') ?></span>
			</p>
			<?php } ?>
		<?php endif; ?>	
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-link">' . 'Pages:', 'after' => '</div>' ) ); ?>
		</div>
	<?php } ?>	
<?php if ( is_user_logged_in() == TRUE ) {
global $user_level;
get_currentuserinfo(); ?>
	<div class="adminEdit">
		<span class="linkBtn linkBtnS linkBtnAdmin" style="float:left;margin-right:10px;"><?php edit_post_link( '↑ 編集' ); ?></span>
		<?php if (10 <= $user_level) { ?>
		<span style="float:left;margin-right:10px;"><a href="<?php echo site_url(); ?>/wp-admin/themes.php?page=theme_options#topPage" class="btn btnS btnAdmin">↑ タイトルの表示設定</a></span>
		<span><a href="<?php echo site_url(); ?>/wp-admin/options-reading.php" class="btn btnS btnAdmin">↑ 表示するページを変更</a></span>
		<?php } ?>
	</div>
<?php } ?>
<?php endif; ?>

<?php get_template_part('module_topPR'); ?>

<?php if ( function_exists( 'biz_vektor_topSpecial' ) ): biz_vektor_topSpecial(); endif; ?>

<?php $loop = new WP_Query( array( 'post_type' => 'info', 'posts_per_page' => 5 ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post();
$postCount = ++$postCount;
endwhile;
if ($postCount) :
?>
<div id="topInfo" class="infoList">
<h2>お知らせ</h2>
<div class="rssBtn"><a href="<?php echo home_url(); ?>/feed/?post_type=info" id="infoRss" target="_blank">RSS</a></div>
<?php
$options = biz_vektor_get_theme_options();
if ( $options['listInfoTop'] == 'listType_set' ) { ?>
	<?php while ( $loop->have_posts() ) : $loop->the_post();?>
		<?php get_template_part('module_loop_info2'); ?>
	<?php endwhile ?>
<?php } else { ?>
	<ul class="entryList">
	<?php while ( $loop->have_posts() ) : $loop->the_post();?>
		<?php get_template_part('module_loop_info'); ?>
	<?php endwhile; ?>
	</ul>
<?php } ?>
</div><!-- [ /#topInfo ] -->
<?php endif;?>

<?php query_posts("showposts=5"); ?>
<?php if(have_posts()): ?>
<div id="topBlog" class="infoList">
<h2><?php echo esc_html(bizVektorOptions('postLabelName')); ?></h2>
<div class="rssBtn"><a href="<?php echo home_url(); ?>/feed/?post_type=post" id="blogRss" target="_blank">RSS</a></div>
<?php
$options = biz_vektor_get_theme_options();
if ( $options['listBlogTop'] == 'listType_set' ) {
	get_template_part('module_loop_blog2');
} else {
	get_template_part('module_loop_blog');
} ?>
</div><!-- [ /#topBlog ] -->
<?php endif;?>
<?php wp_reset_query(); ?>

<?php biz_vektor_blogList() // 外部ブログ新着インポート ?>

<?php biz_vektor_topContentsBottom(); ?>

<?php biz_vektor_fbLikeBoxFront(); ?>
<?php biz_vektor_snsBtns(); ?>
<?php biz_vektor_fbComments(); ?>


	</div>
	<!-- [ /#content ] -->
	
	<!-- [ #sideTower ] -->
	<div id="sideTower">
	<?php get_sidebar(); ?>
	</div>
	<!-- [ /#sideTower ] -->
</div>
<!-- [ /#container ] -->

<?php get_footer(); ?>