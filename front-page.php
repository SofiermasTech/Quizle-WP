<?php
/*
Template Name: front-page
*/
?>

<?php get_header(); ?>

<body class="home page-template-default page page-id-47 wp-embed-responsive sidebar-none" style="margin-bottom: 0px;">
  <div id="page" class="site"> <a class="skip-link screen-reader-text" href="#content">
      <!--noindex-->Перейти к
      содержанию
      <!--/noindex-->
    </a>
    <div class="search-screen-overlay js-search-screen-overlay"></div>
    <div class="search-screen js-search-screen">
      <form role="search" method="get" class="search-form" action="https://quizle.ru/"> <label> <span
            class="screen-reader-text">
            <!--noindex-->Search
            for:
            <!--/noindex-->
          </span> <input type="search" class="search-field" placeholder="Поиск…" value name="s"> </label>
        <button type="submit" class="search-submit"></button>
      </form>
    </div>

    <div class="site-content-inner">
      <div id="primary" class="content-area" itemscope itemtype="http://schema.org/Article">
        <main id="main" class="site-main">

          <?php get_template_part('template-parts/sections/intro') ?>
          <?php get_template_part('template-parts/sections/section-benefits') ?>
          <?php get_template_part('template-parts/sections/section-video') ?>
          <?php get_template_part('template-parts/sections/section-type-quize') ?>
          <?php get_template_part('template-parts/sections/section-type-question') ?>
          <?php get_template_part('template-parts/sections/section-categories') ?>
          <?php get_template_part('template-parts/sections/section-integr') ?>
          <?php get_template_part('template-parts/sections/section-qa') ?>

        </main><!-- #main -->
      </div><!-- #primary -->
    </div>
    <!--.site-content-inner-->

    <?php get_footer(); ?>