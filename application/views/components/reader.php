
<!DOCTYPE html>
<html lang="en">

<head>
  <title>AirPass Tracking System</title>

  <style media="screen">
    .button3 {border-radius: 8px;
      background-color: #008CBA;
      color: white;
      padding: 5px 20px;
      text-align: center;}
      .button2 {border-radius: 8px;
        background-color: #f44336;
        color: white;
        padding: 5px 20px;
        text-align: center;}
  </style>
    <title>AirPass Tracking System</title>
    <!-- Meta Tags -->

</head>

<body>

            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center">Readers</h2>
            <!--// main-heading -->

            <div class="padding-md">
              <ol class="breadcrumb">

                <li><a href="<?=base_url()?>">Dashboard </a> </li>
                <li> <strong><span></span> >> </strong><a href="<?=base_url('index.php/Reader')?>"><strong>Reader Dashboard</strong></a></li>
              </ol>
                    <div style="margin-bottom: 1em;" class="pull-right text-right">

                        <a href="<?php echo base_url('index.php/Addr');?>" class="btn btn-success">Add New Reader</a><br><br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="table-responsive panel-body">
                                        <table style="text-align: center"
                                               class="table table-striped table-bordered table-hover dataTables-example">
                                            <thead>


                    <tr>
                                                <th>Sr. No.</th>
                                                <th style='text-align: center'>Reader name</th>
                                                <th style='text-align: center'>Reader MAC</th>
                                                <th style='text-align: center'>Action</th>

                       </tr>
                       <?php
                       $i = $this->uri->segment(3);
                       foreach ($reader as $row ) {
                         $i++;
                         $id = $row->reader_id;
                        echo "<tr>";
                        echo "<td>" .$i . "</td>";
                        echo "<td>" . $row->r_name . "</td>";
                        echo "<td>" . $row->mac_add . "</td>";
                        $emessage= 'Are you sure you want to edit ?';
                        $dmessage= 'Are you sure you want to proceed ?';
                      echo "<td><button class='button3'><a onclick= 'return confirm(\"$emessage\")' href='http://localhost:8080/airpass/index.php/Edit_r/" . $id . "'>Edit</a></button>
                     <button class='button2'><a onclick= 'return confirm(\"$dmessage\")' href='http://localhost:8080/airpass/index.php/Delete_r/" . $id . "'>Delete</a></button></td>";


                        echo "</tr>";

                       }     echo"</table>"."<br>";


                      ?>
                    </div>


                </div>
              </div>
            </div>

            <div class="container-fluid">
                <div class="row">

                </div>
            </div>


            <!-- Copyright -->
            <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>© 2018 APTS . All Rights Reserved</a>
                </p>
            </div>
            <!--// Copyright -->


</body>

</html>
