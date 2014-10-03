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
                <h4 class ="pull-left "style ="font-size:18px; letter-spacing:3pt;">TESDA Database Management and Transaction System <sub></h4>
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
                <a data-toggle="tooltip" data-original-title="Download User Guide" data-placement="bottom" class="btn btn-info btn-sm" href="<?php echo base_url('assets/User Guide.docx') ?>" target ="_blank">
                  <i class="fa fa-question"></i>
                </a>
              </div>
              <div class="btn-group">
                <a data-toggle="tooltip" data-original-title="Online Application Site" data-placement="bottom" class="btn btn-success btn-sm" href="http://dmts.orgfree.com/index.php/staff">
                  <i class="fa fa-globe"></i>
                </a>
              </div>
              <div class="btn-group">
                <a data-toggle="tooltip" data-original-title="Change Password" data-placement="bottom" class="btn btn-metis-5 btn-sm" href="">
                  <i class="fa fa-lock"></i>
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
          <div class="search-bar"><!-- 
            <form class="main-search">
              <div class="input-group">
                <input id="qsearch" type="text" class="input-small form-control" placeholder=" Quick Search ...">
                <span class="input-group-btn">
                    <button class="btn btn-primary btn-sm text-muted" type="button"><i class="fa fa-search"></i></button>
                </span>
              </div>
            </form> -->
          </div>
          <div class="main-bar">
            <h4 style ="letter-spacing:1pt;"><i class="fa fa-home " style ="color:#ECDA04;"></i> DMTS Dashboard</h4></div><!-- /.main-bar -->
        </header>
			</div>
      <div id="left">
        <div class="media user-media">
          <a class="user-link" href="">
            <img class="media-object img-thumbnail user-img" alt="User Picture" style ="height:65px;width:65px;" src="<?php echo base_url('assets/img/staff.png') ?>">
          </a>
          <div class="media-body">
            <br>
            <h5 class="media-heading"><?php echo $name ?></h5>
            <ul class="list-unstyled user-info"><li> <a href=""><?php echo $position ?></a> </li></ul>
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
            <div id ="dmts-content">
              <div class ="row">
                <div class="col-lg-12">
                    <div class ="col-md-4 feature">
                      <img class="feature-logo" src="<?php echo base_url('assets/img/certificate-logo.png') ?>">
                    </div>
                    <div class ="col-md-4 feature" >
                      <img class="feature-logo"src="<?php echo base_url('assets/img/database.png') ?>">
                    </div>
                    <div class ="col-md-4 feature">
                    <img class="feature-logo" src="<?php echo base_url('assets/img/center-logo.png') ?>">
                    </div>
                </div>
              </div>
              <br>
              <div class ="row">
                <div class="col-lg-12">
                    <div class ="col-md-4 feature-desc" >
                       <strong>Certificate Request Monitoring</strong> <br>
                        Manage and organize NC certificate requests from the Online Certificate Application. Verified request are ready for printing with predefined formats.
                    </div>
                    <div class ="col-md-4 feature-desc" >
                       <strong>Student's Data Management</strong> <br>
                        DMTS removes the hassle of browsing through several excel files to find a single student's record. 
It's feature includes quick record search on students, assessment centers and necessary details and has  its filtering options!

                    </div>
                    <div class ="col-md-4 feature-desc">
                       <strong >Auto Certificate Printing</strong><br>
                        No more information encoding from NC Certificate Request, and no more need to manually format to print these certificates. Just  a click on a "Print" button, Verified NC Request are printed in a nip
with guidelines followed.
                    </div>
                </div>
              </div>
              <br>
              <div class ="row">
                <div class="col-lg-12">
                   <i><strong>Database Management and Transaction System </strong></i>
 is a system developed to help TESDA Cebu Provincial Staff manage and keep track of their students record and to enhance their process in printing National certificates.
  In this way, DMTS contributes to the improvement of the transactions and productivity of work in TESDA’s Provincial Office - Cebu. 
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
    <script src="<?php echo base_url('assets/lib/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/lib/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/main.min.js') ?>"></script>
    <script type="text/javascript" src = "<?php echo base_url('assets/js/home.js') ?>"></script>
  </body>
</html>