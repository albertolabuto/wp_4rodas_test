<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="site-wrapper">
		<div class="content-wrapper">
			<main>
				<div class="container">
					<?php get_header(); ?>
					<?php get_template_part('destaques'); ?>
					<?php get_template_part('chamadas'); ?>
				</div>
			</main>
		</div>
	</div>
	<?php get_footer(); ?>
	<?php wp_footer(); ?>
</body>
</html>