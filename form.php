<?php
/*
 * Template Name: Form Template
 * Description: Page template for Forms
 */
 
get_header(); ?>

 <main>
    <div class="container">

      <div class="row">
        <div class="col-md-12">
          
	 	<?php while ( have_posts() ) : the_post(); ?>
      		<?php get_template_part( 'content', 'page' ); ?>
      
   		 <?php endwhile; // end of the loop. ?>

        </div>
      </div>
      
        
    </div>
  </main>

<?php get_footer(); ?>