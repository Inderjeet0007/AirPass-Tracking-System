<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Authenticate extends CI_Controller {
  public function __construct() {
          parent::__construct();
          $this->load->helper('form');
          $this->load->helper('url');
            $this->load->model('dbconnect');
          $this->load->model('Authenticate_model');
          $this->load->database();
  //        $this->precheck->checktime();
      }//End of constructor
  public function index()
	{
    $this->login();
	}

  public function login(){
    if(isset($_POST['login']))
    {

      $username = $_POST["username"];
      $password = $_POST["password"];

      $user_credentials = array(
                       'username'      => strtolower($this->input->post('username')),
                       'password'      => strtolower($this->input->post('password'))
                   );
      $data['login_result'] = $this->Authenticate_model->authenticate_user_credentials($user_credentials);
      if($data['login_result'] == TRUE)
      {
            $_SESSION['user_name'] = $username;
            redirect('/');
      }//End if $data[login_result]
      else
      {
          redirect('index.php/authenticate/login');
          echo"Sorry, your credentials are not valid, Please try again.";
          $this->load->library('session');
          $this->load->helper('url');
          $this->session->set_flashdata('error','Invalid Credentials. Try Again !!');
      }

    }

  $this->load->view('authenticate/login');

  }
  public function logout(){
        session_destroy();
        $this->load->library('session');
        $this->load->helper('url');
        $this->session->set_flashdata('success','You have been Logged out successfully');
        redirect('index.php/authenticate/login');
    }//End of logout
}
?>
