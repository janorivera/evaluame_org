
<div id="page-wrapper" style="min-height: 489px;">

	<h4>Resultados de la búsqueda</h4>

	<div class="news news-panel">
		<ul>
								<?php
								if (empty( $searchResults )){
									
									echo '<p>No se encontraron resultados para tu búsqueda ...</p>';
									
								}
								
								foreach ( $searchResults as $result ) {
									echo '<li>';
									// echo '<img src="' . $unitNews ['image'] . '" />';
									echo '<img
											src="' . get_media_path ( 'images/politician_pictures', $result ['PoliticianPicturePath'], 'jpg' ) . '"
													alt="" style="width: 100px; height: 100px; padding: 10px">';
									
									echo '<dl>';
									
									echo '<a href="' . base_url ( 'mb_politician_info/render_template' ) . '/' . $result ['PoliticianId'] . '" >';
									echo '<dt class= "text-info"><strong>' . $result ['FirstName'] . ' ' . $result ['LastName'] . '</strong></dt>';
									echo '</a>';
									echo '<dd><strong>' . $result ['TypeName'] . '</strong></dd>';
									echo '<dd>' . $result ['PartyName'] . '</dd>';
									echo '<dd>' . $result ['RegionName'] . '</dd>';
									echo '</dl>';
									
									echo '</li>';
								}
								?>

								</ul>
	</div>

	</p>

</div>