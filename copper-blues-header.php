<?php
$siteurl = get_option('siteurl');

if($_GET['s2']){

    ?>

        <script>
            setTimeout(function(){
                window.location.href = "<?php echo $siteurl; ?>";
            }, 2000);

        </script>

    <?php

}

if($_POST['email'] != "" && $_POST['action'] == "emailuser"){

    global $wpdb;

    $emails = $wpdb->get_results( "SELECT email FROM wp_subscribe2" );

    foreach ($emails as $email){

        if($_POST['email'] == $email->email){ echo "false"; exit; }

    }

    echo "true";

    exit;

}
if(is_page_template('tempe.php')){
    // setcookie('location', 'tempe', time()+3600*24*100, COOKIEPATH, COOKIE_DOMAIN, false);
    $res = preg_split('#[-]#', $_SERVER['HTTP_REFERER']);
    if($_SERVER['HTTP_REFERER'] == $_SERVER['REDIRECT_REDIRECT_SCRIPT_URI'] || $_SERVER['HTTP_REFERER'] == "$siteurl/" || $res[0] ==  "$siteurl/tempe/tempe"){

    }else{
        if($res[1] == "palm" || $res[1] == "beer/" || $res[1] == "music/" || $res[1] == "food/" || $res[1] == "photos/" || $res[1] == "blog/" || $res[1] == "contact/"){
            if($res[1] == "palm"){
                if($res[3]){
                    $rurl = $siteurl."/tempe/tempe-".$res[3];
                }
            }else{
                $rurl = $siteurl."/tempe/tempe-".$res[1];
            }
        ?>
        <script>
            window.location.href = "<?php echo $rurl; ?>";
        </script>
        <?php
        exit;
        }
    }
}
if(is_page_template('phoenix.php')){
    //setcookie('location', 'phoenix', time()+3600*24*100, COOKIEPATH, COOKIE_DOMAIN, false);
    $res = preg_split('#[-]#', $_SERVER['HTTP_REFERER']);
    //print_r($res);
    //exit;
    if($_SERVER['HTTP_REFERER'] == $_SERVER['REDIRECT_REDIRECT_SCRIPT_URI'] || $_SERVER['HTTP_REFERER'] == "$siteurl/" || $res[0] ==  "$siteurl/phoenix/phoenix"){

        }else{
        if($res[1] == "palm" || $res[1] == "beer/" || $res[1] == "music/" || $res[1] == "food/" || $res[1] == "photos/" || $res[1] == "blog/" || $res[1] == "contact/"){
            if($res[1] == "palm"){
                    if($res[3]){
                        $rurl = $siteurl."/phoenix/phoenix-".$res[3];
                    }
                }else{
                        $rurl = $siteurl."/phoenix/phoenix-".$res[1];
            }
            ?>
            <script>
                window.location.href = "<?php echo $rurl; ?>";
            </script>
            <?php
            exit;
        }
    }
}
if(is_page_template('west_palm_beach.php')){
    //setcookie('location', 'westpalm', time()+3600*24*100, COOKIEPATH, COOKIE_DOMAIN, false);
    $res = preg_split('#[-]#', $_SERVER['HTTP_REFERER']);
    if($_SERVER['HTTP_REFERER'] == $_SERVER['REDIRECT_REDIRECT_SCRIPT_URI'] || $_SERVER['HTTP_REFERER'] == "$siteurl/" || $res[0] ==  "$siteurl/west"){

    }else{
        if($res[1] == "beer/" || $res[1] == "music/" || $res[1] == "food/" || $res[1] == "photos/" || $res[1] == "blog/" || $res[1] == "contact/"){
            $rurl = $siteurl."/west-palm-beach/westpalm-".$res[1];
            ?>
            <script>
                window.location.href = "<?php echo $rurl; ?>";
            </script>
            <?php
            exit;
        }
    }
}
/*
if(is_front_page() && isset($_COOKIE['location'])){
    if($_COOKIE['location'] == "tempe"){
        ?>
            <script>
                window.location.href = "<?php echo $siteurl; ?>/tempe";
            </script>
    <?php
        }
        if($_COOKIE['location'] == "phoenix"){
        ?>
            <script>
                window.location.href = "<?php echo $siteurl; ?>/phoenix";
            </script>
    <?php
        }
        if($_COOKIE['location'] == "westpalm"){
        ?>
            <script>
                window.location.href = "<?php echo $siteurl; ?>/west-palm-beach";
            </script>
    <?php
        }
}
*/

/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.1/jquery.flexslider.js"></script>
<script type='text/javascript'>
var googletag = googletag || {};
googletag.cmd = googletag.cmd || [];
(function() {
var gads = document.createElement('script');
gads.async = true;
gads.type = 'text/javascript';
var useSSL = 'https:' == document.location.protocol;
gads.src = (useSSL ? 'https:' : 'http:') + 
'//www.googletagservices.com/tag/js/gpt.js';
var node = document.getElementsByTagName('script')[0];
node.parentNode.insertBefore(gads, node);
})();
</script>

<script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
<script>
  var googletag = googletag || {};
  googletag.cmd = googletag.cmd || [];
</script>
 
