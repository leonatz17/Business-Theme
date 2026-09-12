<?php get_header(); ?>
<main class="mx-auto max-w-7xl px-6 py-12">
    <div class="flex flex-col gap-10 lg:flex-row">
        <section class="w-full lg:w-2/3">
            <header class="mb-8">
                <h1 class="text-4xl font-bold">
                        <?php the_archive_title(); ?> this is archive
                </h1>
                <div class="mt-3 text-gray-600">
                    <?php the_archive_description(); ?>
                </div>
            </header>
                <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post() ?>
                    <article class="mb-8 border-b pb-8">
                        <?php if(has_post_thumbnail()) ?>
                        <a href="<?php the_permalink();?>">
                            <?php the_post_thumbnail(
                                'large' , [
                                    'class' => 'mb-4 h-auto w-full rounded-lg object-cover'
                                ]
                            ); ?>
                        </a>
                        
                        <h2 class="mb-3 text-2xl font-bold">
                            <a href="<?php the_permalink(); ?>" class="hover:underline">
                                <?php the_title() ?>
                            </a>
                        </h2>

                        <p class="mb-3 text-sm text-gray-500">
                            <?php echo get_the_date(); ?>

                        </p>

                    </article>

                    <?php endwhile; ?>
                    <?php else: ?>
                        <p>No post found.</p>
                        <?php endif; ?>
        </section>
        <?php get_sidebar(); ?>
    </div>

</main>

<?php get_footer(); ?>