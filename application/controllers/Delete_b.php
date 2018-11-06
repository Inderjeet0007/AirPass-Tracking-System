<?php
//error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete_b extends CI_Controller {
  public function __construct() {
          parent::__construct();
          $this->load->helper('form');
          $this->load->helper('url');
          $this->load->model('dbconnect');
          $this->load->database();
          $this->load->view('nav');
  //        $this->precheck->checktime();
      }//End of constructor
      public function index()
      {
        $this->obtain_beacon();
        $this->delete_beacon();
      }

        public function obtain_beacon()
        {
          $this->load->model('Beacon_model');
          $beacon_id = $this->uri->segment(2);
          $data["beacon"] = $this->Beacon_model->get_beacon($beacon_id);
          if($data == TRUE)
          {

                $this->load->view('operation/delete_b',$data);
          }//End if $data[login_result]
          else
          {
              echo"Sorry, Details couldn't be retrived, Please try again.";

          }
        }

        public function delete_beacon()
        {

          $this->load->model('Beacon_model');
          if(isset($_POST['delete']))
          {
            $beacon_id = $this->uri->segment(2);
            $data['r']= $this->Beacon_model->delete_b($beacon_id);
            if($data== TRUE)
            {
                  redirect('index.php/Beacon');
            }//End if $data[addb_result]
            else
            {
                echo"Sorry, Couldn't Update, Please try again.";
            }

          }
        }

}?>
