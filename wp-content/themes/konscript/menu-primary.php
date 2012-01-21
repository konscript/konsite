<?php
/**
 * Primary Menu Template
 *
 * Displays the Primary Menu if it has active menu items.
 * @link http://themehybrid.com/themes/hybrid/menus
 */

if ( has_nav_menu( 'primary' ) ) : ?>

	<div id="primary-menu" class="menu-container">
		<ul id="menu-social">
			<li><a href="#">Social</a></li>
		</ul>

		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => '', 'fallback_cb' => '' ) ); ?>
	</div><!-- #primary-menu .menu-container -->

<?php endif; ?>