<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Database Management and Transaction System</title>

    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-TileColor" content="#5bc0de">
    <meta name="msapplication-TileImage" content="../assets/img/metis-tile.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="../assets/lib/bootstrap/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/lib/Font-Awesome/css/font-awesome.min.css">

    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/theme.css">

    <!-- DMTS Custom Css -->
    <link rel="stylesheet" href="../assets/css/dmts-custom-local.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
      <script src="assets/lib/html5shiv/html5shiv.js"></script>
        <script src="assets/lib/respond/respond.min.js"></script>
      <![endif]-->

    <!--Modernizr 3.0-->
    <script src="../assets/lib/modernizr-build.min.js"></script>
  </head>
  <body>
    <div id="wrap">
      <div id="top">
        <!-- .navbar -->
        <nav class="navbar navbar-inverse navbar-static-top">

          <!-- Brand and toggle get grouped for better mobile display -->
          <header class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
              <a href="staff.php" id ="tesda-container"class="navbar-brand">
                <img class ="pull-left"id ="dsh-logo"src="../assets/img/logo2.png" alt="">
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
                <a data-toggle="tooltip" data-original-title="Online Application Site" data-placement="bottom" class="btn btn-success btn-sm" href="/DMTSv4/online">
                  <i class="fa fa-globe"></i>
                </a>
              </div>
              <div class="btn-group">
                <a href="../" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom" class="btn btn-metis-1 btn-md">
                  <i class="fa fa-power-off"></i>
                </a>
              </div>
            </div>
          </div><!-- /.topnav -->
        </nav><!-- /.navbar -->

        <!-- header.head -->
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
              <i class="fa fa-flag"></i> Training Institutions</h4> 
          </div><!-- /.main-bar -->
        </header>

        <!-- end header.head -->
      </div><!-- /#top -->
      <div id="left">
        <div class="media user-media">
          <a class="user-link" href="">
            <img class="media-object img-thumbnail user-img" alt="User Picture" style ="height:65px;width:65px;" src="../assets/img/staff.png">
          </a>
          <div class="media-body">
            <br>
            <h5 class="media-heading">Analie Agbay</h5>
            <ul class="list-unstyled user-info">
              <li> <a href="">Staff</a> </li>
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
                <a href=" notification.php">
                  <i class="fa fa-angle-right"></i>&nbsp; Notification
                </a>
              </li>
              <li class="">
                <a href="work-log.php ">
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
                <a href="student-search.php">
                  <i class="fa fa-angle-right"></i>&nbsp; Search Student
                </a>
              </li>
              <li class="">
                <a href="import-students.php">
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
                <a href=" certificate-request.php">
                  <i class="fa fa-angle-right"></i>&nbsp; Certificate Request
                </a>
              </li>
              <li class="">
                <a href=" expired-certificates.php">
                  <i class="fa fa-angle-right"></i>&nbsp; Expired Certificates
                </a>
              </li>
            </ul>
          </li>
          <li class="active">
            <a href="javascript:;">
              <i class="fa fa-dmts fa-book"></i>
              <span class="link-title"> Training Institution </span>
              <span class="fa arrow"></span>
            </a>
            <ul>
              <li class="active">
                <a href="edit-institution.php ">
                  <i class="fa fa-angle-right"></i>&nbsp; Edit Training Institution
                </a>
              </li>
              <li class="">
                <a href="new-institution.php">
                  <i class="fa fa-angle-right"></i>&nbsp; Add New  Institution
                </a>
              </li>
            </ul>
          </li>
          <li class="">
            <a href="javascript:;">
              <i class="fa fa-dmts fa-flag"></i>
              <span class="link-title"> Assessment Center </span>
              <span class="fa arrow"></span>
            </a>
            <ul>
              <li class="">
                <a href="view-ac.php ">
                  <i class="fa fa-angle-right"></i>&nbsp; View  Centers 
                </a>
              </li>
              <li class="">
                <a href=" new-ac.php">
                  <i class="fa fa-angle-right"></i>&nbsp; Add New  Center
                </a>
              </li>
              <li class="">
                <a href="view-assessors.php ">
                  <i class="fa fa-angle-right"></i>&nbsp; View Assessor's List
                </a>
              </li>
              <li class="">
                <a href="new-assessor.php ">
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
                <a href="view-qualification.php ">
                  <i class="fa fa-angle-right"></i>&nbsp; View Qualification
                </a>
              </li>
              <li class="">
                <a href=" new-qualification.php">
                  <i class="fa fa-angle-right"></i>&nbsp; Add New Qualification
                </a>
              </li>
              <li class="">
                <a href=" new-competency.php">
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
                <a href=" view-users.php">
                  <i class="fa fa-angle-right"></i>&nbsp; View User List
                </a>
              </li>
              <li class="">
                <a href=" new-user.php">
                  <i class="fa fa-angle-right"></i>&nbsp; Create new User
                </a>
              </li>
            </ul>
            </li>
         </ul><!-- /#menu -->

      </div><!-- /#left -->
      <div id="content">
        <div class="outer">
          <div class="inner">
            <div class ="row">
              <div class ="col-lg-12">
                 <div class="box dark">
                  <header>
                    <div class="icons">
                      <i class="fa fa-edit"></i>
                    </div>
                    <h5>Edit Training Insitution</h5>
                    <div class ="pull-right col-sm-6 col-md-6" style ="padding:5px;">
                      <div class ="input-group">
                          &nbsp;
                          <div class ="input-group-btn">
                            <a href="view-institutions.php">
                              <button class ="btn btn-sm btn-metis-3 btn-rect "> <i class ="fa fa-compass"></i>&nbsp; Back to Institutions List</button>
                            </a>
                          </div>
                      </div>
                    </div>
                  </header>
                  <div  class="body">
                    <div class ="row">
                      <div class ="col-lg-12">
                        <div class ="col-lg-5 ">
                            <div class ="form-group">
                                <label>Training Insitution</label>
                                <input type ="text" class ="form-control">
                            </div>
                            <div class ="form-group">
                                <label>Training Offered </label>
                                <textarea class ="form-control" style ="height:150px;"></textarea> 
                            </div>
                        </div>
                        <div class ="col-lg-5 ">
                            <div class ="form-group">
                                <label>Contact Number</label>
                                <input type ="text" class ="form-control">
                            </div>
                            <div class ="form-group">
                                <label>Person In Charge</label>
                                <input type ="text" class ="form-control">
                            </div>
                            <div class ="form-group">
                                <label>Complete Address</label>
                                <textarea class ="form-control" style ="height:75px;"></textarea> 
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class ="row">
                      <div class ="col-lg-12">
                        <div class ="col-lg-3 col-lg-offset-6">
                          <div class ="input-group-btn ">
                             <button class ="btn btn-sm btn-success btn-rect " ><i class ="fa fa-save"></i>&nbsp; Save Changes</button>
                          </div>
                          <div class ="input-group-btn ">
                            <a href="view-institutions.php">
                             <button class ="btn btn-sm btn-primary btn-rect " ><i class ="fa fa-undo"></i>&nbsp; Cancel</button>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
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
    <script src="../assets/lib/jquery.min.js"></script>
    <script src="../assets/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/lib/jquery-ui.min.js"></script>
    <script src="../assets/js/main.min.js"></script>
    </body>
</html>