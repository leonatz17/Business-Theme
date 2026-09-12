<footer
    class="mt-12  px-6 py-8 text-center text-white bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 shadow-lg">
    
    <div class="grid grid-cols-1 md:grid-cols gap-8">
        <div>
            <h4 class="text-lg font-bold mb-4">
                Rewards
            </h4>
            <?php wp_nav_menu([
                'theme_loaction' => 'rewards',
                'menu-class' => 'space-y-2 text-[(rgba(0,0,0,.67)]' ,
                'container' => false,
                'fallback_cb' => false

            ]); ?>
        </div>

    </div>
   <p>
        &copy;<?php echo date('Y') ?>
        <?php bloginfo('name') ?>
    </p>

</footer>
<?php wp_footer(); ?>

</body>

</html>