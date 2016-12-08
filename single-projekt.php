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

        <div class="page-header">
          <h2><?php wp_title(''); ?></h2>
          <h3><?php echo strip_tags( get_the_term_list( $post->ID, 'category', '', ' &bull; ', '' ) ); ?></h3>
        </div><!-- page-header -->

       </div><!-- col-md-12 -->
    </div><!-- row -->

        
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="single-projekt row">
  <div class="col-xs-12 col-md-12">
    <article>

          <?php the_field( 'beskrivelse' ); ?>
          
        </article>
      </div>
  

</div><!-- row -->
        
        
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
</section>
<?php get_footer(); ?>