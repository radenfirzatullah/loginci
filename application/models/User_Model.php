<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Model extends CI_Model{
  public function __construct()
  {
    parent::__construct();
  }

  public function insert_user()
  {
    $token = array(
      'token' => random_string('alnum',16)
    );
    $this->session->set_userdata($token);

    $data = array(
      'email' => $this->input->post('email'),
      'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
      'token' => $this->session->userdata('token')
    );
    $this->db->insert('users',$data);
  }
}
