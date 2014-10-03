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
            <h4><i class="fa fa-tags"></i>New Competency</h4> 
          </div><!-- /.main-bar -->
        </header>
      </div>
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
          <li class="">
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
              <li class="">
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
          <li class="active">
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
              <li class="active">
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
                    <h5>New Competency</h5>
                    <div class ="pull-right col-sm-4 col-md-4" style ="padding:5px;">
                      <div class ="input-group">
                          &nbsp;
                          <div class ="input-group-btn">
                            <a href="<?php echo base_url('index.php/home/new_qualification') ?>">
                              <button class ="btn btn-sm btn-primary btn-rect "><i class ="fa fa-plus"> </i> &nbsp;Add New Qualification</button>
                            </a>
                          </div> 
                          &nbsp;
                          <div class ="input-group-btn">
                            <a href="<?php echo base_url('index.php/home/view_qualification') ?>">
                              <button class ="btn btn-sm btn-metis-3 btn-rect "><i class ="fa fa-book"> </i> &nbsp;View Qualifications</button>
                            </a>
                          </div>
                        </div>
                      </div>
                  </header>
                  <div class=" body">

                    <form role ="form">
                        <div class ="row">
                          <div class ="col-lg-12">
                            <div class ="col-lg-5">
                              <div class ="form-group">
                                  <label>Qualification Title</label>
                                  <input type ="text" class ="form-control">
                              </div>
                              <div class ="form-group">
                                  <label>Qualification Level</label>
                                  <select class ="form-control">
                                      <option>Choose a range of level</option>
                                      <option>NC I</option>
                                      <option>NC II</option>
                                      <option>NC III</option>
                                      <option>NC IV</option>
                                      <option>NC V</option>
                                      <option>NC VI</option>
                                      <option>NC VII</option>
                                  </select>
                              </div>
                              <div class ="form-group">
                              <div class ="table">
                                  <table class ="table table-striped">
                                      <thead>
                                        <tr>
                                          <th>Qualification Competencies</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>Sample Competency</td>
                                          <td><i class ="fa fa-times"></i> Delete / <i class ="fa fa-edit"></i> Edit</td>
                                        </tr>
                                        <tr>
                                          <td>Sample Competency</td>
                                          <td><i class ="fa fa-times"></i> Delete / <i class ="fa fa-edit"></i> Edit</td>
                                        </tr>
                                      </tbody>
                                  </table>
                             </div>
                              </div>
                            </div>
                            <div class ="col-lg-6">
                              <div class ="form-group">
                                  <label>Additional Competencies:</label>
                                  <input type ="text" class ="form-control" placeholder ="Competency">
                                  <input type ="text" class ="form-control" placeholder ="Competency">
                                  <input type ="text" class ="form-control" placeholder ="Competency">
                              </div>
                              <div class ="col-lg-2">
                                  <div class ="input-group-btn ">
                                     <button class ="btn btn-sm btn-success btn-rect " ><i class ="fa fa-plus-circle"></i>&nbsp; Add Now</button>
                                  </div>
                                  <div class ="input-group-btn ">
                                     <button class ="btn btn-sm btn-primary btn-rect " type ="reset"><i class ="fa fa-undo"></i>&nbsp; Cancel</button>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class ="row">
                            <div class ="col-lg-12">
                              <div class ="col-lg-5"></div>
                              
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