<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dealers extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		
	}


	public function search_dealers($lat,$lon){

          $q = $this->db->query('SELECT id, nombre, ciudad, estado, codigo_postal, direccion, telefono, website, lat, lng, img, ((DEGREES(ACOS(SIN(RADIANS('.$lat.')) * SIN(RADIANS(lat)) + COS(RADIANS('.$lat.')) * COS(RADIANS(lat)) * COS(RADIANS('.$lon.' - lng))) ) * 60 * 1.1515) * 1.609344) AS distancia FROM dealers WHERE ((DEGREES(ACOS(SIN(RADIANS('.$lat.')) * SIN(RADIANS(lat)) + COS(RADIANS('.$lat.')) * COS(RADIANS(lat)) * COS(RADIANS('.$lon.' - lng))) ) * 60 * 1.1515) * 1.609344)<=40 ORDER BY distancia DESC;');

          if($q->num_rows() >= 1) {
            	$data = array();

				foreach ($q->result() as $row) {
					if(!$row->img){ $row->img =  'toyota_dealer.jpg'; }
					$data[] = $row;
				}

				return $data;
          }else{
               return false;
          }

    }


}

/* End of file dealers.php */
/* Location: ./application/models/dealers.php */