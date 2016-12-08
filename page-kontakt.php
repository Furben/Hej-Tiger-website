<?php
/**
* Template Name: Kontakt
*/
?>

<?php get_header(); ?>

<section id="main" class="section-space page-kontakt">
  <div class="container">

  <div class="row">
      <div class="col-md-12">

        <div class="page-header">
          <div class="text-center">
            <h2>HejTiger er klar til at hjælpe</h2>
            <p>Skriv en mail eller udfyld skemaet</p>
          </div>
          
        </div><!-- page-header -->

       </div><!-- col-md-12 -->
    </div><!-- row -->

    <div class="row">
      <div class="col-md-9">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      		<article>

            <h2><?php the_content(); ?></h2>
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
      
      <?php get_sidebar(); ?>

    </div>
  </div>
</section>

<?php get_footer(); ?>