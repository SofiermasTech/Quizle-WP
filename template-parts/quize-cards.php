<div id="cards" class="section-quize-cards__container">
  <div class="section-quize-cards__content">

    <?php
    global $post;

    $myposts = get_posts([
      'numberposts' => -1,
      'orderby'     => 'date',
      'order'       => 'ASC',
    ]);

    if ($myposts) {
      foreach ($myposts as $post) {
        setup_postdata($post);
        // print_r(the_tags());
    ?>

        <div class="quize-card quize-card--big" data-category="<?php echo get_the_category()[0]->slug; ?>">
          <?php the_post_thumbnail(
            array(225, 310),
            array(
              'class' => "quize-card__img quize-card__img--big"
            )
          ); ?>
          <div>
            <!-- <span class="quize-card__icon-head"> -->
            <?php 
           
            $posttags = get_the_tags();
            if ( $posttags ) {
              foreach( $posttags as $tag ) {
                echo '<img class="quize-card__icon-head" src="https://quizle/wp-content/themes/quizle_child/assets/images/icons/' . $tag->slug . '.svg"
            alt="" />';
              }
            }
            ?>
            <!-- </span> -->
            <span class="quize-card__text-head"><?php echo the_tags($before = '', $sep = '', $after = ''); ?></span>
            <span style="font-size: 12px; color: #444545;">&#124;</span>
            <span class="quize-card__text-head"><?php the_category(' '); ?></span>
            <div class="quize-card__description quize-card__description--big">
              <h3 class="quize-card__title quize-card__title--big"> <?php the_title(); ?> </h3>
              <?php the_content(); ?>
            </div>
          </div>
          <a class="quize-card__link" href="<?php the_permalink($post->ID); ?>" target="_blank">
            <span class="visually-hidden">Перейти на страницу
              квиза</span>
          </a>
        </div>

    <?php }
    }
    wp_reset_postdata(); // Сбрасываем $post 
    ?>

  </div>
  <button class="section-quize-cards__load-more">Показать еще</button>
</div>