<?php

class Beacon_model extends CI_Model{
    public function __construct() {
        parent::__construct();
   }//End of constructor
   function get_beacons()
   {
     //Database credentials

     $link = mysqli_connect("localhost", "root", "", "air pass");

     // Check connection
     if($link === false){
         die("ERROR: Could not connect. " . mysqli_connect_error());
     }
      $sql = $this->db->query('SELECT * FROM beacon');
      return $sql->result();

      /* you simply return the results as an object
       * also note you can use the ActiveRecord class for this...might make it easier
       */
  }
  function get_beacon($beacon_id)
  {
    //Database credentials

    $link = mysqli_connect("localhost", "root", "", "air pass");

    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
     $res= "SELECT * FROM beacon WHERE beacon_id= '$beacon_id'";
     $sql = $this->db->query($res);
     return $sql->result();

     /* you simply return the results as an object
      * also note you can use the ActiveRecord class for this...might make it easier
      */
 }
 public function editb($addb, $beacon_id){
      extract($addb);

      $sql = "UPDATE beacon "."SET b_name= '$b_name', mac_add= '$mac_add' ". "WHERE beacon_id= $beacon_id";
      $result = $this->db->query($sql);

      $afftectedRows = $this->db->affected_rows();
      if($afftectedRows == 1)
          return TRUE;
      else
          return FALSE;
  }
  public function delete_b($beacon_id){

       $sql = "DELETE FROM beacon WHERE beacon_id= $beacon_id";
       $result = $this->db->query($sql);

       $afftectedRows = $this->db->affected_rows();
       if($afftectedRows == 1)
           return TRUE;
       else
           return FALSE;
   }
}
