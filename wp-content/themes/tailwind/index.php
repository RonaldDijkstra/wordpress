<?php get_header(); ?>
<main>
  <h1 class="text-4xl">
    <?= the_title(); ?>
  </h1>
  <p>
    <?= the_content(); ?>
  </p>
</main>
<?php get_footer(); ?>