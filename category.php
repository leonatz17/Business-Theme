<?php get_header(); ?>
<main class="mx-auto max-w-7xl px-6 py-12">
    <div class="flex flex-col gap-10 lg:flex-row">
        <section class="w-full lg:w-2/3">
            <header class="mb-8">
                <p class="mb-2 text-sm font-semibold uppercase">
                    Category
                </p>
                <h1 class="text-4xl font-bold">
                    <?php single_cat_title() ?>
                </h1>
                <?php if(category_description()): ?>
                    <div class="mt-3 text-gray-600">
                     <?php echo category_description(); ?>
                    </div>
                    <?php endif; ?>
            </header>
                    <?php if(have_posts()) : ?>
                        <?php while(have_posts()) : the_post(); ?>
                        <article class="mb-8 border-b pb-8">
                            <h2 class="mb-3 text-2xl font-bold">
                                <a href="<?php the_permalink(); ?>" class="hover:underline">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            <p class="mb-3 text-sm text-gray-500">
                                <?php echo get_the_date(); ?>
                            </p>
                            <div class="text-gray-700">
                                <?php the_excerpt(); ?>

                            </div>

                        </article>
                        <?php endwhile; ?>
                        <?php else: ?>
                            <p>
                                No post found in this category
                            </p>
                            <?php endif; ?>

        </section>
        <?php get_sidebar(); ?>

    </div>

</main>
<?php get_footer(); ?>