<?php
/**
 * element for navigation and offcanvas navigation
 */
$nav = wp_nav_menu(array(
	'theme_location' => 'primary',
	'menu_class'     => 'uk-navbar-nav',
	'depth'          => 2,
	'walker'         => new WordpressUikitMenuWalker('navbar'),
	'echo'           => false,
	'fallback_cb'    => false
));
$nav_offcanvas = wp_nav_menu(array(
	'theme_location' => 'primary',
	'menu_class'     => 'uk-navbar-nav',
	'depth'          => 2,
	'walker'         => new WordpressUikitMenuWalker('navbar'),
	'echo'           => false,
	'fallback_cb'    => false
));


?>
<?php if ($nav) : ?>
    <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
        <nav class="uk-navbar-container " uk-navbar="dropbar: true;">
		    <?php echo $nav ?>
        </nav>
    </div>
<?php endif; ?>