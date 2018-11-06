<?php
//error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Addr extends CI_Controller {
  public function __construct() {
          parent::__construct();
          $this->load->helper('form');
          $this->load->helper('url');
          $this->load->model('dbconnect');
          $this->load->database();
  //        $this->precheck->checktime();
      }//End of constructor
      public function index()
      {
        $this->add_new_reader();
      }

        public function add_new_reader()
        {
          $this->load->view('nav');
          $this->load->view('components/addr');
          $this->load->model('Addr_model');
          if(isset($_POST['add_r']))
          {

            $r_name = $_POST["r_name"];
            $mac_add = $_POST["mac_add"];

            $addr = array(
                             'r_name'      => $this->input->post('r_name'),
                             'mac_add'      => $this->input->post('mac_add')
                         );
            $data['addr_result'] = $this->Addr_model->addr($addr);
            if($data['addr_result'] == TRUE)
            {
                  redirect('index.php/Reader');
            }//End if $data[login_result]
            else
            {
                echo"Sorry, your credentials are not valid, Please try again.";
            }

          }
        }

}?>
