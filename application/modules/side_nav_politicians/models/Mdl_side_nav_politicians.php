<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Mdl_side_nav_politicians extends CI_Model {
	public function __construct() {
		parent::__construct ();
		$this->load->models ( array (
				'db_table_politicians/Mdl_db_table_politicians',
				'db_table_regions/Mdl_db_table_regions',
				'db_table_politician_types/Mdl_db_table_politician_types' 
		) );
	}
	public function list_unsorted_data() {
		$data ['Regions'] = $this->Mdl_db_table_regions->get ( 'RegionId' );
		$data ['PoliticianTypes'] = $this->Mdl_db_table_politician_types->get ( 'PoliticianTypeId' );
		$data ['Politicians'] = $this->Mdl_db_table_politicians->get ( 'PoliticianId' );
		
		return $data;
	}
	public function list_sorted_data() {
		$data ['Regions'] = $this->Mdl_db_table_regions->get ( 'RegionId' );
		$data ['PoliticianTypes'] = $this->Mdl_db_table_politician_types->get ( 'PoliticianTypeId' );
		$data ['Politicians'] = $this->Mdl_db_table_politicians->get ( 'PoliticianId' );
		
		foreach ( $data ['PoliticianTypes'] as $politicianType ) {
			
			$data ['SortedData'] [$politicianType ['TypeName']] = Array ();
			
			foreach ( $data ['Regions'] as $region ) {
				
				$data ['SortedData'] [$politicianType ['TypeName']] [$region ['RegionName']] = Array ();
				
				foreach ( $data ['Politicians'] as $politicians ) {
					if (($politicians ['RegionId'] == $region ['RegionId']) && ($politicians ['PoliticianTypeId'] == $politicianType ['PoliticianTypeId'])) {
						
						array_push ( $data ['SortedData'] [$politicianType ['TypeName']] [$region ['RegionName']], 
								array('PoliticianName' => $politicians ['FirstName'] . ' ' . $politicians ['LastName'] ,
										'PoliticianId' => $politicians['PoliticianId']) );
					}
				}
			}
		}
		//var_dump($data);
		return $data;
	}
}

