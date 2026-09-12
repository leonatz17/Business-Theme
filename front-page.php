<?php get_header(); ?>
<main>
    <section class="bg-gray-100 px-6 py-24 text-center" style="background-image:url('<?php echo get_header_image(); ?>');background-size: cover;background-position:center;">
        <h1 class="mb-4 text-5xl font-bold text-white">
            <?php the_title(); ?>
        </h1>
        <p class="mx-auto max-w-2xl text-lg text-white">
            <?php the_content(); ?>
        </p>

    </section>
</main>

<section>
    <?php
    $args = array(
        'posts_per_page' => 5,
        'oderby' => 'date',
        'order' => 'DESC'
    );

    $recent_post = new WP_Query($args);
    ?>

    <div class="flex justify-center h-full w-full mt-30">
        <div class="text-center    ">
            <h1 class="text-3xl font-bold text-shadow-lg">Latest post</h1>
        </div>
    </div>

    <?php if ($recent_post->have_posts()):
        while ($recent_post->have_posts()):
            $recent_post->the_post(); ?>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-3xl mx-auto">
                    <!-- Blog post header -->
                    <div class="py-8">
                        <h1 class="text-3xl font-bold mb-2"> <?php the_title(); ?></h1>
                        <p class="text-gray-500 text-sm">Author: <?php the_author() ?> </p>
                        <p class="text-gray-500 text-sm">Published on: <?php echo get_the_date('F j, Y'); ?></p>
                    </div>

                    <!-- Featured image -->
                   
                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'w-full h-70 mb-8']); ?>
                    <h1 class="font-bold text-2xl mb-2"></h1>
                    <!-- Blog post content -->
                    <div class="prose prose-sm sm:prose lg:prose-lg xl:prose-xl mx-auto">
                        <p class="my-3">
                            <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
                        </p>
                        <a href="<?php the_permalink(); ?> "
                            class="text-white font-semibold bg-blue-600 hover:bg-blue-800 p-1 my-5 rounded mt-10">Read
                            More...</a>
                    </div>
                </div>
            </div>

            <?php
        endwhile;
        wp_reset_postdata();
    endif;
    ?>

</section>

<section>
    <?php
    $args = array(
        'posts_per_page' => 3,
        'category_name' => 'featured post',
        'oderby' => 'date',
        'order' => 'DESC'
    );

    $featured_post = new WP_Query($args); ?>

    <div class="flex justify-center h-full w-full mt-30">
        <div class="text-center    ">
            <h1 class="text-3xl font-bold text-shadow-lg">Feautured Post</h1>
        </div>
    </div>

    <?php if ($featured_post->have_posts()):
        while ($featured_post->have_posts()):
            $featured_post->the_post(); ?>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-3xl mx-auto">
                    <!-- Blog post header -->
                    <div class="py-8">
                        <h1 class="text-3xl font-bold mb-2"> <?php the_title(); ?></h1>
                        <p class="text-gray-500 text-sm">Author: <?php the_author() ?> </p>
                        <p class="text-gray-500 text-sm">Published on: <?php echo get_the_date('F j, Y'); ?></p>
                    </div>

                    <!-- Featured image -->
                    
                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'w-full h- mb-8']); ?>
                    <h1 class="font-bold text-2xl mb-2"></h1>
                    <!-- Blog post content -->
                    <div class="prose prose-sm sm:prose lg:prose-lg xl:prose-xl mx-auto">
                        <p class="my-3">
                            <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
                        </p>
                        <a href="<?php the_permalink(); ?> "
                            class="text-white font-semibold bg-blue-600 hover:bg-blue-800 p-1 my-5 rounded mt-10">Read
                            More...</a>
                    </div>
                </div>
            </div>

            <?php
        endwhile;
        wp_reset_postdata();
    endif;
    ?>


</section>

<?php get_footer(); ?>