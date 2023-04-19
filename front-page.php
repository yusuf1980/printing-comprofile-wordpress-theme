<!doctype html>
<html class="no-js" lang="id-ID" dir="ltr">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    	<?php 
	        wp_title( '|', true, 'right' );
	      bloginfo( 'name' );
	     ?>
    </title>
    <!--link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/style.css"-->
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
  </head>
  <body class="home">

  	<?php 
  		$big_logo = Kirki::get_option( coolprintingswb, homepage_logo );
  		$title_1 = Kirki::get_option( coolprintingswb, title_menu_1 );
  		$title_2 = Kirki::get_option( coolprintingswb, title_menu_2 );
  		$title_3 = Kirki::get_option( coolprintingswb, title_menu_3 );
  		$title_4 = Kirki::get_option( coolprintingswb, title_menu_4 );
  		$title_5 = Kirki::get_option( coolprintingswb, title_menu_5 );
  		$title_6 = Kirki::get_option( coolprintingswb, title_menu_6 );
  		$content_1 = Kirki::get_option( coolprintingswb, content_menu_1 );
  		$content_2 = Kirki::get_option( coolprintingswb, content_menu_2 );
  		$content_3 = Kirki::get_option( coolprintingswb, content_menu_3 );
  		$content_4 = Kirki::get_option( coolprintingswb, content_menu_4 );
  		$content_5 = Kirki::get_option( coolprintingswb, content_menu_5 );
  		$content_6 = Kirki::get_option( coolprintingswb, content_menu_6 );
  		$link_1 = Kirki::get_option( coolprintingswb, link_menu_1 );
  		$link_2 = Kirki::get_option( coolprintingswb, link_menu_2 );
  		$link_3 = Kirki::get_option( coolprintingswb, link_menu_3 );
  		$link_4 = Kirki::get_option( coolprintingswb, link_menu_4 );
  		$link_5 = Kirki::get_option( coolprintingswb, link_menu_5 );
  		$link_6 = Kirki::get_option( coolprintingswb, link_menu_6 );
  	?>

    <div class="site-main">
      <div class="page">
        <div class="large-12 columns">
          <div class="logo">
          	<?php if ( $big_logo ) { ?>
				 <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $big_logo ?>" alt="New Radja Printing"></a>
			<?php } ?>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="wrap">
        <div class="row button_home_link">
          <div class="small-12 medium-6 large-4 columns">
            <div class="success callout">
              <div class="button-block">
                <a href="<?php echo $link_1; ?>"><h4><?php if($title_1) echo $title_1; ?></h4></a>
                <p><?php if($content_1) echo $content_1; ?></p>
                <?php if ($link_1) { ?><a class="button tiny secondary" href="<?php echo $link_1; ?>">Lihat</a> <?php } ?>
              </div>
            </div>
          </div>
          <div class="small-12 medium-6 large-4 columns">
            <div class="success callout">
              <div class="button-block">
                <a href="<?php echo $link_2; ?>"><h4><?php if($title_2) echo $title_2; ?></h4></a>
                <p><?php if($content_2) echo $content_2; ?></p>
                <?php if ($link_2) { ?><a class="button tiny secondary" href="<?php echo $link_2; ?>">Lihat</a> <?php } ?>
              </div>
            </div>
          </div>
          <div class="small-12 medium-6 large-4 columns">
            <div class="success callout">
              <div class="button-block">
                <a href="<?php echo $link_3; ?>"><h4><?php if($title_3) echo $title_3; ?></h4></a>
                <p><?php if($content_3) echo $content_3; ?></p>
                <?php if ($link_3) { ?><a class="button tiny secondary" href="<?php echo $link_3; ?>">Lihat</a> <?php } ?>
              </div>
            </div>
          </div>
          <div class="small-12 medium-6 large-4 columns">
            <div class="success callout">
              <div class="button-block">
                <a href="<?php echo $link_4; ?>"><h4><?php if($title_4) echo $title_4; ?></h4></a>
                <p><?php if($content_4) echo $content_4; ?></p>
                <?php if ($link_4) { ?><a class="button tiny secondary" href="<?php echo $link_4; ?>">Lihat</a> <?php } ?>
              </div>
            </div>
          </div>
          <div class="small-12 medium-6 large-4 columns">
            <div class="success callout">
              <div class="button-block">
                <a href="<?php echo $link_5; ?>"><h4><?php if($title_5) echo $title_5; ?></h4></a>
                <p><?php if($content_5) echo $content_5; ?></p>
                <?php if ($link_5) { ?><a class="button tiny secondary" href="<?php echo $link_5; ?>">Lihat</a> <?php } ?>
              </div>
            </div>
          </div>
          <div class="small-12 medium-6 large-4 columns">
            <div class="success callout">
              <div class="button-block">
                <a href="<?php echo $link_6; ?>"><h4><?php if($title_6) echo $title_6; ?></h4></a>
                <p><?php if($content_6) echo $content_6; ?></p>
                <?php if ($link_6) { ?><a class="button tiny secondary" href="<?php echo $link_6; ?>">Lihat</a> <?php } ?>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
	
	<?php wp_footer(); ?>
    <!--script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script-->
  </body>
</html>
