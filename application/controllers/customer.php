<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends CI_Controller {
  public function index(){
    $this->load->view('customer/index');
  }
  public function login(){

    $u = $this->input->post('user');
    $userdata = array(
      'email' => $u['email'],
      'password_digest' => md5($u['password'])
    );

    $this->load->model('user');
    if($this->user->check_account($userdata)){
      $data['valid'] = true;
      //echo 'success';
      $this->load->view('customer/home');
    } else {
      $data['invalid'] = true;
      $this->index();
    }


    //$this->load->view('customer/view_login');
  }

  public function home(){
    if(!$this->session->userdata('login')){
      $this->index();
    } else {
      $this->load->view('customer/home');
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
