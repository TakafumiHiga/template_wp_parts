<!-- マスク -->
<div class="p-global-menu__mask c-mask" id="js-mask"></div>
<div class="p-header__menu-wrap">
  <nav class="p-header__menu l-global-menu p-global-menu">

    <div class="p-global-menu__inner">

      <!-- トップページのロゴ -->
      <a href="<?php echo esc_url(home_url('/')); ?>" class="p-global-menu__logo">
        <img class="c-logo" src="<?php echo esc_url(get_theme_file_uri('')); ?>" alt="" /></a>

      <!-- ハンバーガーメニュー -->
      <a class="p-global-menu__hamburger c-hamburger" id="js-hamburger">
        <div></div>
        <div></div>
        <div></div>
        <!-- <span>MENU</span> -->
      </a>
      <!-- <div class="p-global-menu__pc">

      <?php 
        wp_nav_menu(array(
        'theme_location' => 'global',
        'container' => 'div',
        'container_id'    => 'js-global-menu-fixed',
        'depth' => 2,
        // 'container_class' => '', 
        'menu_id'         => '', // ulのid名
        'menu_class' => 'p-global-menu-items', // ulのclass名
        'add_li_class' => 'p-global-menu-item', // liタグへclass追加
        'add_a_class' => 'p-global-menu-item__link' // aタグへclass追加
        ));
        ?>
    </div> -->
    </div><!-- p-global-menu__inner -->




    <!-- ハンバーガーメニューの中身 -->
    <nav id="js-drower" class="p-header-menu__sp l-drower p-drower">
      <div class="l-inner">
        <?php 
        wp_nav_menu(array(
        'theme_location' => 'drawer',
        'container' => 'div',
        'depth' => 2,
        'container_class' => 'p-drower-menu-container', 
        'menu_id'         => 'js-drower__items', // ulのid名
        'menu_class' => 'p-drower__items', // ulのclass名
        'add_li_class' => 'p-drower__item', // liタグへclass追加
        'add_a_class' => 'p-drower__item-link' // aタグへclass追加
        ));
        ?>
      </div>
    </nav>
  </nav>
</div>
<!-- <div class="p-global-menu__contact-wrap p-top-contact">
  <a class="p-top-contact__mail c-contact-mail" href="<?php echo esc_url(home_url('/contact')); ?>">
    <figure class="p-top-contact__mail-img"><img
        src="<?php echo esc_url(get_theme_file_uri('/')); ?>" alt="メールのアイコン"></figure>
    <span class="p-top-contact__en-title">CONTACT</span><span class="p-top-contact__title">お問い合わせ</span>
  </a>
</div> -->