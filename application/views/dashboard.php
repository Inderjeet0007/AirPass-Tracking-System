
﻿<!DOCTYPE html>
<html lang="en">

<body>
            <!--// top-bar -->
            <div class="container-fluid">
                <div class="row">
                    <!-- Stats -->
                    <div class="outer-w3-agile col-xl">
                          <div class="row wrapper border-bottom white-bg page-heading">
                        <div class="col-lg-10">
                            <h2>
                               <b> LIVE Dashboard </b>
                            </h2>
                            <ol class="breadcrumb">

                              <li>You are at: <a href="<?=base_url()?>">Dashboard</a></li>

                            </ol>
                        </div>
                        <div class="col-lg-2">
                        </div>
                    </div>

                        <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between">
                          <div class="wrapper wrapper-content animated fadeIn">

                              <div class="padding-md">
                                  <div class="row" ng-app="livetrack" ng-controller="livetrackController">
                                      <div class="col-md-12">
                                          <div class="panel panel-default">
                                              <div class="table-responsive panel-body">

                                                  <table style="text-align: center;" class="table table-striped table-bordered table-hover ">
                                                      <thead>

                                                      <tr >

                                                      <th style="text-align: center;" ng-repeat="singleRecord in col_data "  >[[ singleRecord ]]</th>

                                                      </tr>
                                                      </thead>
                                                      <tbody>

                          <tr ng-repeat="singleRecord1 in devices">

                          <td ng-repeat="(key, value) in singleRecord1">
                          <i ng-if="value == true" class="fa fa-circle datatable_status_icon" aria-hidden="true" style="color: limegreen"></i>
                          <i ng-if="value == false" class="fa fa-circle datatable_status_icon"  aria-hidden="true" style="color: grey"></i>
                          <div ng-if="key == 'last_updated'"> [[ value ]]</div>
                              <div ng-if="key == 'name_of_tag'" > <strong> [[ value ]]</strong></div>
                          <div ng-if="key == 'asset_type'"> [[ value ]]</div>
                          <div ng-if="key == 'mac_tag'"> [[ value ]]</div>

                          <div ng-if="key == 'battery_level'">
                              <span class="label label-primary" ng-if="value  >= 201 && value  <= 255">Strong</span>
                              <span class="label label-success" ng-if="value  >= 101 && value  <= 201">Medium</span>
                              <span class="label label-danger" ng-if="value  >= 0 && value  <= 100">Weak</span>
                          </div>

                          <div ng-if="key != 'last_updated' && key != 'name_of_tag' && key != 'signal_strength' && key != 'asset_type' && key != 'mac_tag' && key != 'battery_level' && value != true && value != false">

                              <span class="label label-primary" ng-if="value  >= 61 && value  <= 255">Strong [[ value ]]</span>
                              <span class="label label-success" ng-if="value  >= 51 && value  <= 60 ">Medium [[ value ]]</span>
                              <span class="label label-danger" ng-if="value  >= 0 && value  <= 50 ">Weak [[ value ]]</span>
                              <span  ng-if="value == 'Absent'" style="color: red"> [[ value ]]</span>
                          </div>

                          </td>


                          </tr>


                                                      </tbody>

                                                  </table>
                                              </div></div></div></div></div>


                                              </div>



                                      </div>
                                  </div>
                        </div>
                    </div>
                    <!--// Stats -->

                </div>
            </div>

            <!--// three-grids -->
            <div class="container-fluid">
                <div class="row">

                </div>
            </div>
            <!-- Copyright -->
            <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>© 2018 APTS . All Rights Reserved
                </p>
            </div>
            <!--// Copyright -->
        </div>
    </div>


</body>

</html>
