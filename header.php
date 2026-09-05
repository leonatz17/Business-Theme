<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Website</title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="border-b bg-white"></header>
        <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5">
            <a href="<?php home_url() ?>"><?php bloginfo('name') ?></a>

            <nav>
                <?php
                 wp_nav_menu([
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu-class' => 'flex space-x-4'
                ]);
                ?>
            </nav>

        </div>
    
