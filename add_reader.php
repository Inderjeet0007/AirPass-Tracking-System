<?php
include 'dbconnect.php';
include 'nav.php';
?>

<!DOCTYPE html>
<html lang="en">
<body>
          <div class="row wrapper border-bottom white-bg page-heading">
                          <div class="col-lg-10">
                              <h2>
                                  ADD NEW READER
                              </h2>

                          </div>
                          <div class="col-lg-2">
                          </div>
                      </div>
                      <div class="wrapper wrapper-content animated fadeIn">

      <div class="padding-md">
          <div class="row">

              <div class="panel panel-default">
                  <form id="tracker_form" class="no-margin wizard-big wizard clearfix" method="post"
                        action="insert_r.php" novalidate="novalidate">

                      <div class="panel-body">
                          <div class="row">
                              <div style="width:100%;float:left">
                                  <div class="col-md-12">
                                      <div class="row">
                                          <div class="col-md-3">
                                              <div class="form-group">
                                                  <label class="control-label">Reader name</label>
                                                  <input type="text" placeholder="Reader name..."  class="form-control input-sm"
                                                         name="b_name"
                                                         required="">
                                              </div>
                                          </div>
                                          <div class="col-md-3">
                                              <div class="form-group">
                                                  <label class="control-label">Reader MAC</label>
                                                  <input type="text" placeholder="MAC Address..."  class="form-control input-sm"
                                                         name="mac_add"
                                                         required>
                                              </div><!-- /form-group -->
                                          </div><!-- /.col -->





                                          <div class="col-md-1  text-center">
                                              <div class="form-group" style="margin-top: 20%">
                                                  <input type="submit" class="btn btn-success" value="Submit" onclick="">
                                              </div>
                                          </div>


                                      </div>
                                  </div>


                              </div>
                  </form>
              </div><!-- /panel -->

          </div>
      </div>

                      </div>



              </div>
          </div>
            </div>
            <!--// top-bar -->

                <!-- Required common Js -->
                <script src='js/jquery-2.2.3.min.js'></script>
                <!-- //Required common Js -->

                <!-- loading-gif Js -->
                <script src="js/modernizr.js"></script>
                <script>
                    //paste this code under head tag or in a seperate js file.
                    // Wait for window load
                    $(window).load(function () {
                        // Animate loader off screen
                        $(".se-pre-con").fadeOut("slow");;
                    });
                </script>
                <!--// loading-gif Js -->

                <!-- Sidebar-nav Js -->
                <script>
                    $(document).ready(function () {
                        $('#sidebarCollapse').on('click', function () {
                            $('#sidebar').toggleClass('active');
                        });
                    });
                </script>
                <!--// Sidebar-nav Js -->

                        <!-- dropdown nav -->
                    <script>
                        $(document).ready(function () {
                            $(".dropdown").hover(
                                function () {
                                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                                    $(this).toggleClass('open');
                                },
                                function () {
                                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                                    $(this).toggleClass('open');
                                }
                            );
                        });
                    </script>
                    <!-- //dropdown nav -->

                    <!-- Js for bootstrap working-->
                    <script src="js/bootstrap.min.js"></script>
                    <!-- //Js for bootstrap working -->

  </body>
</html>
