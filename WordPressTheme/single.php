<?php get_header(); ?>
<div class="l-inner">
  <div class="p-archive-cards">

    <!-- ループの開始 -->

    <?php if (have_posts()): ?>
    <?php while (have_posts()) : the_post(); ?>

    <a href="<?php the_permalink(); ?>" class="">
      <figure class="">

        <?php
                if(has_post_thumbnail()):
                  the_post_thumbnail('medium_thumbnail');
                else:?>

        <!-- 画像がなかった時の表示 -->
        <img src="<?php echo esc_url(get_theme_file_uri('/')); ?>" alt="">
        <?php endif;?>
      </figure>
      <p class=""><?php echo mb_substr($post-> post_title, 0, 38).''; ?>
      </p>
    </a>
    <?php endwhile; ?>
    <?php else: ?>
    <?php endif;?>
  </div>
</div>


<?php get_footer(); ?>