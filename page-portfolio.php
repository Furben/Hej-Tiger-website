<?php
/**
* Template Name: portfolio
*/
?>
<?php get_header(); ?>
<section id="main">
  <div class="container">
    <div class="row">
      <ul class="portfolio-section clearfix">
        <?php
        $args = array(
        'post_type' => 'projekt'
        );
        $the_query = new WP_Query ( $args );
        ?>
        <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <li class="logo-containter col-sm-4">
          <a href="<?php the_permalink(); ?>">
            <figure>
              <?php
              $image = get_field( 'top_billede' );
              if ( !empty( $image ) ): ?>
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              <?php endif; ?>
              <span class="portfolio-meta">
                <h3><?php the_title(); ?></h3>
                <hr>
                <p><?php echo strip_tags( get_the_term_list( $post->ID, 'category', '', ' &bull; ', '' ) ); ?></p>
              </span>
            </figure>
          </a>
        </li>
        <?php endwhile; else : ?>
        <p>There were no projekter :( </p>
        <?php endif;
        wp_reset_postdata(); ?>
      </ul>
    </div>
  </div>
</section>
<?php get_footer(); ?>