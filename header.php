<!doctype html>
<html class="no-js" lang="id-ID" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    	<?php 
	        wp_title( '|', true, 'right' );
	      bloginfo( 'name' );
	     ?>
    </title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
  </head>
   <body class="page">
   		<div class="off-canvas-wrapper">
   			<div class="off-canvas position-left" id="mobile-menu" data-off-canvas>
   				<div class="logo-small" style="margin-bottom:10px;padding:10px">
	   					<?php $logo = Kirki::get_option( coolprintingswb, header_logo ); ?>
	   					<?php if ( $logo ) { ?>
							 <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $logo ?>" alt="New Radja Printing"></a>
						<?php } ?>
	   				
	   			</div>
   				<ul class="menu vertical">
   				<?php	wp_nav_menu( array(
						'container'      => false,
						'menu'           => 'Primary Menu',
						'menu_class'     => 'vertical medium-horizontal menu',
						'theme_location' => 'primary',
						'items_wrap'     => '<ul id="%1$s" class="%2$s" data-responsive-menu="drilldown medium-dropdown" style="width: 100%;">%3$s</ul>',
						//Recommend setting this to false, but if you need a fallback...
						'fallback_cb'    => 'f6_drill_menu_fallback',
						'walker'         => new F6_DRILL_MENU_WALKER()
					) ); ?>
	   				<!--li><a class="link_active" href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a></li>
					<li><a href="http://localhost/printings/page.html">ABOUT US</a></li>
					<li><a href="http://localhost/printings/page.html">KLIEN</a>
					    <ul class="nested vertical menu">
					        <li><a href="http://localhost/printings/page.html">ONE</a></li>
					        <li><a href="http://localhost/printings/page.html">TWO</a>
					          	<ul class="nested vertical menu">
					           		<li><a href="http://localhost/printings/page.html">ONE</a></li>
					           		<li><a href="http://localhost/printings/page.html">TWO</a></li>
					           	</ul>
					        </li>
					    	<li><a href="http://localhost/printings/page.html">THREE</a></li>
					    </ul>
					</li>
					<li><a href="http://localhost/printings/page.html">PRODUK & LAYANAN</a></li>
					<li><a href="http://localhost/printings/page.html">BILLBOARD</a></li>
					<li><a href="http://localhost/printings/page.html">HUBUNGI KAMI</a></li-->
				</ul>
   			</div>
   			</div>
   		</div>

   		<section class="header">
   			<div class="">
	   			<div class="row">
	   				<div class="small-6 medium-12 large-4 columns">
	   					<div class="logo-small">
	   					<?php $logo = Kirki::get_option( coolprintingswb, header_logo ); ?>
	   					<?php if ( $logo ) { ?>
	   						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
	   							<img src="<?php echo $logo ?>" alt="Home">
	   						</a>
	   					<?php } ?>
	   					</div>
	   				</div>
	   				<div class="small-6 medium-12 large-8 columns">
	   					<div class="off-canvas-content" data-off-canvas-content>
							  <div class="title-bar-right show-for-small-only">
							  	<span class="title-bar-title">Menu</span>
							    <button class="menu-icon" type="button" data-open="mobile-menu"></button>
							  </div>
					    </div>
	   					<nav class="top-bar nav-desktop">
	   						<?php
					wp_nav_menu( array(
						'container'      => false,
						'menu'           => 'Primary Menu',
						'menu_class'     => 'vertical medium-horizontal menu',
						'theme_location' => 'primary',
						'items_wrap'     => '<ul id="%1$s" class="%2$s" data-responsive-menu="drilldown medium-dropdown" style="width: 100%;">%3$s</ul>',
						//Recommend setting this to false, but if you need a fallback...
						'fallback_cb'    => 'f6_drill_menu_fallback',
						'walker'         => new F6_DRILL_MENU_WALKER()
					) );

					?>
	   						<?php /* wp_nav_menu( array( 
	   										'theme_location' => 'header-menu',
	   										'container_class' => 'top-bar nav-desktop',
	   										'menu_class'     => 'dropdown menu pull-right',
	   										 ) ); */ ?>
	   						<!--ul class="dropdown menu pull-right" data-dropdown-menu>
	   							<li><a class="link_active" href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a></li>
						        <li><a href="http://localhost/printings/page.html">TENTang KAMI</a></li>
						        <li><a href="http://localhost/printings/page.html">KLIEN</a></li>
						        <li><a href="http://localhost/printings/page.html">PRODUK & LAYANAN</a>
						        <ul class="menu vertical">
						            <li><a href="http://localhost/printings/page.html">One</a></li>
						            <li><a href="http://localhost/printings/page.html">Two</a>
						            	<ul class="menu">
						            		<li><a href="http://localhost/printings/page.html">One</a></li>
						            		<li><a href="http://localhost/printings/page.html">Two</a></li>
						            	</ul>
						            </li>
						            <li><a href="http://localhost/printings/page.html">Three</a></li>
						        </ul>
						      	</li>
						      	<li><a href="http://localhost/printings/page.html">BILLBOARD</a></li>
						        <li><a href="http://localhost/printings/page.html">HUBUNGI KAMI</a></li>
						    </ul-->
	   					</nav>
	   				</div>
	   			</div>
	   		</div>
   		</section>