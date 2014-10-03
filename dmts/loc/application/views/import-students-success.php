<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Database Management and Transaction System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-TileColor" content="#5bc0de">
    <meta name="msapplication-TileImage" content="<?php echo base_url('assets/img/metis-tile.png') ?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/lib/bootstrap/css/bootstrap.css') ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/lib/Font-Awesome/css/font-awesome.min.css') ?>">		
		<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/theme.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/dmts-custom-local.css') ?>">

    <script src=" <?php echo base_url('assets/lib/modernizr-build.min.js') ?> " ></script>
  </head>
  <body>
    <div id="wrap">
      <div id="top">
        <nav class="navbar navbar-inverse navbar-static-top">
          <header class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
              <a href="<?php echo base_url('index.php/home') ?>" id ="tesda-container"class="navbar-brand">
                <img class ="pull-left"id ="dsh-logo"src="<?php echo base_url('assets/img/logo2.png') ?> " alt="">
                <h4 class ="pull-left">TESDA Database Management and Transaction System <sub></h4>
              </a>
          </header>
          <div class="topnav">
            <div class="btn-toolbar">
              <div class="btn-group">
                <a data-placement="bottom" data-original-title="Show / Hide Sidebar" data-toggle="tooltip" class="btn btn-primary btn-sm" id="changeSidebarPos">
                  <i class="fa fa-expand"></i>
                </a>
              </div>
              <div class="btn-group">
                <a data-toggle="modal" data-original-title="Help" data-placement="bottom" class="btn btn-info btn-sm" href="#helpModal">
                  <i class="fa fa-question"></i>
                </a>
              </div>
              <div class="btn-group">
                <a data-toggle="tooltip" data-original-title="Online Application Site" data-placement="bottom" class="btn btn-success btn-sm" href="http://dmts.orgfree.com/index.php/staff">
                  <i class="fa fa-globe"></i>
                </a>
              </div>
              <div class="btn-group">
                <a href="<?php echo base_url('index.php/home/logoff') ?>" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom" class="btn btn-metis-1 btn-sm">
                  <i class="fa fa-power-off"></i>
                </a>
              </div>
            </div>
          </div>
        </nav>
        <header class="head">
          <div class="search-bar">
            <form class="main-search">
              <div class="input-group">
                <input type="text" class="input-small form-control" placeholder=" Quick Search ...">
                <span class="input-group-btn">
                    <button class="btn btn-primary btn-sm text-muted" type="button"><i class="fa fa-search"></i></button>
                </span>
              </div>
            </form>
          </div>
          <div class="main-bar">
            <h4><i class="fa fa-upload"></i>  Import Students</h4>
          </div><!-- /.main-bar -->
        </header>

        <!-- end header.head -->
      </div><!-- /#top -->
      <div id="left">
        <div class="media user-media">
          <a class="user-link" href="">
            <img class="media-object img-thumbnail user-img" alt="User Picture" style ="height:65px;width:65px;" src="<?php echo base_url('assets/img/staff.png') ?>">
          </a>
          <div class="media-body">
            <br>
            <h5 class="media-heading"><?php echo $name ?></h5>
            <ul class="list-unstyled user-info">
              <li> <a href=""><?php echo $position ?></a> </li>
            </ul>
          </div>
        </div>
        <ul id="menu" class="collapse">
          <li class="nav-header" style ="text-align:center;">Menu</li>
          <li class="nav-divider"></li>
          <li class="">
            <a href="javascript:;">
              <i class="fa fa-dmts  fa-dashboard"></i>
              <span class="link-title">Dashboard</span>
              <span class="fa arrow"></span>
            </a>
            <ul>
              <li class="">
                <a href="<?php echo base_url('index.php/home/notification') ?>">
                  <i class="fa fa-angle-right"></i>&nbsp; Notification
                </a>
              </li>
              <li class="">
                <a href="<?php echo base_url('index.php/home/worklog') ?>">
                  <i class="fa fa-angle-right"></i>&nbsp; Work log
                </a>
              </li>
            </ul>
          </li>
          <li class="active">
            <a href="javascript:;">
              <i class="fa fa-dmts  fa-briefcase"></i>
              <span class="link-title">Students Data</span>
              <span class="fa arrow"></span>
            </a>
            <ul>
              <li class="">
                <a href="<?php echo base_url('index.php/home/student_search') ?>">
                  <i class="fa fa-angle-right"></i>&nbsp; Search Student
                </a>
              </li>
              <li class="active">
                <a href="<?php echo base_url('index.php/home/import_students') ?>">
                  <i class="fa fa-angle-right"></i>&nbsp; Import Student
                </a>
              </li>
            </ul>
          </li>
          <li class="">
            <a href="javascript:;">
              <i class="fa fa-dmts fa-certificate"></i>
              <span class="link-title"> Certificates </span>
              <span class="fa arrow"></span>
            </a>
            <ul>
              <li class="">
                <a href="<?php echo base_url('index.php/home/certificate_request') ?>">
                  <i class="fa fa-angle-right"></i>&nbsp; Certificate Request
                </a>
              </li>
              <li class="">
                <a href="<?php echo base_url('index.php/home/expired_certificate') ?> ">
                  <i class="fa fa-angle-right"></i>&nbsp; Expired Certificates
                </a>
              </li>
            </ul>
          </li>
          <li class="">
            <a href="javascript:;">
              <i class="fa fa-dmts fa-group"></i>
              <span class="link-title"> Manage Users</span>
              <span class="fa arrow"></span>
            </a>
            <ul>
              </li>
              <li class="">
                <a href="<?php echo base_url('index.php/home/view_users') ?> ">
                  <i class="fa fa-angle-right"></i>&nbsp; View User List
                </a>
              </li>
              <li class="">
                <a href="<?php echo base_url('index.php/home/new_user') ?>">
                  <i class="fa fa-angle-right"></i>&nbsp; Create new User
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <div id="content">
        <div class="outer">
          <div class="inner">
            <div class ="row">
              <div class ="col-lg-12">
                
              </div>
            </div>
            <div class ="row">
              <div class ="col-lg-12">
                <div class="box dark">
                  <header>
                    <div class="icons">
                      <img src = "<?php echo base_url('assets/img/excel.png') ?>" style ="height:20px;">
                    </div>
                    <h5>Imports Students from Excel file</h5>
                  </header>
                  <div class="body">
                    <?php echo form_open_multipart('home/do_upload');?>
                      <div class ="row">
                          <div class ="col-lg-4 ">
                            <label>Import Excel File .</label>
                            <div class="input-group">
                              <input type ="file" name="userfile" class ="form-control btn-default">
                              <span class="input-group-btn">
                                 <button class="btn btn-success" type="submit">Go!</button>
                              </span>
                            </div><!-- /input-group -->
                          </div>
                          
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class ="row">
              <div class ="col-lg-12">
                <div class="box dark">
                  <header>
                    <div class="icons">
                     <i class ="fa fa-list"></i>
                    </div>
                    <h5>Student's List</h5>
                  </header>
                  <frameset>
                  <div class="body">
                    <form role ="form">
                      <div class ="row">
                          <div class ="col-lg-12 ">
                            <div class ="table-responsive">
                                <table id ="student-list" class ="table table-bordered table-striped table-condensed table-sorter table-hover" >
                                  <thead>
                                      <tr>
                                          <th><input type = "checkbox"></th>
                                          <th>Region</th>
                                          <th>Province</th>
                                          <th>Reference Number</th>
                                          <th>Last Name</th>
                                          <th>First Name</th>
                                          <th>M.I.</th>
                                          <th>Date of Birth</th>
                                          <th>Modality</th>
                                          <th>Client Type</th>
                                          <th>Complete Address</th>
                                          <th>Contact No.</th>
                                          <th>Sex</th>
                                          <th>Educational Attainment</th>
                                          <th>Training Completed</th>
                                          <th>Institution / School</th>
                                          <th>Company</th>
                                          <th>Assessment Center</th>
                                          <th>Competency Assessor's Name</th>
                                          <th>Assessor's Accreditation Number</th>
                                          <th>Sector</th>
                                          <th>Type of Certificate</th>
                                          <th>NC Title</th>
                                          <th>COC Title</th>
                                          <th>Certificate No.</th>
                                          <th>Assessment Results</th>
                                          <th>Date of Certification</th>
                                          <th>Expiration Date</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                  	<?php 
								
																				foreach($new_stdata as $row){
																		?>
																					<tr>
																						<td class="tckbox"><input name="td" type ="checkbox" value = '<?php echo $row->tbl_num ?>'></td>
																						<?php 
																							echo "<td>".$row->region ."</td>";
																							echo "<td>".$row->province ."</td>";
																							echo "<td>".$row->cars ."</td>";
																							echo "<td>".$row->last_name ."</td>";
																							echo "<td>".$row->first_name ."</td>";
																							echo "<td>".$row->middle_name ."</td>";
																							echo "<td>".date('M-d-y', strtotime($row->date_of_birth)) ."</td>";
																							echo "<td>".$row->modality ."</td>";
																							echo "<td>".$row->client_type ."</td>";
																							echo "<td>".$row->complete_address ."</td>";
																							echo "<td>".$row->telephone_num ."</td>";
																							echo "<td>".$row->gender ."</td>";
																							echo "<td>".$row->educational_attainment ."</td>";
																							echo "<td>".$row->training_completed ."</td>";
																							echo "<td>".$row->institution_school ."</td>";
																							echo "<td>".$row->company ."</td>";
																							echo "<td>".$row->assessment_center ."</td>";
																							echo "<td>".$row->comp_assessor ."</td>";
																							echo "<td>".$row->acridatation_num ."</td>";
																							echo "<td>".$row->sector ."</td>";
																							echo "<td>".$row->type_of_certificate ."</td>";
																							echo "<td>".$row->nc_title ."</td>";
																							echo "<td>".$row->coc_title ."</td>";
																							echo "<td>".$row->certificate_num ."</td>";
																							echo "<td>".$row->assessment_results ."</td>";
																							echo "<td>".date('m-d-y', strtotime($row->date_of_certification)) ."</td>";
																							echo "<td>".date('m-d-y', strtotime($row->expiry_of_certificate)) ."</td>";
																						?>
																					</tr>
																		<?php
																				}
																		?>
                                  </tbody>
                                </table>
                            </div>
                          </div>
                      </div>
                    </form>
                  </div>
                </frameset>

                </div>
              </div>
            </div>
          </div>
          <!-- end .inner -->
        </div>
        <!-- end .outer -->
      </div>
      <!-- end #content -->
    </div><!-- /#wrap -->
    <div id="footer">
      <p>2014 &copy; DMTS</p>
    </div>

    <!-- #helpModal -->
    <div id="helpModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Modal title</h4>
          </div>
          <div class="modal-body">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
              in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal --><!-- /#helpModal -->
    <!-- #add-new-student -->
    <div id="add-new-student" class="modal fade">
      <div class="modal-dialog" style ="width:1000px;">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class ="fa fa-plus-circle"></i> &nbsp; Add New Student</h4>
          </div>
          <form role ="form">
            <div class="modal-body">
              <div class ="row">
                  <div class ="col-lg-4">
                      <div class ="form-group">
                          <label class ="control-label">Reference Number: </label>
                          <span >
                            <input type ="text"class ="form-control" >
                          </span>
                      </div>
                      <div class ="form-group">
                          <label class ="control-label">Region / Province:  <sub> (e.g Region VII , Cebu) </label>
                          <span >
                            <input type ="text"class ="form-control" >
                          </span>
                      </div>
                      <div class ="form-group">
                          <label class ="control-label">Fullname: <sub> (Lastname/ Firstname / Middle Initial) </sub></label>
                          <span >
                            <input type ="text"class ="form-control" >
                          </span>
                      </div>
                      <div class ="form-group">
                          <label class ="control-label">Date of Birth: </label>
                          <span >
                            <input type ="date"class ="form-control" >
                          </span>
                      </div>
                      <div class ="form-group">
                          <label class ="control-label">Modality <sub> (Regular / FAST / TWSP , etc.)  </label>
                          <span >
                            <input type ="text"class ="form-control" >
                          </span>
                      </div>
                      <div class ="form-group">
                          <label class ="control-label">Complete Address </label>
                          <span >
                            <textarea style="height: 110px;" class ="form-control" ></textarea>
                          </span>
                      </div>
                      <div class ="form-group">
                          <label class ="control-label">Contact Number <sub> (+639 - xxxxxxxxx)  </label>
                          <span >
                            <input type ="text"class ="form-control" >
                          </span>
                      </div>
                      <div class ="form-group">
                          <label class ="control-label">Gender  </label>
                          <div class ="input-btn-group">
                              <input type ="radio" name ="gender"> &nbsp; <strong>Male </strong>
                              &nbsp;&nbsp; &nbsp;
                              <input type ="radio" name ="gender"> &nbsp; <strong>Female</strong>
                          </div>
                      </div>
                  </div>
                  <div class ="col-lg-4">
                      <div class ="form-group">
                          <label class ="control-label">Client Type  </label>
                          <span >
                            <select class = "form-control">
                                <option>-Choose types of Client-</option>
                                <option> Industry Worker</option>
                                <option> Tek-Bok Graduate</option>
                                <option> TWSP</option>
                                <option> Others</option>
                            </select>
                          </span>
                      </div>
                      <div class ="form-group">
                          <label class ="control-label">Educational Attainment </label>
                          <span >
                            <select class = "form-control">
                                <option>-Choose from the category-</option>
                                <option> Elementary Graduate</option>
                                <option> High School Graduate</option>
                                <option> College Graduate/Higher</option>
                                <option> College Level</option>
                                <option> Post Secondary  Graduate (TVET)</option>
                                <option> Post Secondary Level (TVET)</option>
                            </select>
                          </span>
                      </div>
                      <div class ="form-group">
                          <label class ="control-label">Training Completed </label>
                          <span >
                            <input type ="text" class ="form-control">
                          </span>
                      </div>
                      <div class ="form-group">
                          <label class ="control-label"> Institution /School </label>
                          <span >
                            <input type ="text" class ="form-control">
                          </span>
                        </div>
                        <div class ="form-group">
                          <label class ="control-label"> Company </label>
                          <span >
                            <input type ="text" class ="form-control">
                          </span>
                        </div>
                        <div class ="form-group">
                          <label class ="control-label"> Assessment Center </label>
                          <span >
                            <input type ="text" class ="form-control">
                          </span>
                        </div>
                        <div class ="form-group">
                          <label class ="control-label"> Company Assessor's Name </label>
                          <span >
                            <input type ="text" class ="form-control">
                          </span>
                        </div>
                        <div class ="form-group">
                          <label class ="control-label">  Assessor's Accreditation Number </label>
                          <span >
                            <input type ="text" class ="form-control">
                          </span>
                        </div>
                        <div class ="form-group">
                          <label class ="control-label">  Sector </label>
                          <span >
                            <input type ="text" class ="form-control">
                          </span>
                        </div>
                  </div>
                  <div class ="col-lg-4">
                        <div class ="form-group">
                          <label class ="control-label">  Type of Certificate <sub>(NC / COC)</sub> </label>
                          <select class ="form-control" >
                              <option></option>
                              <option>NC</option>
                              <option>COC</option>
                          </select>
                        </div>
                        <div class ="form-group">
                          <label class ="control-label"> NC Title </label>
                         <span >
                            <input type ="text" class ="form-control">
                          </span>
                        </div>
                        <div class ="form-group">
                          <label class ="control-label"> COC Title </label>
                         <span >
                            <input type ="text" class ="form-control">
                          </span>
                        </div>
                        <div class ="form-group">
                          <label class ="control-label"> Certification Number </label>
                         <span >
                            <input type ="text" class ="form-control">
                          </span>
                        </div>
                        <div class ="form-group">
                          <label class ="control-label">  Assessment Results <sub>(Competent / Not yet Competent)</sub> </label>
                          <select class ="form-control" >
                              <option></option>
                              <option>Competent</option>
                              <option>Not Yet Competent</option>
                          </select>
                        </div>
                        <div class ="form-group">
                          <label class ="control-label"> Date of Certification </label>
                         <span >
                            <input type ="date" class ="form-control">
                          </span>
                        </div>
                        <div class ="form-group">
                          <label class ="control-label"> Expiration Date </label>
                         <span >
                            <input type ="date" class ="form-control">
                          </span>
                        </div>
                        <div class ="form-group">
                          <label class ="control-label"> Notes: </label>
                         <textarea class ="form-control" style ="height:100px;" >
                            
                          </textarea>
                        </div>
                  </div> 
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" >Submit</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </form>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal --><!-- /#add-new-student -->
    <script src="<?php echo base_url('assets/lib/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/lib/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/lib/jquery-ui.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/lib/tablesorter/js/jquery.tablesorter.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/main.min.js') ?>"></script>
    <script>
      $(function() {
        $("#student-list").tablesorter();
      });
    </script>
    </body>
</html>