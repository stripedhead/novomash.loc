<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo $init_arr[1];?>">
<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<meta name="wot-verification" content="f3dfc3b6571728bb3a20"/>
<title><?php echo $init_arr[0];?></title>
<link rel="stylesheet" type="text/css" href="<?php echo $dir_normalize;?>">
<?php
if (!$fonts_loading) {?>
<link rel="stylesheet" type="text/css" href="<?php echo $dir_font_regular;?>">
<link rel="stylesheet" type="text/css" href="<?php echo $dir_font_light;?>">
<link rel="stylesheet" type="text/css" href="<?php echo $dir_font_bold;?>">
<?php }	else {?>
<link rel="stylesheet" type="text/css" href="<?php echo $google_fonts;?>">
<?php }	?>
<?php if (!$mode_CDN){?>
<link rel="stylesheet" type="text/css" href="<?php echo $dir_bootstrap_css;?>">
<link rel="stylesheet" type="text/css" href="<?php echo $dir_bootstrap_theam;?>">
<link rel="stylesheet" type="text/css" href="<?php echo $dir_font_awesome;?>">
<link rel="stylesheet" type="text/css" href="<?php echo $dir_css.$FL;?>product-item.css">
<link rel="stylesheet" type="text/css" href="<?php echo $dir_css.$FL;?>clear-code.css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="<?php echo $dir_html5shiv;?>"></script>
<script src="<?php echo $dir_respond;?>"></script>
<![endif]--><?php }	else {?>
<link rel="stylesheet" type="text/css" href="<?php echo $CDN_bootstrap_css;?>">
<link rel="stylesheet" type="text/css" href="<?php echo $CDN_bootstrap_theam;?>">
<link rel="stylesheet" type="text/css" href="<?php echo $CDN_awesome;?>">
<link rel="stylesheet" type="text/css" href="<?php echo $dir_css.$FL;?>product-item.css">
<link rel="stylesheet" type="text/css" href="<?php echo $dir_css.$FL;?>clear-code.css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file: id23// -->
<!--[if lt IE 9]>
<script src="<?php echo $CDN_html5shiv;?>"></script>
<script src="<?php echo $CDN_respond;?>"></script>
<![endif]--><?php }	?>

