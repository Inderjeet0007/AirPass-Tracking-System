<?php

class Addr_model extends CI_Model{
    public function __construct() {
        parent::__construct();
   }//End of constructor

   public function addr($addr){
        extract($addr);

        $sql = "INSERT INTO reader (r_name, mac_add) VALUES ('$r_name', '$mac_add')";
        $result = $this->db->query($sql);

        $afftectedRows = $this->db->affected_rows();
        if($afftectedRows == 1)
            return TRUE;
        else
            return FALSE;
    }//End of addr
}//End of class Addr_model
 ?>
