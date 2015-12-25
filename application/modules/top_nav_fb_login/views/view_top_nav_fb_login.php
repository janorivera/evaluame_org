
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"
	href="#"> <i class="fa fa-user fa-fw"></i> <?php echo $user['FirstName']?> <i
		class="fa fa-caret-down"></i>
</a>
	<ul class="dropdown-menu dropdown-user">
		<li><a href="#"><i class="fa fa-user fa-fw"></i> <?php echo $user['FirstName']?></a></li>
		<li><a href="#"><i class="fa fa-gear fa-fw"></i> <?php echo $translations['Settings']?></a></li>
		<li class="divider"></li>
		<?php
		#echo serialize($fbUser);
		echo var_dump ($profilePicture);
		if ($user ['FirstName'] == 'Invitado' || $user ['FirstName'] == 'Guest') {
			echo '<li><a href="' . $fbLoginUrl . '"><i class="fa fa-sign-in fa-fw"></i> ' . $translations ['LogIn'] . '</a>';
		} else
			echo '<li><a href="' . base_url ( 'top_nav_fb_login/render_template/fbLogout' ) . '"><i class="fa fa-sign-in fa-fw"></i>' . $translations ['LogOut'] . '</a>';
		
		?>
		</li>
</ul>
<!-- /.dropdown-user -->
</li>
<!-- /.dropdown -->