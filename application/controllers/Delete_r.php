<?php
//error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete_r extends CI_Controller {
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
        $this->delete_reader();
      }

        public function obtain_reader()
        {
          $this->load->model('Reader_model');
          $reader_id = $this->uri->segment(2);
          $id = $reader_id;
          $data["reader"] = $this->Reader_model->get_reader($reader_id);
          if($data == TRUE)
          {

                $this->load->view('operation/delete_r',$data);
          }//End if $data[login_result]
          else
          {
              echo"Sorry, Details couldn't be retrived, Please try again.";

          }
        }

        public function delete_reader()
        {

          $this->load->model('Reader_model');
          if(isset($_POST['delete']))
          {
            $reader_id = $this->uri->segment(2);
            echo "ddd".$reader_id;
            $data['r']= $this->Reader_model->delete_r($reader_id);
            if($data== TRUE)
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
