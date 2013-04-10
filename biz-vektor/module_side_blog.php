<div class="localSection sideWidget">
<div class="localNaviBox">
<h3 class="localHead">カテゴリー</h3>
<ul class="localNavi">
<?php wp_list_categories('title_li=&orderby=order'); ?> 
</ul>
</div>
</div>
<?php dynamic_sidebar( 'blog-first-widget-area' ); ?>
<?php /*
<div class="localSection sideWidget">
<div class="localNaviBox">
<h3 class="localHead">アーカイブ</h3>
<ul class="localNavi">
<?php wp_get_archives('type=monthly'); ?>
</ul>
</div>
</div>
*/ ?>