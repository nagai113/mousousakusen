<?php
$options = biz_vektor_get_theme_options();
if ($options['contact_link']) :?>
<ul>
<li class="sideBnr" id="sideContact"><a href="<?php echo $options['contact_link'] ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/bnr_contact.png" alt="お問い合わせ"></a></li>
</ul>
<?php endif; ?>
<?php if (is_front_page()) :
dynamic_sidebar( 'top-side-widget-area' );
endif; ?>
<?php dynamic_sidebar( 'primary-widget-area' ); ?>
<?php biz_vektor_snsBnrs(); ?>
<?php biz_vektor_fbLikeBoxSide(); ?>
<?php dynamic_sidebar( 'secondary-widget-area' ); ?>