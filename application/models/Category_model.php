<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {

	var $table 			= 'category';
	var $column_order	= array('name', 'is_deleted', null); //set column field database for datatable orderable
	var $column_search	= 'name'; //set column field database for datatable searchable
	var $order 			= array('id' => 'asc'); //default order

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->database();
	}

	private function _get_datatables_query(){
		$this->db->from($this->table);

		$i = 0;

		foreach ($this->column_search as $item) { // loop column
			if ($_POST['search']['value']) { // if datatable send POST for search
				if ($i===0) {
					$this->db->group_start();
					// open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				} else {
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if (count($this->column_search) - 1 ==$i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}
		if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
	}
	
}

/* End of file category_model.php */
/* Location: ./application/models/category_model.php */