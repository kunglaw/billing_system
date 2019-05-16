<?php


class model_utama extends CI_Model {

	
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
   function get_data($table)
	{
		//$this->db->limit($limit, $offset);
		$query = $this->db->get($table);
		return $query;
	}
	
	function count_all($table)
	{
		return $this->db->count_all($table);
	}
	
	function get_order($field,$sort,$table)
	{
		$this->db->order_by($field,$sort);
		$query = $this->db->get($table);
		return $query;
	}

	function get_last($field,$table)
	{
		$this->db->order_by($field,'desc');
		$this->db->limit(1);
		$query = $this->db->get($table);
		return $query;
	}

	function get_last_by_id($id,$field_id,$field,$table)
	{
		$this->db->where($field_id,$id);
		$this->db->order_by($field,'desc');
		$this->db->limit(1);
		$query = $this->db->get($table);
		return $query;
	}
	
	function get_detail($id,$field,$table)
	{
		$this->db->where($field,$id);
		$query = $this->db->get($table);
		if($query->num_rows() > 0)
		{
			return $query;
		}
	}
	
	function insert_data($table,$data)
	{
		$query = $this->db->insert($table,$data);
		return $query;
	}
	
	function update_data($id,$field,$table,$data)
	{
		$this->db->where($field,$id);
		$query = $this->db->update($table,$data);
		return $query;
	}

	function update_data2($id,$id2,$field,$field2,$table,$data)
	{
		$this->db->where($field,$id);
		$this->db->where($field2,$id2);
		$query = $this->db->update($table,$data);
		return $query;
	}
	
	function delete_data($id,$field,$table)
	{
		$this->db->where($field,$id);
		$query = $this->db->delete($table);
		return $query;
	}
	
	function cek_data($id,$field,$table)
	{
		$this->db->where($field,$id);
		$query = $this->db->get($table);
		return $query;		
	}
	
	function cek_data2($key1,$key2,$field1,$field2,$table)
	{
		$this->db->where($field1,$key1);
		$this->db->where($field2,$key2);
		$query = $this->db->get($table);
		return $query;		
	}
	
	function searching2($key1,$key2,$field1,$field2,$table)
	{
		$this->db->like($field1,$key1);
		$this->db->like($field2,$key2);
		$query = $this->db->get($table);
		return $query;		
	}
	
	function searching3($key1,$key2,$key3,$field1,$field2,$field3,$table)
	{
		$this->db->like($field1,$key1);
		$this->db->like($field2,$key2);
		$this->db->like($field3,$key3);
		$query = $this->db->get($table);
		return $query;		
	}
	
	function count_new($key,$field,$table)
	{
		$this->db->where($field,$key);
		$query = $this->db->count_all_results($table);
		return $query;
	}
	
	function count_new2($key1,$key2,$field1,$field2,$table)
	{
		$this->db->where($field1,$key1);
		$this->db->where($field2,$key2);
		$query = $this->db->count_all_results($table);
		return $query;
	}

}