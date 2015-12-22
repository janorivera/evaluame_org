<?php
foreach ( array_keys ( $SortedData ) as $politicianType ) {
	
	echo '<li> <a href="#"><i class="fa fa-list fa-fw"></i> ' . $politicianType . '<span class="fa arrow"></span></a> ';
	
	echo '<ul class="nav nav-second-level">';
	
	foreach ( array_keys ( $SortedData [$politicianType] ) as $region ) {
		if (! empty ( $SortedData [$politicianType] [$region] )) {
			if ($region != 'Chile') {
				echo '<li> <a href="#"> ' . $region . '<span class="fa arrow"></span></a></a>';
				echo '<ul class="nav nav-third-level">';
				
				foreach ( $SortedData [$politicianType] [$region] as $politician ) {
					
					echo '<li> <a href="' . base_url ( 'mb_politician_info/render_template/' . $politician ['PoliticianId'] ) . '">' . $politician ['PoliticianName'] . '</a></li>';
				}
				echo '</ul>  </li>';
			} else {
				foreach ( $SortedData [$politicianType] [$region] as $politician ) {
					
					echo '<li> <a href="' . base_url ( 'mb_politician_info/render_template/' . $politician ['PoliticianId'] ) . '">' . $politician ['PoliticianName'] . '</a></li>';
				}
			}
		}
	}
	
	echo '</ul> </li>';
}

?>