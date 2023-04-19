<?php
/*if ( is_front_page() ) {
	require "frontpage.php";
}else {*/
 
	get_header(); ?>

   		<section class="content">
   			<div class="wrap">
   				<div class="row">
                  <?php $default_sidebar = Kirki::get_option( coolprintingswb, page_sidebar_default );
                  if ( $default_sidebar == 'yes' ) { ?>
   					<div class="small-12 medium-7 large-8 columns">
                  <?php } else { ?>
                  <div class="small-12 medium-12 large-12 columns">
                  <?php } ?>
   						<div class="content-inner">
                        <?php
                        // Start the loop.
                        while ( have_posts() ) : the_post();

                           // Include the page content template.
                           get_template_part( 'content', 'page' );

                           // If comments are open or we have at least one comment, load up the comment template.
                           if ( comments_open() || get_comments_number() ) :
                              comments_template();
                           endif;

                        // End the loop.
                        endwhile;
                        ?>
		   				</div>
   					</div>
   					<!--div class="small-12 medium-5 large-4 columns sidebar"-->
                     <?php 
                     if ( $default_sidebar == 'yes' ) {
                        get_sidebar();    
                     }
                     ?>

   					<!--/div-->
   				</div>
   			</div>
   		</section>

   		<?php get_footer() ?>

<?php //} ?>
