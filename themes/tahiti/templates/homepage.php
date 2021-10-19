<?php
/**
* Template Name: Homepage
*
* @package WordPress
* @subpackage Coelix
* @since Coelix 1.0
*/
get_header();
?>

<main class="homepage">
  <section class="intro">
    <?php if( have_rows('slider_intro') ): ?>
    <div class="intro__slider">
      <?php
      while( have_rows('slider_intro') ) : the_row(); 
      $title = get_sub_field( 'title_intro' );
      $subtitle = get_sub_field( 'subtitle_intro' );
      $img = get_sub_field( 'bg_intro' );
      ?>
      <div class='intro__slide'>
        <div class="container">
          <div class="intro__text-box">
            <div class='intro__title'><?= $title ?></div>
            <p class='intro__subtitle'><?= $subtitle ?></p>
          </div>
        </div>
        <img src="<?= $img['url'] ?>" alt="<?= $img['alt']; ?>" class='intro__img'>
      </div>
      <?php endwhile; ?>
    </div>
    <?php endif; ?>
  </section>

  <section class="experience">
    <img src="<?= get_field( 'bg_exp' ); ?>" alt="" class="experience__bg">
    <div class="container experience__row">
      <div class="title experience__title"><?= get_field( 'title_exp' ); ?></div>
      <p class="subtitle experience__subtitle"><?= get_field( 'subtitle_exp' ); ?></p>
      <div class="experience__text-box">
        <?= get_field( 'text_exp' ); ?>
      </div>
      <a href="#" class='experience__btn'><?= get_field( 'btn_exp' ); ?></a>
    </div>
  </section>

  <section class="why">
    <div class="container">
      <div class='title why__title'><?= get_field( 'title_why' ); ?></div>

      <?php if( have_rows('items_why') ): ?>
      <div class="why__items">
        <?php while( have_rows('items_why') ) : the_row(); ?>
        <div class='why__item' style='flex: 0 0 <?= get_sub_field( 'block_width_why' ); ?>%'>
          <div class="why__text-box">
            <?= get_sub_field( 'item_why' ); ?>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
      <?php endif; ?>
    </div>
  </section>

  <section class="book">
    <img src="<?= get_field( 'bg_book' ); ?>" alt="" class="book__bg">
    <div class="container">
      <div class="book__text-box">
        <h2 class="title book__title"><?= get_field( 'title_book' ); ?></h2>
        <p class="book__text"><?= get_field( 'text_book' ); ?></p>
        <a href="#" class="book__btn"><?= get_field( 'btn_text_book' ); ?></a>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>