<?php
//error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_b extends CI_Controller {
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
        $this->edit_beacon();
      }

        public function obtain_beacon()
        {
          $this->load->model('Beacon_model');
          $beacon_id = $this->uri->segment(2);
          $id = $beacon_id;
          $data["beacon"] = $this->Beacon_model->get_beacon($beacon_id);
          if($data == TRUE)
          {

                $this->load->view('operation/edit_b',$data);
          }
          else
          {
              echo"Sorry, Details couldn't be retrived, Please try again.";

          }
        }

        public function edit_beacon()
        {

          $this->load->model('Beacon_model');
          if(isset($_POST['update']))
          {
            $beacon_id = $this->uri->segment(2);
            $addb = array(
                             'b_name'      => $this->input->post('b_name'),
                             'mac_add'      => $this->input->post('mac_add')
                         );
            $data['addb_result'] = $this->Beacon_model->editb($addb, $beacon_id);
            if($data['addb_result'] == TRUE)
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
