<?php get_header(); ?>
<main class="mx-auto max-w-7xl px-6 py-12">
    <div class="mx-auto text-2xl text-center">
        <p class="mb-4 text-6xl font-bold">
            404.
        </p>
        <h1 class="mb-4 text-6xl font-bold">
            Page not found.
        </h1>
        <p class="mb-8 text-gray-600">
            Sorry,the page you're looking for doesn't exist or may have been moved.
        </p>
        <a href="<?php echo home_url(); ?>" class="inline-block rounded-lg bg-black px-6 py-3 text-white hover:bg-black/20 hover:text-black"l >
            Back to Home
        </a>

    </div>

</main>
<?php get_footer(); ?>