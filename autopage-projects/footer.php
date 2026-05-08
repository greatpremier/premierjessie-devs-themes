	<footer id="colophon" class="site-footer">
		<div class="footer-content">
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'autopage-projects' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'autopage-projects' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'autopage-projects' ), 'Autopage Projects', '<a href="https://github.com/greatpremier">Premier Jessie Devs</a>' );
					?>
			</div><!-- .site-info -->

			<div class="footer-links">
				<a href="#home"><?php esc_html_e( 'Home', 'autopage-projects' ); ?></a>
				<a href="#services"><?php esc_html_e( 'Services', 'autopage-projects' ); ?></a>
				<a href="#portfolio"><?php esc_html_e( 'Portfolio', 'autopage-projects' ); ?></a>
				<a href="#about"><?php esc_html_e( 'About', 'autopage-projects' ); ?></a>
				<a href="#contact"><?php esc_html_e( 'Contact', 'autopage-projects' ); ?></a>
			</div>
		</div><!-- .footer-content -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
</html>