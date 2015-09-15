<?php if ( 'on' == et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

	<span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif;

if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>

			<footer id="main-footer">

				<?php get_sidebar( 'footer' ); ?>


		<?php
			if ( has_nav_menu( 'footer-menu' ) ) : ?>

				<div id="et-footer-nav">
					<div class="container">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'footer-menu',
								'depth'          => '1',
								'menu_class'     => 'bottom-nav',
								'container'      => '',
								'fallback_cb'    => '',
							) );
						?>
					</div>
				</div> <!-- #et-footer-nav -->

			<?php endif; ?>

				<div id="footer-bottom">
<img src="http://farhatguitar.com/wp-content/uploads/2015/06/logo-negro.png" />
					<div class="container clearfix">

						<p id="footer-info">
	<span id="about-me-footer">
		<a href="http://farhatguitar.com/about-me" title="About me">About me</a>
	</span>
	|
	<span id="sadaic-footer">
		<a href="http://www.sadaic.org.ar/" target="_blank" title="SADAIC">SADAIC</a>
	</span>
	|
	<span id="sadaic-footer">
		<a onClick="javascript:window.open('mailto:contact@farhatguitar.com', 'mail');event.preventDefault()" href="mailto:contact@farhatguitar.com">contact@farhatguitar.com</a>
	</span>
	|
	<span id="copyright-year-footer">
		 &copy; 2015
	</span>
	<span id="copyright-text-footer">
		 Copyright Terms & Agreements. Guitar Lessons
	</span>
	
	<?php //printf( __( 'Designed by %1$s', 'Divi' ), '<a href="http://www.latorregabriel.com" target="_blank" title="latorregabriel.com">Gabriel La Torre</a>'); ?>
</p>
					</div>	<!-- .container -->
				</div>
			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

	</div> <!-- #page-container -->
	<?php wp_footer(); ?>
	<script src="<?php bloginfo( "wpurl" ); ?>/wp-content/themes/farhat-gutiar-divi-child/flowplayer-5.5.2/flowplayer.min.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo( "wpurl" ); ?>/wp-content/themes/farhat-gutiar-divi-child/flowplayer-5.5.2/skin/functional.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo( "wpurl" ); ?>/wp-content/themes/farhat-gutiar-divi-child/flowplayer-5.5.2/skin/flowplayer-buttons.css">
</body>
</html>
