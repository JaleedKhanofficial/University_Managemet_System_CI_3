<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    // Read → List Users
    public function index() {
        $data['users'] = $this->User_model->getAll();
        $this->load->view('users/index', $data);
    }

    // Create → Show Form + Save
    public function create() {
        if($this->input->post()) {
            $this->User_model->insert($this->input->post());
            redirect('users');
        }
        $this->load->view('users/create');
    }

    // Update → Show Form + Save
    public function edit($id) {
        if($this->input->post()) {
            $this->User_model->update($id, $this->input->post());
            redirect('users');
        }
        $data['user'] = $this->User_model->getById($id);
        $this->load->view('users/edit', $data);
    }

    // Delete
    public function delete($id) {
        $this->User_model->delete($id);
        redirect('users');
    }
}
