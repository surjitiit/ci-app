<?php defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Model {
  
    public function get_last_ten_entries()
    {
            $query = $this->db->get('sktable', 10);
            return $query->result();
    }
}
