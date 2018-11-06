<?php
/**
 * The template for displaying the footer
 */

global $corralina_options;

$opts = $corralina_options;
$logo = $opts['corralina-footer-logo']['url'];
$content = $opts['footer-content'];
$email = $opts['corralina-email'];
$phone = $opts['corralina-phone'];
$address = $opts['corralina-address'];
?>


	<footer>
		<div class="container">
			<div class="column-f">
				<?php if ($logo): ?>
					<img src="<?= esc_url($logo); ?>" alt="" />
				<?php endif; ?>

				<?php if ($content) { echo $content; } ?>

				<p>© 2014 All rights reserved</p>
			</div>
			<div class="column-s">
				<h3>Support</h3>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'footerfirst',
						'menu_id'        => 'footer-menu-1',
						'menu_class' => '',
						'container'       => 'ul', 
					) );
				?>
			</div>
			<div class="column-t">
				<h3>Users information</h3>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'footersecond',
						'menu_id'        => 'footer-menu-2',
						'menu_class' => '',
						'container'       => 'ul', 
					) );
				?>
			</div>
			<div class="column-l">
				<h3>Contacts</h3>
				<ul>
					<?php if ($address): ?>
						<li><a href="#"><i class="fa fa-globe"></i><?= esc_attr($address); ?></a></li>
					<?php endif; ?>

					<?php if ($phone): ?>
						<li><a href="#"><i class="fa fa-phone"></i><?= esc_attr($phone); ?></a></li>
					<?php endif; ?>

					<?php if ($email): ?>
						<li><a href="#"><i class="fa fa-envelope-o"></i><?= esc_attr($email); ?></a></li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>
</body>
</html>
