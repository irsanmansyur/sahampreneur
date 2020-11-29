<?php
defined('BASEPATH') or exit('No direct script access allowed');

class logout extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();
  }
  public function index()
  {
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('time');
    $this->session->unset_userdata('role_id');
    $this->session->unset_userdata('user_login');
    $this->session->unset_userdata('user_token');
    $this->session->unset_userdata('url');

    $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Anda Berhasil Keluar!</div>');
    redirect('auth/login');
  }
}
