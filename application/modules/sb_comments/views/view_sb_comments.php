
	




<div id="scrollbox3">



		<div class="new-com-cnt">
       <?php
							if ($user ['FirstName'] == 'Invitado' or $user ['FirstName'] == 'Guest')
								echo '<input type="text" id="name-com" name="name-com" value="" placeholder="Nombre" />';
							else
								
								echo '<input type="text" id="name-com" name="name-com" value="' . $user ['FirstName'] . '" placeholder="Nombre" />';
							?>
       <input type="text" id="mail-com" name="mail-com" value=""
				placeholder="Email" />
			<textarea class="the-new-com"></textarea>
			<div class="bt-add-com">Postear</div>
			<div class="bt-cancel-com">Cancelar</div>
		</div>
		<div class="new-com-bt">
			<span>Escribe un comentario ...</span>
		</div>
	
	
	
    <?php
				
				foreach ( $comments as $affcom ) {
					$name = $affcom ['Name'];
					$email = $affcom ['Email'];
					$comment = $affcom ['Comment'];
					$date = $affcom ['Date'];
					$profilePicture = $affcom ['ProfilePictureUrl'];
					// Get gravatar Image
					// https://fr.gravatar.com/site/implement/images/php/
					$default = "mm";
					$size = 35;
					
					?>
    <div class="cmt-cnt">
			<img src="<?php echo $profilePicture; ?>" />
			<div class="thecom">
				<h5><?php echo $name; ?></h5>
				<span data-utime="1371248446" class="com-dt"><?php echo $date; ?></span>
				<br />
				<p>
                <?php echo $comment; ?>
            </p>
			</div>
		</div>
		<!-- end "cmt-cnt" -->
    <?php } ?>

    

	</div>

</div>

	

<script type="text/javascript">
var conversation_id = <?php echo json_encode($conversationId); ?>;
</script>



