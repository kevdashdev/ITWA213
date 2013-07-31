<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->library('session');
    ini_set('display_errors',1);
    error_reporting(E_ALL);
  }

  public function index(){
    if(!$this->session->userdata('login')){
      $this->load->view('/customer/index');
    } else {
      $this->session->set_flashdata('msg', 'Successfully logged in.');
      redirect('/customer/home');
    }
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
      $this->session->set_flashdata('msg', 'Successfully logged in.');
      redirect('customer/home');
    } else {
      $data['invalid'] = true;
      $this->session->set_flashdata('msg', 'Invalid credentials. Please check your email and/or password.');
      redirect('/customer');
    }


    //$this->load->view('customer/view_login');
  }

  public function home(){
    if(!$this->session->userdata('login')){
      $this->session->set_flashdata('msg', 'You must be logged in to access that page.');
      redirect('/customer/index');
    } else {
      $this->load->view('/customer/home');
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
    //$this->session->setflashdata('msg', 'Successfully logged out.');
    $this->session->unset_userdata('id');
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('login');
    $this->session->set_flashdata('msg', 'Successfully logged out.');
    redirect('/customer');
  }

}
?>
