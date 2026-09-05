<?php get_header(); ?>
<main class="mx-auto max-w-7xl px-6 py-12">
    <div class="flex flex-col gap-20 lg:flex-row">
        <section class="w-full lg:w-2/3">
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <article>
                <h1 class="mb-6 text-4xl font-bold"><?php the_title(); ?></h1>
                <div class="prose max-w-none">
                    <?php the_content(); ?>

                </div>
            </article>
            <?php endwhile; ?>
            <?php endif; ?>
            
        </section>
        
        <?php get_sidebar(); ?>
    </div>

</main>

<?php get_footer(); ?>