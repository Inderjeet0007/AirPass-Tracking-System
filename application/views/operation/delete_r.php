
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title>AirPass Tracking System</title>
</head>
  <body>
<div class="padding-md">
  <div class="row">
      <div class="col-md-12">
          <div class="panel panel-default">
            <h3 align="center">Retrived Data</h3>
            <ol class="breadcrumb">

              <li><a href="<?=base_url()?>">Dashboard</a> </li>
              <li> <strong><span></span> >> </strong><a href="<?=base_url('index.php/Reader')?>">Reader Dashboard</a></li>
              <li> <strong><span></span> >> </strong><a href="<?=base_url($_SERVER['PHP_SELF'])?>"><strong>Delete Reader</strong></a></li>
            </ol>

            <?php

            if(isset($reader)){
            foreach($reader as $row){
              echo form_open("index.php/Delete_r/".$row->reader_id);
              form_hidden('reader_id', $this->uri->segment(2));
              echo validation_errors();
              echo "<p><strong>Existing details of Reader ID ".$row->reader_id." are:</strong></p>";
              echo "<br>"; ?>
              <label>READER NAME</label><br/>
              <input type="label" name="r_name" value='<?php echo  $row->r_name;?>' disabled><br/><br>
              <label>MAC ADDRESS</label><br/>
              <input type="label" name="mac_add" value='<?php echo $row->mac_add;?>' disabled><br/><br>
              <input type="submit" class="btn btn-warning" name="delete" value="Delete Reader" onclick="" >
            </form>
          </div>
        </div>
      </div>
    </div><?php
  } }?>

  </body>
</html>
