<?php 
/**
 * Template Name: Info
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

    <div class="row section-space">
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
      

    </div><!--row-->

    <div class="service row section-space">

      <div class="col-md-4 service-1">

      <h2>Branding</h2>
      <p>Logo</p>
      <p>Identitet</p>
      <p>Visuel Guides</p>
      <p>Strategi</p>
      <p>Bruger Profiler</p>

      </div><!-- col-md-4-->

      <div class="col-md-4 service-2">

      <h2>Print</h2>
      <p>Logo</p>
      <p>Identitet</p>
      <p>Visuel Guides</p>
      <p>Bruger Profiler</p>

      </div><!-- col-md-4-->

      <div class="col-md-4 service-3">

      <h2>Web</h2>
      <p>Design & udvikling</p>
      <p>Wordpress</p>

      </div><!-- col-md-4-->
      

    </div><!--row-->
  </div>


</section>

<div class="gallery-default no-gutter">
<div class="no-gutter col-sm-6">
  <img class="pad-b-15" src="https://unsplash.it/1600/800/?image=0" alt="">
  <img src="https://unsplash.it/1600/800/?image=0" alt="">
  </div>

  <div class="no-gutter gallery-right col-sm-6">
  <img class="pad-b-15" src="https://unsplash.it/1600/800/?image=0" alt="">
  <img src="https://unsplash.it/1600/800/?image=0" alt="">
  </div>
  </div>

<?php get_footer(); ?>