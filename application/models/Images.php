<?php

//Class that allows us to pull images from the database
class Images extends CI_Model {

	
	public function _construct()
	{
            parent::_construct();
	}
        
        //pulls all images from the database and returns
        //the result array
        function all()
        {
            $this->db->order_by("id", "desc");
            $query = $this->db->get('images');
            return $query->result_array();
        }
        
        //pulls newest images from the database and returns
        //the result array
        function newest()
        {
            $this->db->order_by("id", "desc");
            $this->db->limit(3);
            $query = $this->db->get('images');
            return $query->result_array();
        }
}