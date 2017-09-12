<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package human_behavior
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.1/css/bulma.min.css">
    <link rel="stylesheet" href="<?php wp_enqueue_style(); ?>/css/main.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Cardo:400,700|Karla" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'human-behavior' ); ?></a>

	<header id="masthead" class="site-header">
        <nav class="level is-mobile">
            <!-- left -->
            <div class="level-left">
                <div class="level-item">
                    <a id="hb-nav-logo" class="is-size-7" href="http://localhost:8888/human-behavior">HUMAN BEHAVIOR</a>
                </div>
            </div>

            <!-- right -->
            <div class="level-right">
                <p class="level-item">
                    <a id="hb-nav-menu" class="is-size-7" href="http://localhost:8888/human-behavior/see">SEE</a>
                </p>
            </div>
        </nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
