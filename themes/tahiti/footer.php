<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tahiti
 */

?>

<footer class="footer">
  <div class="container">
    <div class="footer__row">
      <div class="footer__col footer__logo-box">
        <a href="<?= home_url(); ?>"
          class='footer__logo-link'><?= file_get_contents( get_attached_file( get_field( 'logo', 'option' ) ) ); ?></a>
      </div>

      <div class="footer__col">
        <h3 class='footer__menu-title'><?= get_field( 'title_1_footer', 'option' ); ?></h3>
        <nav class='footer__nav footer-menu'>
          <?php 
						wp_nav_menu([
							'menu' => 'Footer menu 1',
							'container' => '',
							'items_wrap' => '<ul class="footer-menu__list">%3$s</ul>'
						])
					?>
        </nav>
      </div>

      <div class="footer__col">
        <h3 class='footer__menu-title'><?= get_field( 'title_2_footer', 'option' ); ?></h3>
        <nav class='footer__nav footer-menu'>
          <?php 
						wp_nav_menu([
							'menu' => 'Footer menu 2',
							'container' => '',
							'items_wrap' => '<ul class="footer-menu__list">%3$s</ul>'
						])
					?>
        </nav>
      </div>

      <div class="footer__col">
        <h3 class='footer__menu-title'><?= get_field( 'title_3_footer', 'option' ); ?></h3>
        <nav class='footer__nav footer-menu'>
          <?php 
						wp_nav_menu([
							'menu' => 'Footer menu 3',
							'container' => '',
							'items_wrap' => '<ul class="footer-menu__list">%3$s</ul>'
						])
					?>
        </nav>
      </div>

      <div class="footer__col">
        <?= do_shortcode('[addtoany]'); ?>
      </div>

    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>