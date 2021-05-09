<?php
/**
 * The header for our theme
 *
 * @subpackage lz-charity-welfare
 * @since 1.0
 * @version 0.1
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
} else {
    do_action( 'wp_body_open' );
}?>

<div class="top-header">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lz-charity-welfare' ); ?></a>
	<div class="container">		
		<div class="row">
			<div class="col-lg-6 col-md-6 p-0">
				<div class="top">
					<?php if( get_theme_mod( 'lz_charity_welfare_call','' ) != '') { ?>	
				        <span><a href="tel:<?php echo esc_url( get_theme_mod('lz_charity_welfare_call','') ); ?>"><i class="fas fa-phone"></i><?php echo esc_html( get_theme_mod('lz_charity_welfare_call','') ); ?></a></span>
				    <?php } ?>		
				    <?php if( get_theme_mod( 'lz_charity_welfare_mail','' ) != '') { ?>	
				        <span class="col-org"><a href="mailto:<?php echo esc_url( get_theme_mod('lz_charity_welfare_mail','') ); ?>"><i class="fas fa-envelope"></i><?php echo esc_html( get_theme_mod('lz_charity_welfare_mail','') ); ?></a></span>
				    <?php } ?>		   		
				</div>	
			</div>
			<div class="col-lg-6 col-md-6 p-0">
				<div class="social-icons">
					<?php if( get_theme_mod( 'lz_charity_welfare_facebook_url') != '') { ?>
		              <a href="<?php echo esc_url( get_theme_mod( 'lz_charity_welfare_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
		            <?php } ?>
		            <?php if( get_theme_mod( 'lz_charity_welfare_twitter_url') != '') { ?>
		              <a href="<?php echo esc_url( get_theme_mod( 'lz_charity_welfare_twitter_url','' ) ); ?>"><i class="fab fa-twitter"></i></a>
		            <?php } ?>
		            <?php if( get_theme_mod( 'lz_charity_welfare_linkedin_url') != '') { ?>
		              <a href="<?php echo esc_url( get_theme_mod( 'lz_charity_welfare_linkedin_url','' ) ); ?>"><i class="fab fa-linkedin-in"></i></a>
		            <?php } ?>
		            <?php if( get_theme_mod( 'lz_charity_welfare_insta_url') != '') { ?>
		              <a href="<?php echo esc_url( get_theme_mod( 'lz_charity_welfare_insta_url','' ) ); ?>"><i class="fab fa-instagram"></i></a>
		            <?php } ?>
				</div>	
			</div>
		</div>
	</div>
</div>
<header role="banner" id="header">
    <div class="menu-section">
		<div class="container">
			<div class="main-top">
				<div class="row">
					<div class="col-lg-3 col-md-5">
						<div class="logo">
					        <?php if ( has_custom_logo() ) : ?>
						        <div class="site-logo"><?php the_custom_logo(); ?></div>
						    <?php endif; ?>
				            <?php if (get_theme_mod('lz_charity_welfare_show_site_title',true)) {?>
						        <?php $blog_info = get_bloginfo( 'name' ); ?>
						        <?php if ( ! empty( $blog_info ) ) : ?>
						            <?php if ( is_front_page() && is_home() ) : ?>
							            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						        	<?php else : ?>
					            		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						            <?php endif; ?>
						        <?php endif; ?>
						    <?php }?>
				        	<?php if (get_theme_mod('lz_charity_welfare_show_tagline',true)) {?>
						        <?php
						        $description = get_bloginfo( 'description', 'display' );
						        if ( $description || is_customize_preview() ) :
						          ?>
							        <p class="site-description">
							            <?php echo esc_html($description); ?>
							        </p>
						        <?php endif; ?>
						    <?php }?>
					    </div>
					</div>
					<div class="col-lg-8 col-md-6 col-6">
						<?php if (has_nav_menu('primary')){ ?>
							<div class="toggle-menu responsive-menu">
					            <button onclick="lz_charity_welfare_open()" role="tab" class="mobile-menu"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','lz-charity-welfare'); ?></span></button>
					        </div>
							<div id="sidelong-menu" class="nav sidenav">
				                <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'lz-charity-welfare' ); ?>">
				                  <?php 
				                    wp_nav_menu( array( 
				                      'theme_location' => 'primary',
				                      'container_class' => 'main-menu-navigation clearfix' ,
				                      'menu_class' => 'clearfix',
				                      'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
				                      'fallback_cb' => 'wp_page_menu',
				                    ) ); 
				                  ?>
				                  <a href="javascript:void(0)" class="closebtn responsive-menu" onclick="lz_charity_welfare_close()"><i class="fas fa-times"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','lz-charity-welfare'); ?></span></a>
				                </nav>
				            </div>
				        <?php }?>
					</div>
					<div class="search-box col-lg-1 col-md-1 col-6">
          				<button  onclick="lz_charity_welfare_search_open()" class="search-toggle"><i class="fas fa-search"></i></button>
        			</div> 
				</div>
				<div class="search-outer">
					<div class="search-inner">
			        	<?php get_search_form(); ?>
		        	</div>
		        	<button onclick="lz_charity_welfare_search_close()" class="search-close"><i class="fas fa-times"></i></button>
		        </div>
			</div>
		</div>
	</div>
</header>