<?php get_header(); ?>
  <section id="contents">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <article>
          <header>
            <h2>
              <span class="entry_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
            </h2>
            <span class="meta cal"><?php the_time('m.d.Y') ?></span>,
            <a class="meta cat"><?php the_category(','); ?></a>,
            <span class="meta author">by <?php the_author_posts_link(); ?></span>.
            <span class="meta"><?php edit_post_link(); ?></span> 
          </header>
          <?php the_content('more...'); ?>
          <footer>
            <span class="entry_tags"><?php echo get_the_tag_list('<p>Tags: ', ' | ', '</p>'); ?></span>
          </footer>
        </article>
      <?php endwhile; ?>
      <div class="nav-below">
        <span class="nav-previous"><?php previous_post_link('%link', '古い記事へ') ?></span>
        <span class="nav-next"><?php next_post_link('%link', '新しい記事へ') ?></span>
      </div><!-- /.nav-below -->
      <?php comments_template(); ?>
    <?php else : ?>
      <h2>Not Found</h2>
    <?php endif ?>
  </section><!-- /#contents -->
<?php get_sidebar(); ?>
<br class="clearfix" />
<?php get_footer(); ?>
