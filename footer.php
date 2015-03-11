<?php
/** footer.php
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0.0	- 05.02.2012
 */

				tha_footer_before(); ?>
				<footer id="colophon" role="contentinfo" class="span12">
					<?php tha_footer_top(); ?>
					<div id="page-footer" class="well clearfix">
						<div id="site-generator"<?php echo has_nav_menu('footer-menu') ? ' class="footer-nav-menu"' : ''; ?>>
							<a	href="<?php echo esc_url( __( 'http://wordpress.org/', 'the-bootstrap' ) ); ?>"
								title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'the-bootstrap' ); ?>"
								target="_blank"
								rel="generator"><?php printf( _x( 'Somewhat shamefully powered by %s', 'WordPress', 'the-bootstrap' ), 'WordPress' ); ?></a>
						</div>
                        <a href="http://creativecommons.org/licenses/by-sa/4.0/"><img src="http://blog.urth.org/wp-content/plugins/creative-commons-configurator-1/media/cc/by-sa/4.0/80x15.png"></a>
                        Copyright &copy; <?php echo date('Y') ?> David Rolsky. Some rights reserved.
                        <br>
                        All content on this site is licensed under the<br><a href="http://creativecommons.org/licenses/by-sa/4.0/">Creative Commons Attribution-ShareAlike 4.0 International License</a> unless otherwise noted.
					</div><!-- #page-footer .well .clearfix -->
					<?php tha_footer_bottom(); ?>
				</footer><!-- #colophon -->
				<?php tha_footer_after(); ?>
			</div><!-- #page -->
		</div><!-- .container -->
	<!-- <?php printf( __( '%d queries. %s seconds.', 'the-bootstrap' ), get_num_queries(), timer_stop(0, 3) ); ?> -->
	<?php wp_footer(); ?>
	</body>
</html>
<?php


/* End of file footer.php */
/* Location: ./wp-content/themes/the-bootstrap/footer.php */