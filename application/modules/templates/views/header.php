<head>

	<!-- Site meta -->
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://localhost/MVCProject/app/media/ico/favicon.ico">

    <title>Evaluame.org</title>
	<!-- CSS -->
	
	
	<?php
		if (ENVIRONMENT == 'production' || ENVIRONMENT == 'testing')$projectFolder='';
	    else $projectFolder='/MVCProjectCodeIgniter';
	    
		echo '<link href="'.$projectFolder.'/application/front_end_components/bootstrap/css/bootstrap.css" rel="stylesheet">';
		echo '<link href="'.$projectFolder.'/application/front_end_components/bootstrap/css/bootstrap-theme.css" rel="stylesheet">';
		echo '<link href="'.$projectFolder.'/application/front_end_components/bootstrap/css/theme.css" rel="stylesheet">';		
		echo '<link href="'.$projectFolder.'/application/front_end_components/metisMenu/css/metis-menu.min.css" rel="stylesheet">';
		echo '<link href="'.$projectFolder.'/application/front_end_components/timeline/css/timeline.css" rel="stylesheet">';
		
		echo '<link href="'.$projectFolder.'/application/front_end_components/custom/css/custom.css" rel="stylesheet">';
		echo '<link href="'.$projectFolder.'/application/front_end_components/custom/css/sb-admin-2.css" rel="stylesheet">';
		echo '<link href="'.$projectFolder.'/application/front_end_components/custom/css/shop-item.css" rel="stylesheet">';
		echo '<link href="'.$projectFolder.'/application/front_end_components/custom/css/news-easysticker-config.css" rel="stylesheet">';
		echo '<link href="'.$projectFolder.'/application/front_end_components/custom/css/tweets-easysticker-config.css" rel="stylesheet">';
		
		
		echo '<link href="'.$projectFolder.'/application/front_end_components/morrisJs/css/morris.css" rel="stylesheet">';
		echo '<link href="'.$projectFolder.'/application/front_end_components/fontAwesome/css/font-awesome.min.css" rel="stylesheet">';
		echo '<link href="'.$projectFolder.'/application/front_end_components/starRating/css/star-rating.min.css" rel="stylesheet">';
		
	?>
   <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>