<?php 
/**
 * page.php
 */
?>

<?php get_header(); ?>

<section id="main" class="section-space">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

      	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      		<article>
      			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?> <i class="fa fa-angle-double-right"></i></a></h2>
      			
      			<hr>
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