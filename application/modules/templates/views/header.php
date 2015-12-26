<head>

<!-- Site meta -->
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="">
<meta name="author" content="">


<!-- 
    
    
    ICO
    
     -->

<link rel="apple-touch-icon" sizes="57x57"
	href="<?php echo get_media_path('ico', 'apple-icon-57x57', 'png'); ?>">
<link rel="apple-touch-icon" sizes="60x60"
	href="<?php echo get_media_path('ico', 'apple-icon-60x60', 'png'); ?>">
<link rel="apple-touch-icon" sizes="72x72"
	href="<?php echo get_media_path('ico', 'apple-icon-72x72', 'png'); ?>">
<link rel="apple-touch-icon" sizes="76x76"
	href="<?php echo get_media_path('ico', 'apple-icon-76x76', 'png'); ?>">
<link rel="apple-touch-icon" sizes="114x114"
	href="<?php echo get_media_path('ico', 'apple-icon-114x114', 'png'); ?>">
<link rel="apple-touch-icon" sizes="120x120"
	href="<?php echo get_media_path('ico', 'apple-icon-120x120', 'png'); ?>">
<link rel="apple-touch-icon" sizes="144x144"
	href="<?php echo get_media_path('ico', 'apple-icon-144x144', 'png'); ?>">
<link rel="apple-touch-icon" sizes="152x152"
	href="<?php echo get_media_path('ico', 'apple-icon-152x152', 'png'); ?>">
<link rel="apple-touch-icon" sizes="180x180"
	href="<?php echo get_media_path('ico', 'apple-icon-180x180', 'png'); ?>">
<link rel="icon" type="image/png" sizes="192x192"
	href="<?php echo get_media_path('ico', 'android-icon-192x192', 'png'); ?>">
<link rel="icon" type="image/png" sizes="32x32"
	href="<?php echo get_media_path('ico', 'favicon-32x32', 'png'); ?>">
<link rel="icon" type="image/png" sizes="96x96"
	href="<?php echo get_media_path('ico', 'favicon-96x96', 'png'); ?>">
<link rel="icon" type="image/png" sizes="16x16"
	href="<?php echo get_media_path('ico', 'avicon-16x16', 'png'); ?>">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">


<title>Evaluame.org</title>
<!-- CSS -->
	
	
	<?php
	if (ENVIRONMENT == 'production' || ENVIRONMENT == 'testing')
		$projectFolder = '';
	else
		$projectFolder = '/evaluame_org';
	
	echo '<link href="' . $projectFolder . '/application/front_end_components/bootstrap/css/bootstrap.css" rel="stylesheet">';
	echo '<link href="' . $projectFolder . '/application/front_end_components/bootstrap/css/bootstrap-theme.css" rel="stylesheet">';
	echo '<link href="' . $projectFolder . '/application/front_end_components/bootstrap/css/theme.css" rel="stylesheet">';
	echo '<link href="' . $projectFolder . '/application/front_end_components/metisMenu/css/metis-menu.min.css" rel="stylesheet">';
	echo '<link href="' . $projectFolder . '/application/front_end_components/timeline/css/timeline.css" rel="stylesheet">';
	
	echo '<link href="' . $projectFolder . '/application/front_end_components/custom/css/custom.css" rel="stylesheet">';
	echo '<link href="' . $projectFolder . '/application/front_end_components/custom/css/sb-admin-2.css" rel="stylesheet">';
	echo '<link href="' . $projectFolder . '/application/front_end_components/custom/css/shop-item.css" rel="stylesheet">';
	echo '<link href="' . $projectFolder . '/application/front_end_components/custom/css/news-easysticker-config.css" rel="stylesheet">';
	echo '<link href="' . $projectFolder . '/application/front_end_components/custom/css/tweets-easysticker-config.css" rel="stylesheet">';
	echo '<link href="' . $projectFolder . '/application/front_end_components/custom/css/comments.css" rel="stylesheet">';
	echo '<link href="' . $projectFolder . '/application/front_end_components/custom/css/scrollable-bar.css" rel="stylesheet">';
	
	echo '<link href="' . $projectFolder . '/application/front_end_components/morrisJs/css/morris.css" rel="stylesheet">';
	echo '<link href="' . $projectFolder . '/application/front_end_components/fontAwesome/css/font-awesome.min.css" rel="stylesheet">';
	echo '<link href="' . $projectFolder . '/application/front_end_components/starRating/css/star-rating.min.css" rel="stylesheet">';
	
	?>
   <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>