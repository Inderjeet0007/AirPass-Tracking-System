<?php

class Reader_model extends CI_Model{
    public function __construct() {
        parent::__construct();
   }//End of constructor

   function get_readers()
   {
     //Database credentials

     $link = mysqli_connect("localhost", "root", "", "air pass");

     // Check connection
     if($link === false){
         die("ERROR: Could not connect. " . mysqli_connect_error());
     }
      $sql = $this->db->query('SELECT reader_id,r_name,mac_add FROM reader');
      return $sql->result();

      /* you simply return the results as an object
       * also note you can use the ActiveRecord class for this...might make it easier
       */
  }
  function get_reader($reader_id)
  {
    //Database credentials

    $link = mysqli_connect("localhost", "root", "", "air pass");

    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
     $res= "SELECT * FROM reader WHERE reader_id= '$reader_id'";
     $sql = $this->db->query($res);
     return $sql->result();

     /* you simply return the results as an object
      * also note you can use the ActiveRecord class for this...might make it easier
      */
 }
 public function editr($addb, $reader_id){
      extract($addb);

      $sql = "UPDATE reader "."SET r_name= '$r_name', mac_add= '$mac_add' ". "WHERE reader_id= $reader_id";

      $result = $this->db->query($sql);

      $afftectedRows = $this->db->affected_rows();
      if($afftectedRows == 1)
          return TRUE;
      else
          return FALSE;
  }
  public function delete_r($reader_id){

       $sql = "DELETE FROM reader WHERE reader_id= $reader_id";
       echo $sql;
       $result = $this->db->query($sql);

       $afftectedRows = $this->db->affected_rows();
       if($afftectedRows == 1)
           return TRUE;
       else
           return FALSE;
   }
}
