<?php 
/**
 * home.php
 * page template 
 */
?>

<?php get_header(); ?>

<section id="main">
  <div class="container">
    <div class="row">
      <div class="col-md-9">

      	<div class="page-header">
      		<h1><?php wp_title(''); ?></h1>
      	</div>


      	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      		<article>
      			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      			<p><?php the_author(); ?> | 
      				<?php echo the_time('j F Y') ?> -
      				<?php the_category(', ') ?>
      			</p>
      			<?php the_excerpt(); ?>
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
      
      <?php get_sidebar( 'blog' ); ?>

    </div>
  </div>
</section>

<?php get_footer(); ?>