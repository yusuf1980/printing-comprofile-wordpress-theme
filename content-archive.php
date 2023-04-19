<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	
	<header class="entry-header">
		<?php echo '<a href="' . get_permalink() . '"><h3 class="entry-title">' . get_the_title() . '</h3></a>'; ?>
		<!--p>Diposting pada <?php //the_date(); ?> oleh <?php //the_author(); ?> di   </p-->

	</header><!-- .entry-header -->

	<div class="entry-content archieve">
		<?php //the_content(); ?>
		<?php echo the_post_thumbnail('thumbnail'); the_excerpt(); ?>
		<?php
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?><?php wpbeginner_numeric_posts_nav(); ?>
		<!--div class="content-tag">
			<?php // the_tags( 'Tag: <span class="label secondary"> ', '</span> <span class="label secondary"> ', '</span>' ); ?>   	
		</div-->
	</div><!-- .entry-content -->

	<?php // edit_post_link( __( 'Edit', 'twentyfifteen' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>

</article><!-- #post-## -->