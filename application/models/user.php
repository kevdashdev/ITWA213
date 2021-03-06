<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {

  public function check_account($data){
    $q = $this->db->get_where('users', $data);
    $cust = $q->result();
    if($q->num_rows()>0){
      $array = array(
        'id' => $cust[0]->id,
        'email' => $cust[0]->email,
        'first_name' => $cust[0]->first_name,
        'last_name' => $cust[0]->last_name,
        'login' => true
      );

      $this->session->set_userdata($array);

      return true;
    } else{
      return false;
    }
  }


}

?>
