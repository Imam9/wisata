<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  public function index(){
    $data = array(
        'title' => 'Dashboard',
        'isi' => 'admin/v_dashboard',
    );

    $this->load->view('template_admin/v_wrapper', $data, FALSE);
  }
}
