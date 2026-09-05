<?php get_header(); ?>
<main class="mx-auto max-w-7xl px-6 py-12">
    <div class="flex flex-col gap-10 lg:flex-row">
        <section class="w-full lg:w-2/3">
            <h1 class="mb-8 text-4xl font-bold">blog</h1>

            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <article class="mb-8 border-b pb-8">
                <h2 class="mb-3 text-2xl font-bold ">
                    <a href="<?php the_permalink(); ?>" class="hover:underline">
                        <?php the_title(); ?>
                    </a>
                </h2>
                <p class="mb-3 text-sm text-gray-500">
                    <?php echo get_the_date('F j, Y') ?>

                </p>

            </article>
            <?php endwhile; ?>
            <?php else : ?>
                <p>
                    No Post Found.
                </p>
            <?php endif; ?>

        </section>
            <?php get_sidebar(); ?>
    </div>

</main>



<?php get_footer(); ?>