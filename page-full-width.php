<?php 
/**
 * Template Name: Full Width 
 */
?>

<?php get_header(); ?>

<section id="main full-width" class="section-space"> 
  <div class="container">
    <div class="row">
      <div class="col-md-12">

      	<div class="page-header">

      	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      		<article>

      		<h2><?php the_title(); ?></h2>

            <p><?php the_content(); ?></p>
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
  </div>
</section>

<?php get_footer(); ?>