<?php if ( is_attachment() ) { ?>
<h1 id="pageTit"><?php the_title(); ?></h1>
<?php /* ▼カテゴリーページ || 投稿記事 || アーカイブ || 投稿のトップページ */ ?>
<?php } else if (is_category() || is_tax() || is_single() || is_archive() || is_home()) { ?>
	<?php 
	// ポストタイプを取得
	$postType = get_post_type();
	// 標準の投稿タイプ(post)の場合は、管理画面で設定した名前を取得
	if ( $postType == 'post') {
		$postTypeName = esc_html(bizVektorOptions('postLabelName'));
	// 標準の投稿タイプでない場合は、カスタム投稿タイプ名を取得
	} else {
		$postTypeName = esc_html(get_post_type_object(get_post_type())->labels->name);
	} ?>
	<div id="pageTit"><?php echo $postTypeName; ?></div>
<?php /* ▼単一ページ */ ?>
<?php } else if (is_page()) { ?>
<h1 id="pageTit"><?php the_title(); ?> <?php edit_post_link('編集', '<span class="edit-link">（', '）' ); ?></h1>
<?php /* ▼タグアーカイブ */ ?>
<?php } else if (is_tag()) { ?>
<h1 id="pageTit">タグ別アーカイブ：<?php single_tag_title();?></h1>
<?php /* ▼検索結果 */ ?>
<?php } else if (is_search()) { ?>
<h1 id="pageTit">『<?php echo get_search_query(); ?>』の検索結果</h1>
<?php /* ▼それ以外 */ ?>
<?php } else { ?>
<h1 id="pageTit">ページが見つかりません</h1>
<?php /* ▲それ以外 */ ?>
<?php } ?>