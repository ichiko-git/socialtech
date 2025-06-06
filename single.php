<?php
/*
Template Name: ニュース投稿ページ
Template Post Type: post
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
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
        <section id="news-content">
          <h2 class="index-h2"><?php the_title(); ?></h2>
          <p><?php the_date(); ?></p>
          <div class="news-content-inner">
            <?php the_content(); ?>
          </div>
        </section>
        <section id="news-back">
          <a href="<?php echo home_url(); ?>/category/news">一覧に戻る</a>
        </section>
      </article>
    </main>
  <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
