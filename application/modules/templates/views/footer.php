<?php
if (ENVIRONMENT == 'production' || ENVIRONMENT == 'testing')
	$projectFolder = '';
else
	$projectFolder = '/evaluame_org';

echo '<script src="' . $projectFolder . '/application/front_end_components/bootstrap/js/jquery.js"></script>';
echo '<script src="' . $projectFolder . '/application/front_end_components/bootstrap/js/bootstrap.js"></script>';
echo '<script src="' . $projectFolder . '/application/front_end_components/metisMenu/js/metis-menu.min.js"></script>';
echo '<script src="' . $projectFolder . '/application/front_end_components/raphael/js/raphael.min.js"></script>';
echo '<script src="' . $projectFolder . '/application/front_end_components/morrisJs/js/morris.min.js"></script>';
echo '<script src="' . $projectFolder . '/application/front_end_components/raphael/js/raphael.min.js"></script>';
echo '<script src="' . $projectFolder . '/application/front_end_components/starRating/js/star-rating.js"></script>';

echo '<script src="' . $projectFolder . '/application/front_end_components/jQueryEasing/js/jquery.easing.min.js"></script>';
echo '<script src="' . $projectFolder . '/application/front_end_components/easyTicker/js/jquery.easy-ticker.js"></script>';

// Flot charts
echo '<script src="' . $projectFolder . '/application/front_end_components/flot/excanvas.min.js"></script>';
echo '<script src="' . $projectFolder . '/application/front_end_components/flot/jquery.flot.js"></script>';
echo '<script src="' . $projectFolder . '/application/front_end_components/flot/jquery.flot.pie.js"></script>';
echo '<script src="' . $projectFolder . '/application/front_end_components/flot/jquery.flot.resize.js"></script>';
echo '<script src="' . $projectFolder . '/application/front_end_components/flot/jquery.flot.time.js"></script>';
echo '<script src="' . $projectFolder . '/application/front_end_components/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>';

echo '<script src="' . $projectFolder . '/application/front_end_components/custom/js/sb-admin-2.js"></script>';
echo '<script src="' . $projectFolder . '/application/front_end_components/custom/js/plot-politician-history.js"></script>';
echo '<script src="' . $projectFolder . '/application/front_end_components/custom/js/news-easysticker-config.js"></script>';
echo '<script src="' . $projectFolder . '/application/front_end_components/custom/js/tweets-easysticker-config.js"></script>';

?>

