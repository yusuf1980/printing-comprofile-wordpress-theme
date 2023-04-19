<?php /* Template Name: Client Page */ ?>

<?php get_header(); ?>

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

                           // Include the page content template. ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<div class="entri-content">
								<div id="client_area">
								<?php the_content(); ?>
								</div>
								<?php
									wp_link_pages( array(
										'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
										'after'       => '</div>',
										'link_before' => '<span>',
										'link_after'  => '</span>',
										'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
										'separator'   => '<span class="screen-reader-text">, </span>',
									) );
								?>
							</div><!-- .entry-content -->

							<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>

						</article><!-- #post-## -->

<?Php
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