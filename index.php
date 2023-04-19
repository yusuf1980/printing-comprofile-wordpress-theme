

<?php get_header(); ?>

   		<section class="content">
   			<div class="wrap">
   				<div class="row">
   					<?php $default_sidebar = Kirki::get_option( coolprintingswb, archive_sidebar_default );
                  if ( $default_sidebar == 'yes' ) { ?>
   					<div class="small-12 medium-7 large-8 columns">
                  <?php } else { ?>
                  <div class="small-12 medium-12 large-12 columns">
                  <?php } ?>
   						<div class="content-inner">

   						<?php if ( have_posts() ) : ?>

   							<?php
							// Start the loop.
							while ( have_posts() ) : the_post();

								// Include the page content template.
								get_template_part( 'content', 'archive' );

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

							// End the loop.
							endwhile;

							// Previous/next page navigation.
							the_posts_pagination( array(
								'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
								'next_text'          => __( 'Next page', 'twentyfifteen' ),
								'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
							) );
											?>
   							<!--h3>Judul Content</h3>
   							<p><a href="#">admin</a> di News pada 23 Juni 2017</p>
		   					<p>
		   						"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains."
		   					</p>
		   					<div class="content-tag">
		   						<a href="#"><span class="label secondary">Tag 1</span></a>
		   						<a href="#"><span class="label secondary">Tag 2</span></a>
		   					</div-->
						
						<?php
		   				// If no content, include the "No posts found" template.
						else :
							get_template_part( 'content', 'none' );

						endif;
						?>
		   				</div>
   					</div>
   					
   					<?php 
                     $default_sidebar = Kirki::get_option( coolprintingswb, archive_sidebar_default );
                     if ( $default_sidebar == 'yes' ) {
                        get_sidebar();    
                     }
                     ?>
   					
   				</div>
   			</div>
   		</section>
   		<div class="clearfix"></div>

 		<?php get_footer(); ?>
   	<!--script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script-->


 