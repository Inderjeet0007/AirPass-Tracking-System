<?php

class Authenticate_model extends CI_Model{
    public function __construct() {
        parent::__construct();
   }//End of constructor

   public function authenticate_user_credentials($user_credentials){
        extract($user_credentials);

        $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password' LIMIT 1";
        $result = $this->db->query($sql);


        //$mcpf = $this->authentication->encrypt(MCPF);
        if($result->num_rows() == 1)
            return TRUE;
        else
            return FALSE;
    }//End of authenticate_user_credentials

    public function check_valid_user($username){
        $sql = "SELECT username FROM login WHERE username = ? ";
        $result =  $this->db->query($sql, array($username,1));
        if($result->num_rows() == 1)
            return TRUE;
        else
            return FALSE;
    }
    public function is_session_set(){
        if(isset($_SESSION['user_name'])){
            return TRUE;
        }
        return FALSE;
    }//End of is_session_set
}//End of class Authenticate_model
 ?>
