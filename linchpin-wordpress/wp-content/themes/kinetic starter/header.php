<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<link rel="Shortcut Icon" href="/favicon.ico" type="image/x-icon" />
<!-- Call stylesheets -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style/css/print.css" type="text/css" media="print" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/style/scripts/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/style/scripts/hoverintent.js"></script>
<script type="text/javascript">
	$(function(){
	    $("#access ul li").hoverIntent(
	    	{  
		  over:function(){$(this).addClass("hover");},
		  out:function(){$(this).removeClass("hover");},
		  timeout:500
		});
	});
</script>

<!-- for only loading things needed on the homepage like rotators -->
<?php if (is_front_page()) { ?>

<?php } ?>

<!-- DO NOT DELETE! The wp_head tag must remain for many plugins to work properly. -->
<?php wp_head(); ?>

</head>
<body>
