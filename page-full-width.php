<?php 
/**
 * Template Name: Full Width 
 */
?>

<?php get_header(); ?>

<section id="main" class="section-space main-bg">
  <div class="container">

  <div class="row">

        <div class="page-header link-bg">
          <h1><?php wp_title(''); ?></h1>
          <h2>tagline</h2>


        </div><!-- page-header -->
    </div><!-- row -->

    <div class="row">
      <div class="col-md-12">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <article>

          <div class="col-md-8 offset-md-2">
            <?php the_content(); ?>
          </div>

            
          </article>
        <!-- post -->
        <?php endwhile; ?>
        <!-- post navigation -->
        <?php else: ?>
          <div class="page-header">
            <h2>Hmmmm!</h2>
          </div>
          <p>Fandt ikke hvad ud søgte.</p>
        <!-- no posts found -->
        <?php endif; ?>
      </div>
      

    </div>
  </div>
</section>

<?php get_footer(); ?>