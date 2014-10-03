<!DOCTYPE html>
<html lang="en">
  <head>
		<meta charset="UTF-8">
		<title>Database Management and Transaction System</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-TileColor" content="#5bc0de">
    <meta name="msapplication-TileImage" content="<?php echo base_url('assets/img/metis-tile.png') ?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/lib/bootstrap/css/bootstrap.min.css') ?>">
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
            <h4><i class="fa fa-book"></i> New Assessment Center</h4> 
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
            <h5 class="media-heading">Analie Agbay</h5>
            <ul class="list-unstyled user-info">
              <li> <a href="">Staff</a> </li>
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
          <li class="">
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
              <i class="fa fa-dmts fa-book"></i>
              <span class="link-title"> Training Institution </span>
              <span class="fa arrow"></span>
            </a>
            <ul>
              <li class="">
                <a href="<?php echo base_url('index.php/home/view_institutions') ?>">
                  <i class="fa fa-angle-right"></i>&nbsp; View Training Institution
                </a>
              </li>
              <li class="">
                <a href="<?php echo base_url('index.php/home/new_institution') ?>">
                  <i class="fa fa-angle-right"></i>&nbsp; Add New  Institution
                </a>
              </li>
            </ul>
          </li>
          <li class="active">
            <a href="javascript:;">
              <i class="fa fa-dmts fa-flag"></i>
              <span class="link-title"> Assessment Center </span>
              <span class="fa arrow"></span>
            </a>
            <ul>
              <li class="">
                <a href="<?php echo base_url('index.php/home/view_ac') ?>">
                  <i class="fa fa-angle-right"></i>&nbsp; View  Centers 
                </a>
              </li>
              <li class="active">
                <a href="<?php echo base_url('index.php/home/new_ac') ?>">
                  <i class="fa fa-angle-right"></i>&nbsp; Add New  Center
                </a>
              </li>
              <li class="">
                <a href="<?php echo base_url('index.php/home/view_assessors') ?>">
                  <i class="fa fa-angle-right"></i>&nbsp; View Assessor's List
                </a>
              </li>
              <li class="">
                <a href="<?php echo base_url('index.php/home/new_assessor') ?>">
                  <i class="fa fa-angle-right"></i>&nbsp; Add New Assessor
                </a>
              </li>
            </ul>
          </li>
          <li class="">
            <a href="javascript:;">
              <i class="fa fa-dmts fa-tags"></i>
              <span class="link-title"> Qualification Title </span>
              <span class="fa arrow"></span>
            </a>
            <ul>
              <li class="">
                <a href="<?php echo base_url('index.php/home/view_qualification') ?>">
                  <i class="fa fa-angle-right"></i>&nbsp; View Qualification
                </a>
              </li>
              <li class="">
                <a href="<?php echo base_url('index.php/home/new_qualification') ?>">
                  <i class="fa fa-angle-right"></i>&nbsp; Add New Qualification
                </a>
              </li>
              <li class="">
                <a href="<?php echo base_url('index.php/home/new_competency') ?> ">
                  <i class="fa fa-angle-right"></i>&nbsp; Add New Competency 
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
                <div class="box dark">
                  <header>
                    <div class="icons">
                      <i class="fa fa-plus-circle"></i>
                    </div>
                    <h5>New Assessment Center</h5>
                     <div class ="pull-right col-sm-6 col-md-6" style ="padding:5px;">
                      <div class ="input-group">
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                          <div class ="input-group-btn">
                            <a href="<?php echo base_url('index.php/home/new_assessor') ?>">
                              <button class ="btn btn-sm btn-primary btn-rect "> <i class ="fa fa-plus-circle"></i>&nbsp; Add New Assessor</button>
                            </a>
                          </div>
                          &nbsp;
                          <div class ="input-group-btn">
                            <a href="<?php echo base_url('index.php/home/view_ac') ?>">
                              <button class ="btn btn-sm btn-metis-3 btn-rect "> <i class ="fa fa-book"></i>&nbsp; View Assessment Centers</button>
                            </a>
                          </div>
                          &nbsp;
                          <div class ="input-group-btn">
                            <a href="<?php echo base_url('index.php/home/view_assessors') ?>">
                              <button class ="btn btn-sm btn-metis-3 btn-rect "> <i class ="fa fa-user"></i>&nbsp; View Assessors</button>
                            </a>
                          </div>
                      </div>
                    </div>
                  </header>
                  <div  class="body">
                    <form role ="form">
                        <div class ="row">
                          <div class ="col-lg-12">
                            <div class ="col-lg-5 ">
                                <div class ="form-group">
                                    <label>Assessment Center</label>
                                    <input type ="text" class ="form-control">
                                </div>
                                <div class ="form-group">
                                    <label>Qualifications Assessed </label>
                                    <textarea class ="form-control" style ="height:150px;"></textarea> 
                                </div>
                            </div>
                            <div class ="col-lg-5 ">
                                <div class ="form-group">
                                    <label>Complete Address</label>
                                    <textarea class ="form-control" style ="height:75px;"></textarea> 
                                </div>
                                <div class ="form-group">
                                    <label>Contact Number</label>
                                    <input type ="text" class ="form-control">
                                </div>
                                <div class ="form-group">
                                    <label>Assessment Center Manager</label>
                                    <input type ="text" class ="form-control">
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class ="row">
                          <div class ="col-lg-12">
                            <div class ="col-lg-3 col-lg-offset-6">
                              <div class ="input-group-btn ">
                                 <button class ="btn btn-sm btn-success btn-rect " ><i class ="fa fa-plus-circle"></i>&nbsp; Add Now</button>
                              </div>
                              <div class ="input-group-btn ">
                                 <button class ="btn btn-sm btn-primary btn-rect " type ="reset"><i class ="fa fa-refresh"></i>&nbsp; Reset Values</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                  </div>
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
    <script src="<?php echo base_url('assets/lib/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/lib/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/lib/jquery-ui.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/main.min.js') ?>"></script>
    <script type="text/javascript" src = "<?php echo base_url('assets/js/home.js') ?>"></script>
    </body>
</html>