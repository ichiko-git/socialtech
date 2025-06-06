<?php get_header(); ?>
    <main>
      <article>
        <section id="mission-main">
          <div class="news-main-inner">
            <div id="mission-title">
              <?php
              $cat = get_the_category();
              $cat_name = $cat[0]->cat_name;
              ?>
              <h1><?php echo $cat_name; ?><br /><span>ニュース</span></h1>
              <p>TOP > <?php echo $cat_name; ?></p>
            </div>
          </div>
        </section>
        <section id="news-contents">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="news-content">
              <p><?php the_date(); ?></p>
                <a href="<?php the_permalink(); ?>">
                  <h2 class="index-h2 news-h2"><?php the_title(); ?></h2>
                </a>
              <p><?php the_excerpt(); ?></p>
            </div>
            <?php endwhile; ?>
          <?php endif; ?>
          <!-- ページネーション -->
          <div class="news-pagination">
            <?php
            echo paginate_links(array(
              'total' => $wp_query->max_num_pages,
              'prev_text' => '&lt;&lt;前へ',
              'next_text' => '次へ&gt;&gt;',
            ));
            ?>
          </div>
        </section>
      </article>
    </main>
<?php get_footer(); ?>
