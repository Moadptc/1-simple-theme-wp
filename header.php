<!doctype html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo('charset'); ?>" >
	<meta name="viewport"
	      content="width=device-width, user-scalable=no,
          initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php bloginfo('name'); ?></title>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/uikit.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/moad.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/main.css">

	<?php wp_head(); ?>
</head>

<body>
