<?php 
/**
 * page.php
 * page template 
 */
?>

<?php get_header(); ?>


<section id="main" class="section-space">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="blog-item">
      	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


        <div class="page-header">
      		
      			<h1 class="text-center"><?php the_title(); ?></h1>
          </div><!--page header-->
      			
      			<?php the_content(); ?>
      			
      		
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
        <!-- blog-item -->
      </div>
      <!-- col-sm-12 -->
    </div>
  </div>
</section>


<?php get_footer(); ?>