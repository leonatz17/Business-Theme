<?php get_header(); ?>

<main class="mx-auto max-w-7xl py-6 px-6 py-12">
    <div class="lg:flex-row flex flex-col gap-10">
        <section class="w-full lg:w-2/3">
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <article>
                <h1 class="mb-4 text-4xl font-bold">
                    <?php the_title(); ?>

                </h1>
                <div class="mb-6 text-sm text-gray-500">
                    By: <?php the_author();?>
                    <span class="mx-2">|</span>
                    <?php echo get_the_date();?>

                </div>
                <?php if(has_post_thumbnail()) : ?>
                    <div class="mb-8 overflow-hidden rounded-xl">
                        <?php the_post_thumbnail('large', ['class' => 'h-auto w-full object-cover']); ?>

                    </div>
                    <?php endif; ?>

                    <div class="prose max-w-none">
                        <?php the_content() ?>
                    </div>
                    <div class="mt-8 text-sm">
                        <strong>Categories</strong>
                        <?php the_category(',')?>
                    </div>
                    <?php the_tags(
                        '<div class="mt-3 text-sm"><strong>Tags:</strong>', ',','</div>'
                        );?>
            </article>
            <?php endwhile; ?>
            <?php endif; ?>

        </section>
        <?php get_sidebar() ?>
    </div>

</main>

<section class="max-auto max-w-7xl py-6 px-6 py-12">
    <?php
    $categories = get_the_category();
    if (!empty($categories)) :
        $category = $categories[0];

        $args = array(
            'cat' => $category->term_id,
            'posts_per_page' => 3,
            'post__not_in' => array(get_the_ID())
        );

        $related_posts = new WP_Query($args);
        if ($related_posts->have_posts()) :
    ?>
            <div class="mt-10">
                <h2 class="mb-4 text-2xl font-bold">Related Posts</h2>
                <div class="grid gap-6 md:grid-cols-3">
                    <?php while ($related_posts->have_posts()) : $related_posts->the_post(); ?>
                        <article class="rounded-lg border border-gray-200 p-4">
                            <a href="<?php the_permalink(); ?>" class="block text-lg font-semibold hover:text-blue-600">
                                <?php the_title(); ?>
                            </a>
                            <div class="mt-2 text-sm text-gray-500">
                                <?php echo get_the_date(); ?>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>
            </div>
    <?php
        endif;
        wp_reset_postdata();
    endif;
    ?>
</section>

<?php get_footer(); ?>