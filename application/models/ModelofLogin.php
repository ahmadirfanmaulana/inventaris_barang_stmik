<?php

/**
 *
 */
class ModelofLogin extends CI_Model
{
  public function login()
  {
    $button = $this->input->post('button');
    $username = $this->input->post('username');
    $password = md5($this->input->post('password'));
    $sql = $this->db->query("SELECT * FROM user WHERE user_username = '$username' AND user_password = '$password'");
    if ($button) {
      if ($sql->num_rows() > 0) {
        foreach ($sql->result_array() as $key) {
          $data_session = array(
            'user_id' => $key['user_id'],
            'user_level' =>  $key['user_level']
          );
        }

        $this->session->set_userdata($data_session);
        $result = TRUE;
        redirect(PATH_THEME);
      }
      else {
        $result = "gagal";
      }
      return $result;
    }
  }

  public function logout()
  {
    $this->session->sess_destroy();
		redirect(PATH_THEME."login");
  }
}


 ?>
