<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dbconnect extends CI_Model {
  function __construct() {
        parent::__construct();
        //Database credentials
        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'air pass';

        //Connect and select the database
        $db = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);

        }
        else {
          echo"Welcome";
        }
    }
    function index() {

    }

}
?>
