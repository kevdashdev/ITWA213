<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
  public function index()
  {
    $this->load->view('home');
  }
  public function about()
  {
    $this->load->view('home/about');
  }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
