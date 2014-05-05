<?php
/** @file
 * @brief 	About the application and developers; link to Chelsea School
 * @copyright 	2014 Chelsea School 
 * @copyright 	2005 Grasslands Regional Division #6
 * @copyright		This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or (at your option) any later version.
    This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
    You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 * @authors		Rik Goldman, Sabre Goldman, Jason Banks, Alex, James, Paul, Bryan, TJ, Jonathan, Micah, Stephen, Joseph, Sean
 * @author		M. Nielson
 */

/** @mainpage
 * MyIEP Documentation
 * @todo
 * 1. Deploy new functions
 * 2. Move js (Javascript files) into JS folder and change all references
 * 3. Move css out of style folder and into css folder (standard)
 */


//the authorization level for this page!
$MINIMUM_AUTHORIZATION_LEVEL = 100;    //anybody



/**
 * Path for IPP required files.
 */


define('IPP_PATH','./');
require_once IPP_PATH . 'etc/init.php';
require_once IPP_PATH . 'include/supporting_functions.php';

header('Pragma: no-cache'); //don't cache this page!


?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="About MyIEP">
    <meta name="author" content="Rik Goldman" >
    <link rel="shortcut icon" href="./assets/ico/favicon.ico">

    <title>MyIEP</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="main.php">MyIEP</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="main.php">Home</a></li>
            <li class="active"><a href="about.php">About</a></li>
                        <li><a href="sprint_feedback.php">Leave Feedback</a></li>
            <li><a href="help.php">Help</a></li>
            <li><a href="index.php">Logout</a></li></ul>
             
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Navigation <b class="caret"></b></a>
              <ul class="dropdown-menu">
               
                <li><a href="./manage_student.php">Students</a></li>
                <li class="divider"></li>
                <li><a href="change_ipp_password.php">Reset Password</a></li>
                <li><a href="superuser_add_goals.php">Goals Database</a></li>
                <li><a href="./student_archive.php">Archive</a></li>
                <li><a href="./user_audit.php">Audit</a></li>
                <li><a href="superuser_manage_coding.php">Manage Codes</a></li>
                <li><a href="school_info.php">Manage Schools</a></li>
                <li><a href="superuser_view_logs.php">View Logs</a></li>
              
              </ul>
            </li>
          </ul>
         </div><!--/.nav-collapse -->
        <!--<div class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form" nctype="multipart/form-data" action="jumbotron.php" method="post">
            <div class="form-group">
              <input type="text" placeholder="User Name" class="form-control" value="<?php echo $LOGIN_NAME;?>">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control" name="PASSWORD" value="">
            </div>
            <button type="submit" value="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
    <div class="jumbotron">
      <div class="container">
        <h1>About MyIEP</h1>
        <p>MyIEP (Version <?php echo $IPP_CURRENT_VERSION; ?>) was originally developed as IEP-IPP through the coordinated efforts of many people at Grasslands Public Schools.</p>
        <p>MyIEP is under development by students, faculty, and administrators at <a href="http://chelseaschool.edu">Chelsea School</a> in Hyattsville, MD.</p>
        <p>
          <a class="btn btn-lg btn-primary" href="main.php" role="button">Return to MyIEP &raquo;</a>
        </p>
      </div>
    </div> <!-- /container -->
<div class="container">

<!-- Row 1 -->
<div class="row">
<!-- Left column -->
<div class="col-md-4">
<h1>What's New</h1>
<h3>Bug Fixes</h3>
<ul>
<li>Backslashes accumulated in progress reports</li>
<li>Strengths &amp; Weaknesses narratives truncated</li>
</ul>
<h3>Features</h3>
<ul>
<li>jQuery Date Picker</li>
<li>User Interface/User Experience Improvements</li>
	<ul>
	<li>Main Menu</li>
	<li>Goal View</li>
	<li>Edit Objectives</li>
	</ul>
</ul>
</div>
<!-- Middle column -->
<div class="col-md-4">
<h1>Credits</h1>
<h3>MyIEP</h3>
<p>Rik Goldman, Sabre Goldman, Jason Banks, Alex, Tristan, Micah, Paul, Kenny, Stephen, Jonathan, James, Bryan</p>
<h3>Legacy Code</h3>
<p>M. Nielson</p>
<p><a class="btn btn-default" href="https://github.com/ChelseaSchool/MyIEP" role="button">MyIEP Source Code &raquo;</a></p>
</div>
<!-- Right column -->
<div class="col-md-4">
<h1>Copyright</h1>
<h3>MyIEP</h3>
<p>&copy; 2014 Chelsea School</p>

<address><strong>Chelsea School</strong><br>
2970 Belcrest Center Drive - Suite 300<br>
Hyattsville, Maryland 20782</address>
<h3>Legacy Code</h3>
<p>&copy; 2004 Grasslands Regional Public Schools #6</p>
<p><a class="btn btn-default" href="http://chelseaschool.edu" role="button">Chelsea School &raquo;</a></p>
</div>
</div>
<!-- End Row -->
<!-- New Row -->
<div class="row">
<!--  Left Column -->
<div class="col-md-4">
<h1>License</h1>
<p>This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.

<p>This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.

<p>You should have received a copy of the GNU General Public License along with this program; if not, write to:</p>
 <address><strong>The Free Software Foundation, Inc.</strong><br>
 59 Temple Place, Suite 330, Boston, <abbr title="Massachussetes">MA</abbr>  02111-1307<br>
 USA</address>
 <p><a class="btn btn-default" href="http://www.gnu.org/licenses/gpl-2.0.html" role="button">GPLv2 &raquo;</a></p>
</div>
<!-- Middle Column, Second Row -->
<div class="col-md-4">
<h1>To Do</h1>
<ul>
<li>Refactor Code (create functions)</li>
<li>Integrate authentication into main.php</li>
<li>Complete bootstrap UI across all pages</li>
<li>Standardize variable and function names</li>
<li>Continute to Filter and Escape</li>
<li>Doxygen style commenting</li>
<li>HTML5 Standardize and Validate</li>
<li>HTML5 Form Enhancement &amp; Validate</li>
<li>Admin Documentation</li>
<li>Flexible Branding of PDF Report</li>
<li>Admin Branding Page</li>
</ul>
</div>
<!-- Second Row, Right Column -->
<div class="col-md-4">
<h1>Development Process</h1>
<p>Developed by students in Information Systems Management and Web Design &amp; Development courses at Chelsea School.
<ul>
<li>Developed using Scrum Framework (an Agile methodology)</li>
<li>HTML5 &amp; CSS3</li>
<li>Vagrant &amp; Virtualbox Development Environment</li>
<li>Source Code Management (SCM) with Git and Github</li>
<li>Apache web-server administration</li>
<li>Data processing with PHP</li>
<li>Data storage with MySQL</li>
<li>Active web pages with jQuery and JavaScript</li>
<li>Responsive design (in progress) with Bootstrap</li>
</ul>
</div>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-2.1.0.min.js"></script>
    <script src="./js/bootstrap.min.js"></script> 
<hr>
    <?php print_complete_footer(); ?>
</BODY>
</HTML>
