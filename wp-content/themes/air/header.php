<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo( 'charset' ); ?>">

    <title>
        <?= wp_title() ?? get_bloginfo('name') ?>
    </title>
    <meta name="description" content="<?= get_bloginfo('description') ?>">
    
    <?php wp_head(); ?>
    
</head>
<body <?php body_class('air-theme'); ?>>
