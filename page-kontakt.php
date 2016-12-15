<?php
/**
* Template Name: Kontakt
*/
?>

<?php get_header(); ?>

<section id="main" class="section-space page-kontakt link-bg">
  <div class="container">

  <div class="row">
      <div class="col-md-12">

      <div class="page-header">
          <h1>Hej Tiger er klar til at hjælpe</h1>
          <h2>Udfyld skemaet, eller lad os blot tage en snak</h2>


        </div><!-- page-header -->

       <form action="" method="post" class="contact-form"> 
      <div class="row">      
           <div class="col-md-6 col-sm-6 col-lg-6">

               <input id="name" class="form-control" type="text" placeholder="Navn">    
           </div>
           <div class="col-md-6 col-sm-6 col-lg-6">

               <input id="email" class="form-control" type="text" placeholder="Email">    
           </div>             
      </div>
      <div class="row">
           <div class="col-md-6 col-sm-6 col-lg-6">
               <input id="company" class="form-control" type="email" placeholder="Evt. firma">             
           </div>

           <div class="col-md-6 col-sm-6 col-lg-6">
               <input id="phone" class="form-control" type="phone" placeholder="Evt. Tlf">             
           </div>               
      </div>

      <div class="row">
           <div class="col-md-12 col-sm-12 col-lg-12">
               <textarea class="form-control" id="message" name="message" placeholder="Besked" rows="15"></textarea> 
                <button class="btn btn-default logbutton pull-right">Send Besked</button>            
           </div>

                         
      </div>
      
    </form>

       


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

        </div><!-- col-md-12 -->
    </div><!-- row -->
     
  </div>
</section>

<?php get_footer(); ?>