<?php get_header(); ?>
<section id="main" class="section-space main-bg">
  <div class="container">



    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <div class="row">

       <div class="page-header case-info">
          <h1><?php the_field( 'case_intro_titel' ); ?></h1>

          <div class="col-md-7 offset-md-1 case-beskrivelse">
            <?php the_field( 'case_beskrivelse' ); ?>
            </div>
          

         
<div class="col-md-3 offset-md-1">
          <?php 

$rows = get_field('case_attrtibutes');
if($rows)
{
  echo '<ul>';

  foreach($rows as $row)
  {
    echo '<li>' . '<h2>' . $row['case_emner'] . '</h2>' . '</li>';
  }

  echo '</ul>';
}
?>

</div>


        </div><!-- page-header -->

        <div class="case-featured-image"><?php the_post_thumbnail(); ?></div>

       
          <article>

            <?php the_content(); ?>


          </article>
        


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