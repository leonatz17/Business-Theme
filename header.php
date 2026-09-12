<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Website</title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 shadow-lg">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5">
            <a href="<?php home_url() ?>"><?php bloginfo('name') ?></a>

            <nav class="">
                <div>
                    <?php if(has_custom_logo()){
                        the_custom_logo();
                    }
                    ?>
                </div>
                <?php
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'flex space-x-4 hover:cursor-pointer transition'
                ]);
                ?>
            </nav>

        </div>
    </header>