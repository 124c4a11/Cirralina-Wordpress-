<?php
/**
 * Template name: Contact Template 
 */

global $corralina_options;

$opts = $corralina_options;
$content = $opts['footer-content'];
$email = $opts['corralina-email'];
$phone = $opts['corralina-phone'];
$address = $opts['corralina-address'];

get_header();
?>


<section class="content">
  <?php while ( have_posts() ) : the_post(); ?>
    <div class="container">
      <div class="tcw-wrap">
      <div class="content-title"><?php the_title(); ?></div>
        <?= get_breadcrumbs(); ?>
      </div>
      <div class="c-wrap">
        <div class="c-content">
          <?php the_content(); ?>

          <?php if ($phone): ?>
            <div class="c-contact">
              <span class="c-icon"><i class="fa fa-phone"></i></span>
              <p>Phone:
                <span><strong><?= esc_attr($phone); ?></strong></span>
              </p>
            </div>
          <?php endif; ?>

          <?php if ($address): ?>
            <div class="c-contact">
              <span class="c-icon"><i class="fa fa-globe"></i></span>
              <p>Adress:
                <span><?= esc_attr($address); ?></span>
              </p>
            </div>
          <?php endif; ?>

          <?php if ($email): ?>
            <div class="c-contact">
              <span class="c-icon"><i class="fa fa-envelope-o"></i></span>
              <p>E-mail:
                <span><?= esc_attr($email); ?></span>
              </p>
          </div>
          <?php endif; ?>
        </div>
        <div class="c-form-w">
          <h3>Contact form</h3>

          <?php 
            $form = get_post_meta(get_the_ID(), 'ale_formcode', true);
            echo do_shortcode($form); 
          ?>
        </div>
      </div>
      <script src="https://maps.googleapis.com/maps/api/js"></script>
      <script>
        function initialize() {
          var map_canvas = document.getElementById('map_canvas');
          var map_options = {
            center: new google.maps.LatLng(44.5403, -78.5463),
            zoom: 8,
            mapTypeId: google.maps.MapTypeId.ROADMAP
          }
          var map = new google.maps.Map(map_canvas, map_options)
        }
        google.maps.event.addDomListener(window, 'load', initialize);
      </script>
      <div class="c-map">
        <div id="map_canvas"></div>
      </div>
    </div>
  <?php endwhile; ?>
</section>


<?php get_footer(); ?>