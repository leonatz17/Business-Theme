<?php get_header(); ?>

<main class="max-auto max-w-7xl py-6 px-6 py-12">
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

<?php get_footer(); ?>