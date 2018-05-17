<?php mh_before_footer(); ?>

<!-- custom footer - jeevon -->
<footer class="mh-footer" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
	<div class="mh-container mh-container-inner mh-footer-widgets mh-row mh-clearfix">
		<!-- <?php mh_magazine_lite_footer_widgets(); ?> -->
		<div class="mh-col-1-4 mh-home-wide  mh-footer-area mh-footer-1">
				<div id="mh_footer_about-2" class="mh-footer-widget mh_footer_about">
					<div class="mh-author-bio-widget">
						<h4 class="mh-author-bio-title">About Us</h4>
						<figure class="mh-author-bio-avatar mh-author-bio-image-frame">
							<a href="<?php echo ''; ?>"> 
								<img src="<?php echo get_template_directory_uri() . '/images/cryptoville-footer.jfif'; ?>" alt="MH Themes" class="avatar avatar-120 wp-user-avatar wp-user-avatar-120 alignnone photo" width="120" height="120"> </a>
						</figure>
						<div class="mh-author-bio-text">TheCryptoVille is a news website owned by Ibinex covering news regarding cryptocurrency, the blockchain, and decentralized applications.</div>
					</div>
				</div>
			</div>

		<div class="mh-col-3-4 mh-home-wide mh-footer-area mh-footer-2">
			<?php wp_nav_menu(array('theme_location' => 'main_nav')); ?>
		</div>
	</div>
</footer>



<div class="mh-copyright-wrap">
	<div class="mh-container mh-container-inner mh-clearfix">
		<p class="mh-copyright"><?php printf(esc_html__('Copyright &copy; %1$s | %2$s', 'mh-magazine-lite'), date("Y"), '<a href="' . esc_url('https://www.ibinex.com/') . '" rel="nofollow">An Ibinex Company</a>'); ?></p>
	</div>
</div>
<?php mh_after_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>