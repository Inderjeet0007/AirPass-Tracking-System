<?php
//error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_r extends CI_Controller {
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
        $this->obtain_reader();
        $this->edit_reader();
      }

        public function obtain_reader()
        {
          $this->load->model('Reader_model');
          $reader_id = $this->uri->segment(2);
          $id = $reader_id;
          $data["reader"] = $this->Reader_model->get_reader($reader_id);
          if($data == TRUE)
          {

                $this->load->view('operation/edit_r',$data);
          }//End if $data[login_result]
          else
          {
              echo"Sorry, Details couldn't be retrived, Please try again.";

          }
        }

        public function edit_reader()
        {

          $this->load->model('Reader_model');
          if(isset($_POST['update']))
          {
            $reader_id = $this->uri->segment(2);
            $addb = array(
                             'r_name'      => $this->input->post('r_name'),
                             'mac_add'      => $this->input->post('mac_add')
                         );
            $data['addb_result'] = $this->Reader_model->editr($addb, $reader_id);
            if($data['addb_result'] == TRUE)
            {
                  redirect('index.php/Reader');
            }//End if $data[addb_result]
            else
            {
                echo"Sorry, Couldn't Update, Please try again.";
            }

          }
        }

}?>
