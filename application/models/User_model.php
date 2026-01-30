<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    protected $fillable = ['name','email'];
    private $table = 'users';

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Get all users
    public function getAll() {
        return $this->db->get($this->table)->result();
    }

    // Get user by ID
    public function getById($id) {
        return $this->db->where('id',$id)->get($this->table)->row();
    }

    // Insert user
    public function insert($post) {
        $data = $this->filterData($post);
        return $this->db->insert($this->table, $data);
    }

    // Update user
    public function update($id,$post) {
        $data = $this->filterData($post);
        return $this->db->where('id',$id)->update($this->table,$data);
    }

    // Delete user
    public function delete($id) {
        return $this->db->where('id',$id)->delete($this->table);
    }

    // Filter data (Laravel-style fillable)
    private function filterData($post) {
        return array_intersect_key($post, array_flip($this->fillable));
    }
}
