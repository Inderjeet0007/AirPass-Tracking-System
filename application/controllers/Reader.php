<?php
//error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Reader extends CI_Controller {
  public function __construct() {
          parent::__construct();
          $this->load->helper('form');
          $this->load->helper('url');
            $this->load->model('dbconnect');
          //$this->load->model('Reader_model');
          $this->load->database();
  //        $this->precheck->checktime();
      }//End of constructor
      public function index()
      {
        $this->reader();
      }

        public function reader()
        {

          $this->load->model('Reader_model');
          $this->load->view('nav');
          $data["reader"] = $this->Reader_model->get_readers();
          if($data == TRUE)
          {
                $this->load->view('components/reader',$data);
          }//End if $data[login_result]
          else
          {
              echo"Sorry, Details couldn't be retrived, Please try again.";

          }



  ?>

                      </div>
                  </div>
              </div>
          </div><?php
        }

}?>