<?php
/**
 * The template for displaying the footer.
 */
?>
</div><!-- #main -->

<!-- [ #footerSection ] -->
<div id="footerSection">
	<div id="pagetop">
	<div id="pagetopInner" class="innerBox">
	<a href="#wrap">PAGETOP</a>
	</div>
	</div>
	
	<div id="footMenu">
	<div id="footMenuInner" class="innerBox">
	<?php wp_nav_menu( array(
		'theme_location' => 'FooterNavi',
		'fallback_cb' => ''
	) ); ?>
	</div>
	</div>
	
	<!-- [ #footer ] -->
	<div id="footer">
	<!-- [ #footerInner ] -->
	<div id="footerInner" class="innerBox">
		<dl id="footerOutline">
		<dt><?php biz_vektor_footerSiteName(); ?></dt>
		<dd>
		<?php biz_vektor_print_footContact(); ?>
		</dd>
		</dl>
		<!-- [ #footerSiteMap ] -->
		<div id="footerSiteMap">
		<?php wp_nav_menu(
		array(
			'theme_location' => 'FooterSiteMap',
			'fallback_cb' => ''
		) ); ?>
		</div>
		<!-- [ /#footerSiteMap ] -->
	</div>
	<!-- [ /#footerInner ] -->
	</div>
	<!-- [ /#footer ] -->
	
	<!-- [ #siteBottom ] -->
	<div id="siteBottom">
	<div id="siteBottomInner" class="innerBox">
	<?php biz_vektor_footerCopyRight(); ?>
	</div>
	</div>
	<!-- [ /#siteBottom ] -->
</div>
<!-- [ /#footerSection ] -->
</div>
<!-- [ /#wrap ] -->

<?php wp_footer();?>

<!-- GooglePlusOne -->
<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
  {lang: 'ja'}
</script>
<!-- /GooglePlusOne -->
</body>
</html>