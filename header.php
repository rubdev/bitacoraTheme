<?php require_once ('functions.php'); ?>
<!doctype html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>"/>
    <link rel="pinback" href="<?php bloginfo( 'pinback_url' ) ?>"/>
    <?php wp_head() ?>
</head>
<body <?php body_class() ?>>
    <div class="container"><!-- navbar container init -->
        <?php include('includes/navbar.php'); ?>
    </div><!-- navbar container end -->
    <div class="container"> <!-- main container init -->
    