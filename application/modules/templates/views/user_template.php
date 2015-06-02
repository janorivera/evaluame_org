<!DOCTYPE html>
<html lang="en">
<?php 
include 'header.php';
?>
<body >
<div class="wrapper">
<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
<?php 
$this->load->module('top_nav');
if (isset($container) && $container=='top_nav')$this->top_nav->display_top_nav($ParentModule,$ParentMethod,$ParentParams);
else $this->top_nav->display_top_nav();
?>

<?php 
$this->load->module('side_nav');
$this->side_nav->display_side_nav();
?>
</nav>

<?php 

if (isset($container)){
if ($container=='main_box'){
		
	$this->load->module($ParentModule);
	$this->$ParentModule->$ParentMethod($ParentParams);
}
}
 else {
 	$this->load->module('mb_welcome');
 	$this->mb_welcome->display_welcome();
 	
 }

?>
</div>
<!-- JS -->
<?php 
include'footer.php';
?>


</body>
</html>