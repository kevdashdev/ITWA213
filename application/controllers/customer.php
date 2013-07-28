<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends CI_Controller {
  public function index(){
    $this->load->view('customer/view_login');
  }
  public function login(){

    $u = $this->input->post('uname');
    $p = $this->input->post('upass');
    $userdata = array(
      'email' => $u,
      'password' => md5($p)
    );

    $this->load->model('model_customer');
    if($this->model_customer->check_account($userdata)){
      //echo 'success';
      $this->load->view('customer/view_home');
    } else {
      $data['invalid'] = true;
      $this->load->view('customer/view_login',$data);

    }


    //$this->load->view('customer/view_login');
  }

  public function home(){
    if(!$this->session->userdata('login')){
      $this->index();
    } else {
      $this->load->view('customer/view_home');
    }
  }

  public function profile(){
    if(!$this->session->userdata('login')){
      $this->index();
    } else {
      $this->load->view('customer/view_profile');
    }
  }

  public function logout(){
    $this->session->sess_destroy();
    $this->index();
  }

}
?>
