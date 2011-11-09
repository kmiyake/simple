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
            <section class="entry_info">
              <span class="cal"><?php the_time('m.d.Y') ?></span>,
              <a class="cat"><?php the_category(','); ?></a>,
              <span>by <?php the_author_posts_link(); ?></span>.
            </section>
            <section class="entry_body">
              <?php the_content('more...'); ?>
            </section>
            <section class="entry_tags">
              <?php echo get_the_tag_list('<p>Tags: ', ' | ', '</p>'); ?>
            </section>
          </article>
        <?php endwhile; ?>
        <section class="nav-below">
          <span class="nav-previous"><?php previous_post_link('%link', '古い記事へ') ?></span>
          <span class="nav-next"><?php next_post_link('%link', '新しい記事へ') ?></span>
        </section><!-- /.nav-below -->
        <?php comments_template(); ?>
      <?php else : ?>
        <h2>Not Found</h2>
      <?php endif ?>
    </section><!-- /#contents -->
<?php get_sidebar(); ?>
<br class="clearfix" />
<?php get_footer(); ?>
