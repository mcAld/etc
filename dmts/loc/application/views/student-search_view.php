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
    <link href="<?php echo base_url('assets/css/jquery-ui.css') ?>" rel="stylesheet" media="screen">
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

          <!-- ."main-bar -->
          <div class="main-bar">
            <h4>
              <i class="fa fa-search"></i>  Student's Search</h4>
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

        <!-- #menu -->
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
              <li class="active">
                <a href="<?php echo base_url('index.php/home/student_search') ?>">
                  <i class="fa fa-angle-right"></i>&nbsp; Search Student
                </a>
              </li>
              <li class="">
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
        </ul><!-- /#menu -->
      </div>
      <div id="content">
        <div class="outer">
          <div class="inner">
          <form role ="form">
            <div class ="row">
              <div class ="col-lg-12">
                <div class="box dark">
                  <header>
                    <div class="icons">
                      <i class="fa fa-filter"></i>
                    </div>
                  	<div id="loading" style="display: none" ><img src="<?php echo base_url('assets/img/ajax-loader.gif'); ?>" ></div>
                    <h5> Filter Search</h5>
                    <div class ="pull-right col-sm-3 col-md-3" style ="padding:5px;">
                      <div class ="input-group">
                        
                        <div class ="input-group-btn">
                          <a href ="">
                            <button class ="btn btn-sm btn-metis-3 btn-rect " id="commnce_srch">Search Now</button>
                          </a>
                        </div>
                        &nbsp;
                        <div class ="input-group-btn">
                           <button class ="btn btn-sm btn-primary btn-rect ">Reset Filter Values</button>
                        </div>
                        &nbsp;
                        <div class ="input-group-btn">
                          <a class="btn btn-sm btn-default minimize-box" data-toggle="collapse" href="#filter-option">
                            <i class="fa fa-chevron-up"></i>
                          </a>
                        </div>
                          
                      </div>
                    </div>
                  </header>
                <div  id ="filter-option" class="accordion-body collapse in body"> 
                  <div class ="row">
                    <div class ="col-lg-4">
                        <div class ="form-group">
                            <label>Firstname</label>
                           <input type ="text" id="firstname" class ="form-control ">
                        </div>
                        <div class ="form-group">
                            <label>Lastname</label>
                           <input type ="text" id="lastname" class ="form-control " >
                        </div>
                        <div class ="form-group">
                            <label>Date From</label>
                           <input type ="date" id ="date_from" class ="form-control " >
                        </div>
                        <div class ="form-group">
                            <label>Date To</label>
                           <input type ="date" id ="date_to" class ="form-control " >
                        </div>
                       </div>
                      <div class ="col-lg-4">
                        <div class ="form-group">
                          <label>Educational Attainment</label>
                           <input type ="text" id ="education" class ="form-control " >
                        </div>
                        <div class ="form-group">
                            <label>Technology Insitution</label>
                           <input type ="text" id ="school" class ="form-control " >
                        </div>
                         <div class ="form-group">
                            <label>Assessment Center</label>
                           <input type ="text" id ="assessment_center" class ="form-control " >
                        </div>
                        <div class ="form-group">
                            <label>Assessors Name</label>
                           <input type ="text" id="assessor" class ="form-control " >
                        </div>
                       </div>
                      <div class ="col-lg-4">
                         <div class ="form-group">
                            <label>Qualification Title</label>
                           <input type ="text" id="qual_title" class ="form-control " >
                        </div>
                        <div class ="form-group">
                            <label>Reference Number</label>
                          <input type ="text" id="ref_num" class ="form-control " >
                        </div>
                         <div class ="form-group">
                            <label>Sector</label>
                           <input type ="text" id="sector" class ="form-control " >
                        </div>
                         <div class ="form-group">
                            <label>Date of Assessment</label>
                           <input type ="date" id ="assessment_date" class ="form-control " >
                        </div>
                       </div>
                     </div>
                   </form>
                  </div>
                </div>
              </div>
            </div>
            <div class ="row" id="tbl_srchresult" style="visibility:hidden"></div>
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
    <!-- #edit-student -->
    <div id="edit-student" class="modal fade">
    </div><!-- /.modal --><!-- /#add-new-student -->
    <script src="<?php echo base_url('assets/lib/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/lib/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/lib/jquery-ui.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/lib/tablesorter/js/jquery.tablesorter.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/main.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/home.js') ?>"></script>
    <script type="text/javascript"> 
			$(document).ready(function(){
				$("#education").autocomplete({
					source: <?php echo json_encode($autocomplete['edu']) ?>
				});
				
				$("#school").autocomplete({
					source: <?php echo json_encode($autocomplete['institution']) ?>
				});
				
				$("#assessment_center").autocomplete({
					source: <?php echo json_encode($autocomplete['assessment_center']) ?>
				});
				
				$("#assessor").autocomplete({
					source: <?php echo json_encode($autocomplete['comp_assessor']) ?>
				});
				
				$("#qual_title").autocomplete({
					source: <?php echo json_encode($autocomplete['nc_title']) ?>
				});
				
				$("#sector").autocomplete({
					source: <?php echo json_encode($autocomplete['sector']) ?>
				});
				
			});
		</script>
    
  </body>
</html>