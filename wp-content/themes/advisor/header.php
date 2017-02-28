<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title><?php
 
    global $page, $paged;
 
    wp_title( '|', true, 'right' );
 
    bloginfo( 'name' );
 
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        echo " | $site_description";
 
    if ( $paged >= 2 || $page >= 2 )
        echo ' | ' . sprintf( __( 'Page %s', 'starkers' ), max( $paged, $page ) );
 
    ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--<script src="<?php bloginfo('template_directory'); ?>/js/modernizr-1.6.min.js"></script>-->
 
<?php
    /* We add some JavaScript to pages with the comment form
     * to support sites with threaded comments (when in use).
     */
    if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );
 
    /* Always have wp_head() just before the closing </head>
     * tag of your theme, or you will break many plugins, which
     * generally use this hook to add elements to <head> such
     * as styles, scripts, and meta tags.
     */
    wp_head();
?>
</head>
 
<body class="home page body_style_boxed fullboxed body_filled article_style_stretch top_panel_style_light top_panel_opacity_solid top_panel_show top_panel_above menu_center sidebar_hide body_bg1">
 

        

<div class="body_wrap">
    <div class="page_wrap">
        <div class="top_panel_fixed_wrap"></div>

        <header class="top_panel_wrap bg_tint_light" >
                
                <div class="border_bottom_grey font_086em display_none">
                    <div class="content_wrap clearfix top_div">
                        <div class="inline bottom top-panel_disclaimer">
                            Advice and guides to help improve your finances!
                        </div>
                        <div class="inline bottom side-right">
                            <div class="menu_user_area menu_user_left menu_user_contact_area">991 US Route 22 West Bridgewater, NJ  08807
</div>
                        </div>
                        <!--<div class="inline side-right search_s">-->
                        <!--    <div class="search_wrap search_style_regular " title="Open/close search form">-->
                        <!--        <a href="#" class="search_icon icon-search-2"> </a>-->
                        <!--        <div class="search_form_wrap">-->
                        <!--            <form role="search" method="get" class="search_form" action="/">-->
                        <!--                <button type="submit" class="search_submit" data-text="Search" title="Start search">Search</button>-->
                        <!--                <input type="text" class="search_field" placeholder="Search" value="<?php the_search_query(); ?>" name="s" title="" />-->
                        <!--            </form>-->
                        <!--        </div>-->
                        <!--        <div class="search_results widget_area bg_tint_light">-->
                        <!--            <a class="search_results_close icon-delete-2"> </a>-->
                        <!--            <div class="search_results_content"> </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                </div>
               
                <div class="menu_main_wrap with_text">
                       
                    <div class="content_wrap clearfix display_none">
                               
                        <div class="logo">
                            <div class="logo_img">
                              <a href="/"> <img src="<?php bloginfo('template_directory'); ?>/images/CampanaroDonna-logo-BC.png" class="logo_main" alt="Donna Campanaro, LLC"></a>
                              <a href="/"> <img src="<?php bloginfo('template_directory'); ?>/images/CampanaroDonna-logo-BC.png" class="logo_fixed" alt="Donna Campanaro, LLC"></a>

                            
                            </div>
                            
                        </div>
                        <div class="inline image side-right marg_top_2em top-panel_blocks">
                            <div class="inline">
                                <div class="inline-wrapper">
                                    <div class="side-right marg_null marg_top top-panel_left">
                                        <div class="icon_user-top">
                                            <i class="user_top_icon icon-telephone"></i>
                                        </div>
                                        <h4>(908) 917 0484</h4>
                                        <span class="font_086em">
                                            <a href="mailto:info@yoursite.com">numbers0922@gmail.com</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="inline pad_left_2em">
                                <div class="inline-wrapper">
                                    <div class="side-right marg_null marg_top top-panel_right">
                                        <div class="icon_user-top">
                                            <i class="user_top_icon icon-clock-4"> </i>
                                        </div>
                                        <h4>Mon - Sat 8.00- 20.00</h4>
                                        <span class="font_086em">Sunday  closed</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="menu_main_responsive_button icon-menu">Menu</a>
                               
                    </div>
                           
                    <div class="main-menu_wrap_bg">
                        <div class="main-menu_wrap_content">
                            <nav role="navigation" class="menu_main_nav_area">
                                <ul id="menu_main" class="menu_main_nav">
                                    <li class="menu-item current-menu-item current-menu-ancestor current-menu-parent">
                                        <a title="Home" href="/">Home</a>
                                    </li>
                                    
                                    <li class="menu-item">
                                        <a title="About" href="/about">About</a>
                                        
                                    </li>
                                    <li class="menu-item">
                                        <a title="Services" href="/services">Services</a>
                                    </li>
                                    
                                    <li class="menu-item">
                                        <a title="Contact Us" href="/contact">Contact Us</a>
                                    </li>
                                    
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

            </header>

