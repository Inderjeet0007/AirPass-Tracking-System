
<!DOCTYPE html>
<html lang="en">
<body>
          <div class="row wrapper border-bottom  page-heading">
                          <div class="col-lg-10">
                              <h2>
                                  New Beacon
                              </h2>
                              <ol class="breadcrumb">

                                <li><a href="<?=base_url()?>">Dashboard</a> </li>
                                <li> <strong><span></span> >> </strong><a href="<?=base_url('index.php/Beacon')?>">Beacon Dashboard</a></li>
                                <li> <strong><span></span> >> </strong><a href="<?=base_url('index.php/Addb')?>"><strong>Beacon Addition</strong></a></li>
                              </ol>
                          </div>

                      </div><br><br>
                      <div class="wrapper wrapper-content animated fadeIn">

      <div class="padding-md">
          <div class="row">

              <div class="">
                  <form id="tracker_form" class="no-margin wizard-big wizard clearfix" method="post"
                        action="" novalidate="novalidate">


                              <div style="width:100%;float:center">
                                  <div class="col-md-12">
                                          <div >
                                            <p class="text-center"><strong>Enter the following details about the new beacon:</p><br><br></strong></p>
                                          </div>
                                          <div class="col-md-12">
                                              <div class="form-group">
                                                  <label class="control-label">Beacon Name</label>
                                                  <input type="text" placeholder="Name of the Beacon..."  class="form-control input-sm"
                                                         name="b_name"
                                                         required="">
                                              </div>
                                          </div>
                                          <div class="col-md-12">
                                              <div class="form-group">
                                                  <label class="control-label">Beacon MAC</label>
                                                  <input type="text" placeholder="MAC Address..."  class="form-control input-sm"
                                                         name="mac_add"
                                                         required>
                                              </div><!-- /form-group -->
                                          </div><!-- /.col -->

                                          <div class="col-md-1  text-center">
                                              <div class="form-group" style="margin-top: 20%">
                                                  <input type="submit" class="btn btn-warning" name="add_b" value="Submit" onclick="">
                                              </div>
                                          </div>

                                  </div>

                              </div>
                  </form>
              <!-- /panel -->
      </div>
                      </div>

              </div>
          </div>
            </div>
  </body>
</html>