<script>
  googletag.cmd.push(function() {
    googletag.defineSlot('/74561012/Improv_box', [300, 250], 'div-gpt-ad-1487722937162-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>
<script>
  googletag.cmd.push(function() {
    googletag.defineSlot('/74561012/Improv_Leaderboard', [728, 90], 'div-gpt-ad-1487722937162-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, user-scalable=0, initial-scale=1.0" target-densitydpi="device-dpi">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/jquery-ui.css">
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.theme.css">
 <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.0.0/animate.min.css">-->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/liquid-slider.css">
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
    <![endif]-->
    <!--<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.9.1.min.js" type="text/javascript"></script>-->
    <base href="<?php echo bloginfo('url'); ?>/">
    <?php wp_head(); ?>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
     <script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.validate.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css" />
<?php
                                if (is_page_template('tempe_current_home.php') || is_page(array(119,565,572,113,83,102,152,166,1566,1586,1576,1812)) || $rom == "3" )
                                {
                               echo do_shortcode('[responsive_menu menu_to_use="tempe-current"]');
                                }
                                if (is_page_template('phoenix_current_home.php') || is_page(array(121,538,546,115,109,104,153,167,1643,1633,1623,1802,1815,1908)) || $rom == "4" )
                                {
                                echo do_shortcode('[responsive_menu menu_to_use="phoenix-current"]');
                                }
                                if (is_page_template('west_palm_current_home.php') || is_page(array(125,551,554,117,111,106,154,14,168,1698,1688,1678,1683,1805,1821)) || $rom == "5" )
                                {
                                echo do_shortcode('[responsive_menu menu_to_use="west-palm-current"]');
                                }
				if (is_page_template('oxnard_front_page.php') || is_page(array(1345, 1354, 1366, 1377, 1492, 1861, 2237, 2240)) || $rom == "6" )
                                {
                                echo do_shortcode('[responsive_menu]');
                                }
                               if (is_page_template('brea_front_page.php') || is_page(array(2095, 2093, 2100, 2102, 2098)) ||  $rom == "7" )
                                {
                                echo do_shortcode('[responsive_menu menu_to_use="brea-current"]');
                                }
								if (is_page_template('miami_front.php') || is_page(array(2138, 2140, 2142, 2149, 2146)) ||  $rom == "8" )
                                {
                                echo do_shortcode('[responsive_menu menu_to_use="miami"]');
                                }
				else
				{ ?>
					
			<?php
				}
                                 ?>
    <?php
         if( is_single()  ){
         $id = get_the_id();
          $terms = get_the_terms( $id, 'category' );
          if(is_array($terms)) {
            foreach($terms as $term) {
                $rom= $term->term_id;
            }}
             $terms1 = get_the_terms( $id, 'events_categories' );
          if(is_array($terms1)) {
            foreach($terms1 as $term1) {
                $rom1= $term1->term_id;

            }}
            if($rom == "3" || $rom1 == "3" ){
                ?>
                <script>
                jQuery(document).ready(function(){
                    jQuery('.tempeloc').addClass('current-menu-item');
                    jQuery('.tempeloc').addClass('current-page-item');
                    });
                </script>
                <?php
            }
            if($rom == "4"  || $rom1 == "4"){
                ?>
                <script>
                jQuery(document).ready(function(){
                    jQuery('.phoenixloc').addClass('current-menu-item');
                    jQuery('.phoenixloc').addClass('current-page-item');
                    });
                </script>
                <?php
            }
            if($rom == "5"  || $rom1 == "5"){
                ?>
                <script>
                jQuery(document).ready(function(){
                    jQuery('.wpbloc').addClass('current-menu-item');
                    jQuery('.wpbloc').addClass('current-page-item');
                    });
                </script>
                <?php
            }
         }
    ?>

</head>
<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TLBXS3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php if(is_front_page()){ ?>
<?php dynamic_sidebar( 'map' ); ?>
<?php /*?><div class="locpopup" id="pclf" style="display:block; position: absolute; height:100%; z-index:999; width: 100%;">
    <!--<div class="head-des"><h1>please choose your location first</h1></div>-->
    <div class="loc-map-popup popup-desk">
            <img src="<?php bloginfo('template_url'); ?>/images/loc-map-big.jpg" alt="location map" />
            <span class="maptap choose">CHOOSE YOUR LOCATION:</span>
            <a href="phoenix" class="maptap phoenix-loc">PHOENIX</a>
            <a href="tempe" class="maptap tempe-loc">TEMPE</a>
            <a href="west-palm-beach" class="maptap wpb-loc">WEST PALM BEACH</a>
    </div>
    <div class="popup-ss">
        <ul>
            <li>CHOOSE YOUR LOCATION:</li>
            <li><img src="<?php bloginfo('template_url'); ?>/images/star.png" alt="star" class="normal" width="17" height="15" /><img src="<?php bloginfo('template_url'); ?>/images/star-2x.png" alt="star" class="retina"  width="17" height="15" /><a href="phoenix">PHOENIX</a></li>
            <li><img src="<?php bloginfo('template_url'); ?>/images/star.png" alt="star" class="normal" width="17" height="15" /><img src="<?php bloginfo('template_url'); ?>/images/star-2x.png" alt="star" class="retina"  width="17" height="15" /><a href="tempe">TEMPE</a></li>
            <li><img src="<?php bloginfo('template_url'); ?>/images/star.png" alt="star" class="normal" width="17" height="15" /><img src="<?php bloginfo('template_url'); ?>/images/star-2x.png" alt="star" class="retina"  width="17" height="15" /><a href="west-palm-beach">WEST PALM BEACH</a></li>
        </ul>
    </div>
</div><?php */?>
<?php } ?>
<div id="newsletter-success-connect" style="display:none; position: absolute; height:100%; z-index:999; width: 100%;">
    <div class="pop-up-msg1"><img src="<?php bloginfo('template_url'); ?>/images/thnk-you.png" alt="location" class="brdr" /></div>
</div>
<!-- <div class="pagemain">
<div class="topbg">
        <div class="btmbg">
<div class="conent-cont"> -->

  <?php
			if(is_page_template('tempe_current_home.php') || is_page(array(119,565,572,113,83,102,152,166,1566,1586,1576,1812)) || $rom == "3"){
?>
                        <header>
<?php
                        }else if(is_page_template('phoenix_current_home.php') || is_page(array(121,538,546,115,109,104,153,1643,1633,1623,1802,1815,1908)) || $rom == "4"){
?>
                        <header>
<?php
                        }else if(is_page_template('west_palm_current_home.php') || is_page(array(125,551,554,117,111,106,154,14,1698,1688,1678,1683,1805,1821)) || $rom == "5"){
?>
                          <header>
<?php
                        }else if (is_page_template('oxnard_front_page.php') || is_page(array(1345, 1354, 1366, 1377, 1492, 1861, 2237, 2240)) || $rom == "6" )
{
?>
                        <header>
<?php
		}else if (is_page_template('brea_front_page.php') || is_page(array(2095, 2093, 2100, 2102, 2098)) ||  $rom == "7" )
{
?>
<header>
<?php
		}else
{
?>
	 <header>
<?php
                        }
                    ?>
                    <div class="logo logo-bs">
                    <?php
                    if(is_page_template('tempe_current_home.php') || is_page(array(119,565,572,113,83,102,152,166,1566,1586,1576,1812)) || $rom == "3"){
                            $surl = esc_url( home_url( '/tempe/' ) );
                        }else if(is_page_template('phoenix_current_home.php') || is_page(array(121,538,546,115,109,104,153,1643,1633,1623,1802,1815,1908)) || $rom == "4"){
                            $surl = esc_url( home_url( '/phoenix/' ) );
                        }else if(is_page_template('west_palm_current_home.php') || is_page(array(125,551,554,117,111,106,154,14,1698,1688,1678,1683,1805,1821)) || $rom == "5"){
                            $surl = esc_url( home_url( '/west-palm-beach/' ) );
                        }else if(is_page_template('brea_front_page.php') || is_page(array(2095, 2093, 2100, 2102, 2098)) ||  $rom == "7"){
                            $surl = esc_url( home_url( '/brea/' ) );
                        }else if(is_page_template('miami_front.php') || is_page(array(2138, 2140, 2142, 2149, 2146)) ||  $rom == "8"){
                            $surl = esc_url( home_url( '/miami/' ) );
                        }else{
                            $surl = esc_url( home_url( '/' ) );
                        }
                    ?>
                        <a href="<?php echo $surl; ?>">
<?php
			if(is_page_template('tempe_current_home.php') || is_page(array(119,565,572,113,83,102,152,166,1566,1586,1576,1812)) || $rom == "3"){
?>
                         <!-- <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/copper-blues-logo-border.png" alt="Copper Blues Logo" class="brdr" />
                            <img src="http://www.copperblueslive.com/wp-content/uploads/2016/08/no-ring-logo.png" alt="Copper Blues Logo" class="logo-img" /> -->
                          <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/logo-combo.png" alt="Copper Blues Logo" />
<?php
                        }else if(is_page_template('phoenix_current_home.php') || is_page(array(121,538,546,115,109,104,153,1643,1633,1623,1802,1815,1908)) || $rom == "4"){
?>
                        <!-- <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/copper-blues-logo-border.png" alt="Copper Blues Logo" class="brdr" />
                            <img src="http://www.copperblueslive.com/wp-content/uploads/2016/08/no-ring-logo.png" alt="Copper Blues Logo" class="logo-img" /> -->
                          <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/logo-combo.png" alt="Copper Blues Logo" />
<?php
                        }else if(is_page_template('west_palm_current_home.php') || is_page(array(125,551,554,117,111,106,154,14,1698,1688,1678,1683,1805,1821)) || $rom == "5"){
?>
                    <!-- <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/copper-blues-logo-border.png" alt="Copper Blues Logo" class="brdr" />
                            <img src="http://www.copperblueslive.com/wp-content/uploads/2016/08/no-ring-logo.png" alt="Copper Blues Logo" class="logo-img" /> -->
                          <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/logo-combo.png" alt="Copper Blues Logo" />
<?php
                        }else if (is_page_template('oxnard_front_page.php') || is_page(array(1345, 1354, 1366, 1377, 1492, 1861, 2237, 2240)) || $rom == "6" )
{
?>
			<!-- <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/copper-blues-logo-border.png" alt="Copper Blues Logo" class="brdr" />
                            <img src="http://www.copperblueslive.com/wp-content/uploads/2016/08/no-ring-logo.png" alt="Copper Blues Logo" class="logo-img" /> -->
                          <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/logo-combo.png" alt="Copper Blues Logo" />
<?php
		}else if (is_page_template('brea_front_page.php') || is_page(array(2095, 2093, 2100, 2102, 2098)) ||  $rom == "7" )
{
?>
<!-- <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/copper-blues-logo-border.png" alt="Copper Blues Logo" class="brdr" />
                            <img src="http://www.copperblueslive.com/wp-content/uploads/2016/08/no-ring-logo.png" alt="Copper Blues Logo" class="logo-img" /> -->
                          <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/logo-combo.png" alt="Copper Blues Logo" />
<?php
		}else if (is_page_template('miami_front.php') || is_page(array(2138, 2140, 2142, 2149, 2146)) ||  $rom == "8" )
{
?>
<!-- <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/copper-blues-logo-border.png" alt="Copper Blues Logo" class="brdr" />
                            <img src="http://www.copperblueslive.com/wp-content/uploads/2016/08/no-ring-logo.png" alt="Copper Blues Logo" class="logo-img" /> -->
                          <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/logo-combo.png" alt="Copper Blues Logo" />
<?php
		}
else
{
?>
	 <!-- <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/copper-blues-logo-border.png" alt="Copper Blues Logo" class="brdr" />
                            <img src="http://www.copperblueslive.com/wp-content/uploads/2016/08/no-ring-logo.png" alt="Copper Blues Logo" class="logo-img" /> -->
                          <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/logo-combo.png" alt="Copper Blues Logo" />
<?php
                        }
                    ?>
                        </a>
                    </div>
                    <div class="header-right">
                            <span class="map-small-desk">
                                <?php
                                    if (is_page_template('tempe_current_home.php') || is_page(array(119,565,572,113,83,102,152,166,1566,1586,1576,1812)) || $rom == "3" )
                                    {
                                    ?>
                                        
                                       <?php
                                    }
                                    if (is_page_template('phoenix_current_home.php') || is_page(array(121,538,546,115,109,104,153,167,1643,1633,1623,1802,1815,1908)) || $rom == "4" )
                                    {
                                    ?>
                                       
                                       <?php
                                    }
                                    if (is_page_template('west_palm_current_home.php') || is_page(array(125,551,554,117,111,106,154,14,168,1698,1688,1678,1683,1805,1821)) || $rom == "5" )
                                    {
                                    ?>
                                       
                                       <?php
                                    }
				if (is_page_template('oxnard_front_page.php') || is_page(array(1345, 1354, 1366, 1377, 1492, 1861, 2237, 2240)) || $rom == "6" )
                                    {
                                    ?>
                                     <?php
                                    }
				if (is_page_template('brea_front_page.php') || is_page(array(2095, 2093, 2100, 2102, 2098)) ||  $rom == "7" )
                                    {
                                    ?>
                                       
                                       <?php
                                    }
									if (is_page_template('miami_front.php') || is_page(array(2138, 2140, 2142, 2149, 2146)) ||  $rom == "8" )
                                    {
                                    ?>
                                       
                                       <?php
                                    }
									?>
                            </span>
                    <!--        <div class="social social-ss">
                                 <?php
                               if (is_page_template('tempe_current_home.php') || is_page(array(119,565,572,113,83,102,152,166,1566,1586,1576,1812)) || $rom == "3" )
                                {
                                dynamic_sidebar( 'tempe-social' );
                                }
                                if (is_page_template('phoenix_current_home.php') || is_page(array(121,538,546,115,109,104,153,167,1643,1633,1623,1802,1815,1908)) || $rom == "4" )
                                {
                                dynamic_sidebar( 'phoenix-social' );
                                }
                                if (is_page_template('west_palm_current_home.php') || is_page(array(125,551,554,117,111,106,154,14,168,1698,1688,1678,1683,1805,1821)) || $rom == "5" )
                                {
                                dynamic_sidebar( 'westpalm-current-social' );
                                }
				if (is_page_template('oxnard_front_page.php') || is_page_template('brea_front_page.php') || is_page(array(2095, 2093, 2100, 2102, 2098)) ||  is_page(array(1345, 1354, 1366, 1377, 1492, 1861, 2237, 2240)) || $rom == "6" )
                                {
                                dynamic_sidebar( 'oxnard-social' );
                                }
                               if (is_page_template('brea_front_page.php') || is_page(array(2095, 2093, 2100, 2102, 2098)) ||  $rom == "7" )
                                {
                                dynamic_sidebar( 'brea-social' );
                                }
								if (is_page_template('miami_front.php') || is_page(array(2138, 2140, 2142, 2149, 2146)) ||  $rom == "8" )
                                {
                                dynamic_sidebar( 'miami-social' );
                                }
                                 ?>
                            </div> -->

                            <div class="social social-bs">
                                <span class="map-small-ss">
                                  <!-- <button class="loc-but">
                                        <img src="<?php bloginfo('template_url'); ?>/images/map-small.png" alt="location map" class="normal" />
                                        <img src="<?php bloginfo('template_url'); ?>/images/map-small-2x.png" alt="location map" class="retina" />
                                    </button> -->
                                    <?php
                                    if (is_page_template('tempe_current_home.php') || is_page(array(119,565,572,113,83,102,152,166,1566,1586,1576,1812)) || $rom == "3" )
                                    {
                                   ?>
                                 
                                   <?php
                                    }
                                    if (is_page_template('phoenix_current_home.php') || is_page(array(121,538,546,115,109,104,153,167,1643,1633,1623,1802,1815,1908)) || $rom == "4" )
                                    {
                                     ?>
                                   
                                   <?php
                                    }
                                    if (is_page_template('west_palm_current_home.php') || is_page(array(125,551,554,117,111,106,154,14,168,1698,1688,1678,1683,1805,1821)) || $rom == "5" )
                                    {
                                    ?>
                                   
                                   <?php
                                    }
				if (is_page_template('oxnard_front_page.php') || is_page(array(1345, 1354, 1366, 1377, 1492, 1861, 2237, 2240)) || $rom == "6" )
                                    {
                                    ?>
                                     
<?php
                                    }
				if (is_page_template('brea_front_page.php') || is_page(array(2095, 2093, 2100, 2102, 2098)) ||  $rom == "7" )
                                    {
                                    ?>

                                   <?php
                                    }
									if (is_page_template('miami_front.php') || is_page(array(2138, 2140, 2142, 2149, 2146)) ||  $rom == "8" )
                                    {
                                    ?>

                                   <?php
                                    }
                                     ?>
                                </span>
                                 <?php
                                if (is_page_template('tempe_current_home.php') || is_page(array(119,565,572,113,83,102,152,166,1566,1586,1576,1812)) || $rom == "3" )
                                {
                                dynamic_sidebar( 'tempe-social' );
                                }
                                if (is_page_template('phoenix_current_home.php') || is_page(array(121,538,546,115,109,104,153,167,1643,1633,1623,1802,1815,1908)) || $rom == "4" )
                                {
                                dynamic_sidebar( 'phoenix-social' );
                                }
                                if (is_page_template('west_palm_current_home.php') || is_page(array(125,551,554,117,111,106,154,14,168,1698,1688,1678,1683,1805,1821)) || $rom == "5" )
                                {
                                dynamic_sidebar( 'westpalm-current-social' );
                                }
				if (is_page_template('oxnard_front_page.php') || is_page(array(1345, 1354, 1366, 1377, 1492, 1861, 2237, 2240)) || $rom == "6" )
                                {
                                dynamic_sidebar( 'oxnard-social' );
                                }
                                 if (is_page_template('brea_front_page.php') || is_page(array(2095, 2093, 2100, 2102, 2098)) ||  $rom == "7" )
                                {
                                dynamic_sidebar( 'brea-social' );
                                }
								 if (is_page_template('miami_front.php') || is_page(array(2138, 2140, 2142, 2149, 2146)) ||  $rom == "8" )
                                {
                                dynamic_sidebar( 'miami-social' );
                                }
				else
				{ ?>
					
			<?php
				}
                                 ?>
                            </div>
                        <div class="logo logo-ss">  <?php
                    if(is_page_template('tempe_current_home.php') || is_page(array(119,565,572,113,83,102,152,166,1566,1586,1576,1812)) || $rom == "3"){
                            $surl = esc_url( home_url( '/tempe/' ) );
                        }else if(is_page_template('phoenix_current_home.php') || is_page(array(121,538,546,115,109,104,153,1643,1633,1623,1802,1815,1908)) || $rom == "4"){
                            $surl = esc_url( home_url( '/phoenix/' ) );
                        }else if(is_page_template('west_palm_current_home.php') || is_page(array(125,551,554,117,111,106,154,14,1698,1688,1678,1683,1805,1821)) || $rom == "5"){
                            $surl = esc_url( home_url( '/west-palm-beach/' ) );
                        }else if(is_page_template('brea_front_page.php') || is_page(array(2095, 2093, 2100, 2102, 2098)) ||  $rom == "7"){
                            $surl = esc_url( home_url( '/brea/' ) );
                        }else if(is_page_template('miami_front.php') || is_page(array(2138, 2140, 2142, 2149, 2146)) ||  $rom == "8"){
                            $surl = esc_url( home_url( '/miami/' ) );
                        }else{
                            $surl = esc_url( home_url( '/' ) );
                        }
                    ?>
                        <a href="<?php echo $surl; ?>">
<?php
			 if(is_page_template('tempe_current_home.php') || is_page(array(119,565,572,113,83,102,152,166,1566,1586,1576,1812)) || $rom == "3"){
?>
                        <!-- <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/copper-blues-logo-border.png" alt="Copper Blues Logo" class="brdr" />
                            <img src="http://www.copperblueslive.com/wp-content/uploads/2016/08/no-ring-logo.png" alt="Copper Blues Logo" class="logo-img" /> -->
                           <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/logo-combo.png" alt="Copper Blues Logo" />
<?php
                        }else if(is_page_template('phoenix_current_home.php') || is_page(array(121,538,546,115,109,104,153,1643,1633,1623,1802,1815,1908)) || $rom == "4"){
?>
                       <!-- <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/copper-blues-logo-border.png" alt="Copper Blues Logo" class="brdr" />
                            <img src="http://www.copperblueslive.com/wp-content/uploads/2016/08/no-ring-logo.png" alt="Copper Blues Logo" class="logo-img" /> -->
                           <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/logo-combo.png" alt="Copper Blues Logo" />
<?php
                        }else if(is_page_template('west_palm_current_home.php') || is_page(array(125,551,554,117,111,106,154,14,1698,1688,1678,1683,1805,1821)) || $rom == "5"){
?>
                          <!-- <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/copper-blues-logo-border.png" alt="Copper Blues Logo" class="brdr" />
                            <img src="http://www.copperblueslive.com/wp-content/uploads/2016/08/no-ring-logo.png" alt="Copper Blues Logo" class="logo-img" /> -->
                           <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/logo-combo.png" alt="Copper Blues Logo" />
<?php
                        }else if (is_page_template('oxnard_front_page.php') || is_page_template('brea_front_page.php') || is_page(array(2095, 2093, 2100, 2102, 2098)) ||  is_page(array(1345, 1354, 1366, 1377, 1492, 1861, 2237, 2240)) || $rom == "6" )
{
?>
<!-- <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/copper-blues-logo-border.png" alt="Copper Blues Logo" class="brdr" />
                            <img src="http://www.copperblueslive.com/wp-content/uploads/2016/08/no-ring-logo.png" alt="Copper Blues Logo" class="logo-img" /> -->
                           <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/logo-combo.png" alt="Copper Blues Logo" />
<?php
}else if (is_page_template('brea_front_page.php') || is_page(array(2095, 2093, 2100, 2102, 2098)) ||  $rom == "7" )
{
?>
<!-- <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/copper-blues-logo-border.png" alt="Copper Blues Logo" class="brdr" />
                            <img src="http://www.copperblueslive.com/wp-content/uploads/2016/08/no-ring-logo.png" alt="Copper Blues Logo" class="logo-img" /> -->
                           <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/logo-combo.png" alt="Copper Blues Logo" />
<?php
}
else if (is_page_template('miami_front.php') || is_page(array(2138, 2140, 2142, 2149, 2146)) ||  $rom == "8" ||$rom1 == "8")
{
?>
<!-- <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/copper-blues-logo-border.png" alt="Copper Blues Logo" class="brdr" />
                            <img src="http://www.copperblueslive.com/wp-content/uploads/2016/08/no-ring-logo.png" alt="Copper Blues Logo" class="logo-img" /> -->
                           <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/logo-combo.png" alt="Copper Blues Logo" />
<?php
		}else
{
?>
	 <img src="<?php bloginfo('template_url'); ?>/images/copper-blues-logo-border.png" alt="Copper Blues Logo" class="brdr" />
                            <img src="<?php bloginfo('template_url'); ?>/images/copper-blues-logo-content.png" alt="Copper Blues Logo" />
<?php
                        }
                    ?>
                        </a></div>
<!-- <img src="<?php bloginfo('template_url'); ?>/images/copper-blues-logo-border.png" alt="Copper Blues Logo" class="brdr normal" /><img src="<?php bloginfo('template_url'); ?>/images/copper-blues-logo-content.png" alt="Copper Blues Logo" class="normal" /><img src="<?php bloginfo('template_url'); ?>/images/copper-blues-logo-border-2x.png" alt="Copper Blues Logo" class="brdr retina" /><img src="<?php bloginfo('template_url'); ?>/images/copper-blues-logo-content-2x.png" alt="Copper Blues Logo" class="retina" /> --> 
                        <?php
                        if(is_page_template('tempe_current_home.php') || is_page(array(119,565,572,113,83,102,152,166,1566,1586,1576,1812)) || $rom == "3"){
                            wp_nav_menu( array( 'container_class' => 'navigation topnav', 'menu' => 'Tempe Current' ) );
                        }else if(is_page_template('phoenix_current_home.php') || is_page(array(121,538,546,115,109,104,153,167,1643,1633,1623,1802,1815,1908)) || $rom == "4" ||$rom1 == "4"){
                            wp_nav_menu( array( 'container_class' => 'navigation topnav', 'menu' => 'Phoenix Current' ) );
                        }else if(is_page_template('west_palm_current_home.php') || is_page(array(125,551,554,117,111,106,154,14,168,1698,1688,1678,1683,1805,1821)) ||  $rom == "5" ||$rom1 == "5"){
                            wp_nav_menu( array( 'container_class' => 'navigation topnav', 'menu' => 'West Palm Current' ) );
                        }
			else if(is_page_template('oxnard_front_page.php') || is_page(array(1345, 1354, 1366, 1377, 1492, 1861, 2237, 2240)) || $rom == "6" || $rom1 == "6"){
                            wp_nav_menu( array( 'container_class' => 'navigation topnav', 'menu' => 'Oxnard' ) );
                        }
                       else if(is_page_template('brea_front_page.php') || is_page(array(2095, 2093, 2100, 2102, 2098)) ||  $rom == "7" ||$rom1 == "7"){
                            wp_nav_menu( array( 'container_class' => 'navigation topnav', 'menu' => 'Brea' ) );
                        }
						else if(is_page_template('miami_front.php') || is_page(array(2138, 2140, 2142, 2149, 2146)) ||  $rom == "8" ||$rom1 == "8"){
                            wp_nav_menu( array( 'container_class' => 'navigation topnav', 'menu' => 'Miami' ) );
                        }
			else{
                            wp_nav_menu( array( 'container_class' => 'navigation topnav', 'menu' => 'main' ) );
                        }
                        ?>
                    </div>
                </header>
				 <?php
			if(is_page_template('tempe_current_home.php') || is_page(array(119,565,572,113,83,102,152,166,1566,1586,1576,1812)) || $rom == "3"){
?>
                        <header class="my-header">
<?php
                        }else if(is_page_template('phoenix_current_home.php') || is_page(array(121,538,546,115,109,104,153,1643,1633,1623,1802,1815,1908)) || $rom == "4"){
?>
                        <header class="my-header">
<?php
                        }else if(is_page_template('west_palm_current_home.php') || is_page(array(125,551,554,117,111,106,154,14,1698,1688,1678,1683,1805,1821)) || $rom == "5"){
?>
                          <header class="my-header">
<?php
                        }else if (is_page_template('oxnard_front_page.php') || is_page(array(1345, 1354, 1366, 1377, 1492, 1861, 2237, 2240)) || $rom == "6" )
{
?>
                        <header class="my-header">
<?php
                        }else if (is_page_template('brea_front_page.php') || is_page(array(2095, 2093, 2100, 2102, 2098)) ||  $rom == "7" )
{
?>
                      <header class="my-header">
<?php
		}else
{
?>
	 <header class="my-header">
<?php
                        }
                    ?>
                    <div class="logo logo-bs">
                    <?php
                    if(is_page_template('tempe_current_home.php') || is_page(array(119,565,572,113,83,102,152,166,1566,1586,1576,1812)) || $rom == "3"){
                            $surl = esc_url( home_url( '/tempe/' ) );
                        }else if(is_page_template('phoenix_current_home.php') || is_page(array(121,538,546,115,109,104,153,1643,1633,1623,1802,1815,1908)) || $rom == "4"){
                            $surl = esc_url( home_url( '/phoenix/' ) );
                        }else if(is_page_template('west_palm_current_home.php') || is_page(array(125,551,554,117,111,106,154,14,1698,1688,1678,1683,1805,1821)) || $rom == "5"){
                            $surl = esc_url( home_url( '/west-palm-beach/' ) );
                        }else if(is_page_template('brea_front_page.php') || is_page(array(2095, 2093, 2100, 2102, 2098)) ||  $rom == "6"){
                            $surl = esc_url( home_url( '/brea/' ) );
                        }else if(is_page_template('miami_front.php') || is_page(array(2138, 2140, 2142, 2149, 2146)) ||  $rom == "8"){
                            $surl = esc_url( home_url( '/miami/' ) );
                        }else{
                            $surl = esc_url( home_url( '/' ) );
                        }
                    ?>
                        <a href="<?php echo $surl; ?>">
<?php
			if(is_page_template('tempe_current_home.php') || is_page(array(119,565,572,113,83,102,152,166,1566,1586,1576,1812)) || $rom == "3"){
?>
                         <!-- <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/copper-blues-logo-border.png" alt="Copper Blues Logo" class="brdr" />
                            <img src="http://www.copperblueslive.com/wp-content/uploads/2016/08/no-ring-logo.png" alt="Copper Blues Logo" class="logo-img" /> -->
                           <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/logo-combo.png" alt="Copper Blues Logo" />
<?php
                        }else if(is_page_template('phoenix_current_home.php') || is_page(array(121,538,546,115,109,104,153,1643,1633,1623,1802,1815,1908)) || $rom == "4"){
?>
                       <!-- <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/copper-blues-logo-border.png" alt="Copper Blues Logo" class="brdr" />
                            <img src="http://www.copperblueslive.com/wp-content/uploads/2016/08/no-ring-logo.png" alt="Copper Blues Logo" class="logo-img" /> -->
                           <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/logo-combo.png" alt="Copper Blues Logo" />
<?php
                        }else if(is_page_template('west_palm_current_home.php') || is_page(array(125,551,554,117,111,106,154,14,1698,1688,1678,1683,1805,1821)) || $rom == "5"){
?>
                          <!-- <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/copper-blues-logo-border.png" alt="Copper Blues Logo" class="brdr" />
                            <img src="http://www.copperblueslive.com/wp-content/uploads/2016/08/no-ring-logo.png" alt="Copper Blues Logo" class="logo-img" /> -->
                           <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/logo-combo.png" alt="Copper Blues Logo" />
<?php
                        }else if (is_page_template('oxnard_front_page.php') || is_page(array(1345, 1354, 1366, 1377, 1492, 1861, 2237, 2240)) || $rom == "6" )
{
?>
			<!-- <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/copper-blues-logo-border.png" alt="Copper Blues Logo" class="brdr" />
                            <img src="http://www.copperblueslive.com/wp-content/uploads/2016/08/no-ring-logo.png" alt="Copper Blues Logo" class="logo-img" /> -->
                          <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/logo-combo.png" alt="Copper Blues Logo" />
<?php
                        }else if (is_page_template('brea_front_page.php') || is_page(array(2095, 2093, 2100, 2102, 2098)) ||  $rom == "7" )
{
?>
			<!-- <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/copper-blues-logo-border.png" alt="Copper Blues Logo" class="brdr" />
                            <img src="http://www.copperblueslive.com/wp-content/uploads/2016/08/no-ring-logo.png" alt="Copper Blues Logo" class="logo-img" /> -->
                          <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/logo-combo.png" alt="Copper Blues Logo" />
<?php
 }else if (is_page_template('miami_front.php') || is_page(array(2138, 2140, 2142, 2149, 2146)) ||  $rom == "8" )
{
?>
			<!-- <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/copper-blues-logo-border.png" alt="Copper Blues Logo" class="brdr" />
                            <img src="http://www.copperblueslive.com/wp-content/uploads/2016/08/no-ring-logo.png" alt="Copper Blues Logo" class="logo-img" /> -->
                          <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/logo-combo.png" alt="Copper Blues Logo" />
<?php
		}else
{
?>
	<!-- <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/copper-blues-logo-border.png" alt="Copper Blues Logo" class="brdr" />
                            <img src="http://www.copperblueslive.com/wp-content/uploads/2016/08/no-ring-logo.png" alt="Copper Blues Logo" class="logo-img" /> -->
                          <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/logo-combo.png" alt="Copper Blues Logo" />
<?php
                        }
                    ?>
                        </a>
                    </div>
                    <div class="header-right">
                            <span class="map-small-desk">
                                <?php
                                    if (is_page_template('tempe_current_home.php') || is_page(array(119,565,572,113,83,102,152,166,1566,1586,1576,1812)) || $rom == "3" )
                                    {
                                    ?>
                                       
                                       <?php
                                    }
                                    if (is_page_template('phoenix_current_home.php') || is_page(array(121,538,546,115,109,104,153,167,1643,1633,1623,1802,1815,1908)) || $rom == "4" )
                                    {
                                    ?>
                                      
                                       <?php
                                    }
                                    if (is_page_template('west_palm_current_home.php') || is_page(array(125,551,554,117,111,106,154,14,168,1698,1688,1678,1683,1805,1821)) || $rom == "5" )
                                    {
                                    ?>
                                        
                                       <?php
                                    }
				if (is_page_template('oxnard_front_page.php') || is_page(array(1345, 1354, 1366, 1377, 1492, 1861, 2237, 2240)) || $rom == "6" )
                                    {
                                    ?>
                                      <?php
                                    }
				if (is_page_template('brea_front_page.php') || is_page(array(2095, 2093, 2100, 2102, 2098)) ||  $rom == "7" )
                                    {
                                    ?> 
                                       <?php
                                    }
                                ?>
                            </span>
                    <!--        <div class="social social-ss">
                                 <?php
                                if (is_page_template('tempe_current_home.php') || is_page(array(119,565,572,113,83,102,152,166,1566,1586,1576,1812)) || $rom == "3" )
                                {
                                dynamic_sidebar( 'tempe-social' );
                                }
                                if (is_page_template('phoenix_current_home.php') || is_page(array(121,538,546,115,109,104,153,167,1643,1633,1623,1802,1815,1908)) || $rom == "4" )
                                {
                                dynamic_sidebar( 'phoenix-social' );
                                }
                                if (is_page_template('west_palm_current_home.php') || is_page(array(125,551,554,117,111,106,154,14,168,1698,1688,1678,1683,1805,1821)) || $rom == "5" )
                                {
                                dynamic_sidebar( 'westpalm-current-social' );
                                }
				if (is_page_template('oxnard_front_page.php') || is_page(array(1345, 1354, 1366, 1377, 1492, 1861, 2237, 2240)) || $rom == "6" )
                                {
                                dynamic_sidebar( 'oxnard-social' );
                                }
                                 if (is_page_template('brea_front_page.php') || is_page(array(2095, 2093, 2100, 2102, 2098)) ||  $rom == "7" )
                                {
                                dynamic_sidebar( 'brea-social' );
                                }
								 if (is_page_template('miami_front.php') || is_page(array(2138, 2140, 2142, 2149, 2146)) ||  $rom == "8" )
                                {
                                dynamic_sidebar( 'miami-social' );
                                }
                                 ?>
                            </div> -->

                            <div class="social social-bs">
                                <span class="map-small-ss">
                                  <!-- <button class="loc-but">
                                        <img src="<?php bloginfo('template_url'); ?>/images/map-small.png" alt="location map" class="normal" />
                                        <img src="<?php bloginfo('template_url'); ?>/images/map-small-2x.png" alt="location map" class="retina" />
                                    </button> -->
                                    <?php
                                    if (is_page_template('tempe_current_home.php') || is_page(array(119,565,572,113,83,102,152,166,1566,1586,1576,1812)) || $rom == "3" )
                                    {
                                   ?>
                                   
                                   <?php
                                    }
                                    if (is_page_template('phoenix_current_home.php') || is_page(array(121,538,546,115,109,104,153,167,1643,1633,1623,1802,1815,1908)) || $rom == "4" )
                                    {
                                     ?>
                                     
                                   <?php
                                    }
                                    if (is_page_template('west_palm_current_home.php') || is_page(array(125,551,554,117,111,106,154,14,168,1698,1688,1678,1683,1805,1821)) || $rom == "5" )
                                    {
                                    ?>
                                    
                                   <?php
                                    }
				if (is_page_template('oxnard_front_page.php') || is_page(array(1345, 1354, 1366, 1377, 1492, 1861, 2237, 2240)) || $rom == "6" )
                                    {
                                    ?>

                                   <?php
                                    }
				if (is_page_template('brea_front_page.php') || is_page(array(2095, 2093, 2100, 2102, 2098)) ||  $rom == "7" )
                                    {
                                    ?>
                                     
                                   <?php
                                    }
									if (is_page_template('miami_front.php') || is_page(array(2138, 2140, 2142, 2149, 2146)) ||  $rom == "8" )
                                    {
                                    ?>
                                     
                                   <?php
                                    }
                                     ?>
                                </span>
                                 <?php
                                if (is_page_template('tempe_current_home.php') || is_page(array(119,565,572,113,83,102,152,166,1566,1586,1576,1812)) || $rom == "3" )
                                {
                                dynamic_sidebar( 'tempe-social' );
                                }
                                if (is_page_template('phoenix_current_home.php') || is_page(array(121,538,546,115,109,104,153,167,1643,1633,1623,1802,1815,1908)) || $rom == "4" )
                                {
                                dynamic_sidebar( 'phoenix-social' );
                                }
                                if (is_page_template('west_palm_current_home.php') || is_page(array(125,551,554,117,111,106,154,14,168,1698,1688,1678,1683,1805,1821)) || $rom == "5" )
                                {
                                dynamic_sidebar( 'westpalm-current-social' );
                                }
				if (is_page_template('oxnard_front_page.php') || is_page(array(1345, 1354, 1366, 1377, 1492, 1861, 2237, 2240)) || $rom == "6" )
                                {
                                dynamic_sidebar( 'oxnard-social' );
                                }
				if (is_page_template('brea_front_page.php') || is_page(array(2095, 2093, 2100, 2102, 2098)) ||  $rom == "7" )
                                {
                                dynamic_sidebar( 'brea-social' );
                                }
								if (is_page_template('miami_front.php') || is_page(array(2138, 2140, 2142, 2149, 2146)) ||  $rom == "8" )
                                {
                                dynamic_sidebar( 'miami-social' );
                                }

				else
				{ ?>
					
			<?php
				}
                                 ?>
                            </div>
                        <div class="logo logo-ss">  <?php
                    if(is_page_template('tempe_current_home.php') || is_page(array(119,565,572,113,83,102,152,166,1566,1586,1576,1812)) || $rom == "3"){
                            $surl = esc_url( home_url( '/tempe/' ) );
                        }else if(is_page_template('phoenix_current_home.php') || is_page(array(121,538,546,115,109,104,153,1643,1633,1623,1802,1815,1908)) || $rom == "4"){
                            $surl = esc_url( home_url( '/phoenix/' ) );
                        }else if(is_page_template('west_palm_current_home.php') || is_page(array(125,551,554,117,111,106,154,14,1698,1688,1678,1683,1805,1821)) || $rom == "5"){
                            $surl = esc_url( home_url( '/west-palm-beach/' ) );
                        }else if(is_page_template('brea_front_page.php') || is_page(array(2095, 2093, 2100, 2102, 2098)) ||  $rom == "7"){
                            $surl = esc_url( home_url( '/brea/' ) );
                        }else if(is_page_template('miami_front.php') || is_page(array(2138, 2140, 2142, 2149, 2146)) ||  $rom == "8"){
                            $surl = esc_url( home_url( '/miami/' ) );
                        }
						else{
                            $surl = esc_url( home_url( '/' ) );
                        }
                    ?>
                        <a href="<?php echo $surl; ?>">
<?php
			if(is_page_template('tempe_current_home.php') || is_page(array(119,565,572,113,83,102,152,166,1566,1586,1576,1812)) || $rom == "3"){
?>
                      <!-- <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/copper-blues-logo-border.png" alt="Copper Blues Logo" class="brdr" />
                            <img src="http://www.copperblueslive.com/wp-content/uploads/2016/08/no-ring-logo.png" alt="Copper Blues Logo" class="logo-img" /> -->
                           <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/logo-combo.png" alt="Copper Blues Logo" />
<?php
                        }else if(is_page_template('phoenix_current_home.php') || is_page(array(121,538,546,115,109,104,153,1643,1633,1623,1802,1815,1908)) || $rom == "4"){
?>
                         <!-- <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/copper-blues-logo-border.png" alt="Copper Blues Logo" class="brdr" />
                            <img src="http://www.copperblueslive.com/wp-content/uploads/2016/08/no-ring-logo.png" alt="Copper Blues Logo" class="logo-img" /> -->
                           <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/logo-combo.png" alt="Copper Blues Logo" />
<?php
                        }else if(is_page_template('west_palm_current_home.php') || is_page(array(125,551,554,117,111,106,154,14,1698,1688,1678,1683,1805,1821)) || $rom == "5"){
?>
                               <!-- <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/copper-blues-logo-border.png" alt="Copper Blues Logo" class="brdr" />
                            <img src="http://www.copperblueslive.com/wp-content/uploads/2016/08/no-ring-logo.png" alt="Copper Blues Logo" class="logo-img" /> -->
                           <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/logo-combo.png" alt="Copper Blues Logo" />
<?php
                        }else if (is_page_template('oxnard_front_page.php') || is_page(array(1345, 1354, 1366, 1377, 1492, 1861, 2237, 2240)) || $rom == "6" )
{
?>
<!-- <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/copper-blues-logo-border.png" alt="Copper Blues Logo" class="brdr" />
                            <img src="http://www.copperblueslive.com/wp-content/uploads/2016/08/no-ring-logo.png" alt="Copper Blues Logo" class="logo-img" /> -->
                           <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/logo-combo.png" alt="Copper Blues Logo" />
<?php
                        }else if (is_page_template('brea_front_page.php') || is_page(array(2095, 2093, 2100, 2102, 2098)) ||  $rom == "7" )
{
?>
<!-- <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/copper-blues-logo-border.png" alt="Copper Blues Logo" class="brdr" />
                            <img src="http://www.copperblueslive.com/wp-content/uploads/2016/08/no-ring-logo.png" alt="Copper Blues Logo" class="logo-img" /> -->
                           <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/logo-combo.png" alt="Copper Blues Logo" />
<?php
		}
else if(is_page_template('miami_front.php') || is_page(array(2138, 2140, 2142, 2149, 2146)) ||  $rom == "8" ||$rom1 == "8")
{
?>
<!-- <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/copper-blues-logo-border.png" alt="Copper Blues Logo" class="brdr" />
                            <img src="http://www.copperblueslive.com/wp-content/uploads/2016/08/no-ring-logo.png" alt="Copper Blues Logo" class="logo-img" /> -->
                           <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/logo-combo.png" alt="Copper Blues Logo" />
<?php
		}else
{
?>
	 <!-- <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/copper-blues-logo-border.png" alt="Copper Blues Logo" class="brdr" />
                            <img src="http://www.copperblueslive.com/wp-content/uploads/2016/08/no-ring-logo.png" alt="Copper Blues Logo" class="logo-img" /> -->
                           <img src="http://www.copperblueslive.com/wp-content/themes/copperblues/images/logo-combo.png" alt="Copper Blues Logo" />
<?php
                        }
                    ?>
                        </a></div>
<!-- <img src="<?php bloginfo('template_url'); ?>/images/copper-blues-logo-border.png" alt="Copper Blues Logo" class="brdr normal" /><img src="<?php bloginfo('template_url'); ?>/images/copper-blues-logo-content.png" alt="Copper Blues Logo" class="normal" /><img src="<?php bloginfo('template_url'); ?>/images/copper-blues-logo-border-2x.png" alt="Copper Blues Logo" class="brdr retina" /><img src="<?php bloginfo('template_url'); ?>/images/copper-blues-logo-content-2x.png" alt="Copper Blues Logo" class="retina" /> --> 
                        <?php
                        if(is_page_template('tempe_current_home.php') || is_page(array(119,565,572,113,83,102,152,166,1566,1586,1576,1812)) || $rom == "3" ||$rom1 == "3"){
                            wp_nav_menu( array( 'container_class' => 'navigation topnav', 'menu' => 'Tempe Current' ) );
                        }else if(is_page_template('phoenix_current_home.php') || is_page(array(121,538,546,115,109,104,153,167,1643,1633,1623,1802,1815,1908)) || $rom == "4" ||$rom1 == "4"){
                            wp_nav_menu( array( 'container_class' => 'navigation topnav', 'menu' => 'Phoenix Current' ) );
                        }else if(is_page_template('west_palm_current_home.php') || is_page(array(125,551,554,117,111,106,154,14,168,1698,1688,1678,1683,1805,1821)) ||  $rom == "5" ||$rom1 == "5"){
                            wp_nav_menu( array( 'container_class' => 'navigation topnav', 'menu' => 'West Palm Current' ) );
                        }
			else if(is_page_template('oxnard_front_page.php') || is_page(array(1345, 1354, 1366, 1377, 1492, 1861, 2237, 2240)) ||  $rom == "6" ||$rom1 == "6"){
                            wp_nav_menu( array( 'container_class' => 'navigation topnav', 'menu' => 'Oxnard' ) );
                        }

			else if(is_page_template('brea_front_page.php') || is_page(array(2095, 2093, 2100, 2102, 2098)) ||  $rom == "7" ||$rom1 == "7"){
                            wp_nav_menu( array( 'container_class' => 'navigation topnav', 'menu' => 'Brea' ) );
                        }
						else if(is_page_template('miami_front.php') || is_page(array(2138, 2140, 2142, 2149, 2146)) ||  $rom == "8" ||$rom1 == "8"){
                            wp_nav_menu( array( 'container_class' => 'navigation topnav', 'menu' => 'Miami' ) );
                        }
			else{
                            wp_nav_menu( array( 'container_class' => 'navigation topnav', 'menu' => 'main' ) );
                        }
                        ?>
                    </div>
                </header>
                <div class="clear"></div>
<center><div class="subscribe">
                            <?php echo do_shortcode('[subscribe2]'); ?>
                            <!--<span>subscribe to our mailing list for news about brews:</span>
                            <form method="post" id="newsletterform" novalidate><input type="hidden" value="10.10.136.73" name="ip">
                                <span style="display:none !important">
                                    <label for="name">Leave Blank:</label>
                                    <input type="text" name="name" id="name">
                                    <label for="uri">Do Not Change:</label>
                                    <input type="text" value="http://" name="uri" id="uri">
                                </span>
                                <p>
                                    <label for="s2email"></label>
                                    <input type="text" onBlur="if (this.value == '') {this.value = 'Your email address';}" onFocus="if (this.value == 'Your email address') {this.value = '';}" size="20" value="Your email address" id="s2email" name="email" class="input-box text">
                                </p>
                                <p>
                                    <input type="submit" value="tap it" name="subscribe" class="subscribeButton btn button">
                                </p>
                            </form>-->
                        </div></center>