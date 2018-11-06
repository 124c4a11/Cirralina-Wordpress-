<?php
/**
 * The header for our theme
 */

global $corralina_options;

$opts = $corralina_options;
$logo = $opts['corralina-logo']['url'];
$phone = $opts['corralina-phone'];
$email = $opts['corralina-email'];
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<section>
		<header class="inner">
			<div class="container">
				<div class="line-top">
					<div class="wither-w">
						<span class="cloud"><img src="<?= get_template_directory_uri(); ?>/images/cloud.png" alt="" /></span>
						<span>18°c</span>
						<div class="city-wrap"><a href="javascript:void(0)" class="w-select">London <i class="fa fa-angle-down"></i></a>
							<div class="city-drop">
							<a href="#">Paris</a>
							<a href="#">Kopengagen</a>
							<a href="#">Berlin</a>
							</div>
						</div>
					</div>
					<div class="logo">
						<?php if ($logo): ?>
							<a href="<?= esc_url(home_url('/')); ?>">
								<img src="<?= esc_url($logo); ?>" alt="" />
							</a>
						<? endif; ?>
					</div>
					<div class="contacts">
						<?php if ($phone): ?>
							<span><i class="fa fa-mobile"></i><?= esc_attr($phone); ?></span>
						<?php endif; ?>

						<?php if ($logo): ?>
							<span><i class="fa fa-envelope"></i><?= esc_attr($email); ?></span>
						<?php endif; ?>
					</div>
				</div>
				<nav class="main-nav in">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'menu_class' => 'nav-menu',
							'container'       => 'ul', 
						) );
					?>

					<div class="search">
						<form role="search" method="get" class="search-form" action="<?= esc_url(home_url('/')); ?>">
							<input type="text" name="s" id="search-input" placeholder="Keywords"/>
							<button type="submit" class="btn-search"><i class="fa fa-search"></i></button>
						</form>
					</div>
				</nav>
			</div>
		</header>
	</section>