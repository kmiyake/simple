<?php get_header(); ?>
    <section id="contents">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <article>
            <header>
              <h2>
                <a href="<?php the_permalink(); ?>" class="entry_title"><?php the_title(); ?></a>
              </h2>
            </header>
            <section class="entry_body">
              <?php the_content('more...'); ?>
            </section>
            <section class="entry_tags">
              <?php echo get_the_tag_list('<p>Tags: ', ' | ', '</p>'); ?>
            </section>
          </article>
        <?php endwhile; ?>
        <?php comments_template(); ?>
      <?php else : ?>
        <h2>Not Found</h2>
      <?php endif ?>
    </section><!-- /#contents -->
<?php get_sidebar(); ?>
<br class="clearfix" />
<?php get_footer(); ?>
