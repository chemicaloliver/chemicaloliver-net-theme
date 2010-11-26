<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

get_header(); ?>

<div id="main" role="main">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

      <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
        <header>
            <time datetime="<?php the_time('Y-m-d')?>"><?php the_time('F jS, Y') ?></time>
          <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        </header>
        <?php the_content('Read more &#9660;'); ?>
      </article>

    <?php endwhile; ?>

    <nav>
      <div><?php next_posts_link('&#9664; Older Entries') ?></div>
      <div><?php previous_posts_link('Newer Entries &#9654;') ?></div>
    </nav>

  <?php else : ?>

    <h2>Not Found</h2>
    <p>Sorry, but you are looking for something that isn't here.</p>
    <?php get_search_form(); ?>

  <?php endif; ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>


