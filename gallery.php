<?php 
/**
 * Template Name: Gallery
 */
?>

<?php get_header(); ?>

<section id="main" class="section-space main-bg">
  <div class="container">

  <div class="row">

      	<div class="page-header black-bg">
          <h1><?php wp_title(''); ?></h1>
          <h2>tagline</h2>

          </div>

      	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      		<article>

            <?php the_content(); ?>
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

      	<ul class="instagram-section clearfix">
        
        <li class="logo-containter col-sm-4">
          <a href="<?php the_permalink(); ?>">
            <figure>
              <img src="http://placehold.it/1080x1080">
            </figure>
          </a>
        </li>

         <li class="logo-containter col-sm-4">
          <a href="<?php the_permalink(); ?>">
            <figure>
              <img src="http://placehold.it/1080x1080">
            </figure>
          </a>
        </li>

         <li class="logo-containter col-sm-4">
          <a href="<?php the_permalink(); ?>">
            <figure>
              <img src="http://placehold.it/1080x1080">
            </figure>
          </a>
        </li>
         <li class="logo-containter col-sm-4">
          <a href="<?php the_permalink(); ?>">
            <figure>
              <img src="http://placehold.it/1080x1080">
            </figure>
          </a>
        </li>

         <li class="logo-containter col-sm-4">
          <a href="<?php the_permalink(); ?>">
            <figure>
              <img src="http://placehold.it/1080x1080">
            </figure>
          </a>
        </li>

         <li class="logo-containter col-sm-4">
          <a href="<?php the_permalink(); ?>">
            <figure>
              <img src="http://placehold.it/1080x1080">
            </figure>
          </a>
        </li>

         <li class="logo-containter col-sm-4">
          <a href="<?php the_permalink(); ?>">
            <figure>
              <img src="http://placehold.it/1080x1080">
            </figure>
          </a>
        </li>

         <li class="logo-containter col-sm-4">
          <a href="<?php the_permalink(); ?>">
            <figure>
              <img src="http://placehold.it/1080x1080">
            </figure>
          </a>
        </li>

         <li class="logo-containter col-sm-4">
          <a href="<?php the_permalink(); ?>">
            <figure>
              <img src="http://placehold.it/1080x1080">
            </figure>
          </a>
        </li>
        
      </ul>

      </div>

  	</div>
  </div>
</section>

<?php get_footer(); ?>