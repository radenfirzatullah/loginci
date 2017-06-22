<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('user_model')
  }
  public function login()
  {

  }
  public function register()
  {
    $this->form_validation->set_rules('email','Email','required');
    $this->form_validation->set_rules('password','Password','required');
    $this->form_validation->set_rules('password2','Konfirmasi Password','required|matchs[password]');
    if($this->form_validation->run() === FALSE)
    {
      $this->load->view('layout/header');
      $this->load->view('auth/register');
      $this->load->view('layout/footer');
    }else{
      $this->user_model->insert_user();
    }
  }
  public function logout()
  {

  }
  public function verify()
  {

  }
}
