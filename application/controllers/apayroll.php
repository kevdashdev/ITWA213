<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Apayroll extends CI_Controller {

  public function __construct()
  {
    ini_set('display_errors',1);
    error_reporting(E_ALL);
    parent::__construct();
    $this->load->helper('form');
  }

  public function index()
  {
    $name = $data['name'] = $this->input->post('name');
    $data['compute'] = $this->input->post('compute');
    $salaryPerDay  = $data['salaryPerDay'] = $this->input->post('salaryPerDay') + 0;
    $daysRendered  = $data['daysRendered'] = $this->input->post('daysRendered') + 0;
    $sss  = $data['sss'] = $this->input->post('sss') + 0;
    $philhealth  = $data['philhealth'] = $this->input->post('philhealth') + 0;
    $pagibig  = $data['pagibig'] = $this->input->post('pagibig') + 0;
    $tax  = $data['tax'] = $this->input->post('tax');


    $data['gross'] = ($salaryPerDay * $daysRendered);
    $tax = ($tax > 1) ? $tax/100 : $tax;

    $data['taxDeduction'] = $data['gross'] * $tax;
    $data['contribution'] = ( $sss + $philhealth + $pagibig );
    $data['total'] = $data['gross'] - $data['taxDeduction'] - $data['contribution'];

    $this->load->view('apayroll', $data);
  }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
