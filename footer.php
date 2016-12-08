<footer>
  <?php get_template_part('kontakt-info'); ?>
  <?php get_template_part('ht-map'); ?>
  <div class="bottom-footer container">
    
    <div class="row">
      <div class="col-sm-12">
        <div class="info-box">
          <div class="adresse section-space-24">
            <h4>Hej Tiger</h4>
            <p>c/o Idériget <br> Mejlgade 43.A | 8000 Århus C</p>
           
            <a href="mailto:hej@hejtiger.dk">hej@hejtiger.dk</a>
          </div><!--adressse-->
          <div class="kontakt-options section-space-24">
            <h4>Uforpligtende tilbud</h4>
            <p>Se hvad Hej Tiger kan gøre for dig. Det hjælper altid fortælle så meget som muligt om projektet.</p>
            <a href="#">Projekt & Pris info</a>
         </div><!-- kontakt-options-->
          <div class="social section-space-24">
            
            <a href="https://www.facebook.com/hejtiger" class="fa-stack fa-lg">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
            </a>
            <a href="mailto:hej@hejtiger.dk" class="fa-stack fa-lg">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
            </a>
            <a href="#" class="fa-stack fa-lg">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-dribbble fa-stack-1x fa-inverse"></i>
            </a>
            <a href="#" class="fa-stack fa-lg">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
            </a>
          </div><!--social-->
        </div><!--info-box-->

        <div class="footer-facts">          
            <hr>
            <p>&copy; <?php echo date( 'Y' ); ?> | <?php bloginfo( 'name' ); ?> | Grafik & Webdesign</p>
        </div><!--footer facts-->
      </div><!-- col-md-12-->
    </div><!--row-->
  </div> <!--container-->
</footer>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <?php wp_footer(); ?>
      </body>
    </html>