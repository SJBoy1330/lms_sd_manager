<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Jadwal_m extends MY_Model{

  	protected $_table_name = 'jadwal';
    protected $_primary_key = 'id_jadwal';
    
    public function __construct() 
	{
		parent::__construct();
	}

	public function get_single_jadwal($array=NULL){
		$query = parent::get_single($array);
		return $query;
	}

	public function get_jadwal($array=NULL, $limit=20, $start=0){
		$query = parent::get_order_by($array, $limit, $start);
		return $query;
	}
	public function get_jadwal_all($array=NULL){
		$query = parent::get_all($array);
		return $query;
	}

	public function insert_jadwal($array){
		$id=parent::insert($array);
		return $id;
	}

	public function update_jadwal($data, $id=NULL){
		$res = parent::update($data, $id);
		return $res;

	}

	public function delete_jadwal($id){
		return parent::delete($id);
	}

	public function get_where_params($where=null, $select="*", $params=array(), $or_where=false){

		$query = parent::get_where_params($where, $select, $params, $or_where);

		return $query;

	}
}