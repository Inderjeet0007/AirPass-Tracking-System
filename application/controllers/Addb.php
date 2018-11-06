<?php
//error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Addb extends CI_Controller {
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
        $this->add_new_beacon();
      }

        public function add_new_beacon()
        {
          $this->load->view('nav');
          $this->load->view('components/addb');
          $this->load->model('Addb_model');
          if(isset($_POST['add_b']))
          {

            $b_name = $_POST["b_name"];
            $mac_add = $_POST["mac_add"];

            $addb = array(
                             'b_name'      => $this->input->post('b_name'),
                             'mac_add'      => $this->input->post('mac_add')
                         );
            $data['addb_result'] = $this->Addb_model->addb($addb);
            if($data['addb_result'] == TRUE)
            {
                  redirect('index.php/Beacon');
            }//End if $data[login_result]
            else
            {
                echo"Sorry, your credentials are not valid, Please try again.";
            }

          }
        }

}?>
