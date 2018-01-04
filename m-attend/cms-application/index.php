<?php 
/*
    <one line to give the program's name and a brief idea of what it does.>
    Copyright (C) 2017  siddhartha singh

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.

    contact us : sidd5sci@gmail.com

  If the program does terminal interaction, make it output a short
notice like this when it starts in an interactive mode:

    M-attend  Copyright (C) 2017  siddhartha singh
    This program comes with ABSOLUTELY NO WARRANTY; for details type `show w'.
    This is free software, and you are welcome to redistribute it
    under certain conditions; type `show c' for details.

The hypothetical commands `show w' and `show c' should show the appropriate
parts of the General Public License.  Of course, your program's commands
might be different; for a GUI interface, you would use an "about box".

  You should also get your employer (if you work as a programmer) or school,
if any, to sign a "copyright disclaimer" for the program, if necessary.
For more information on this, and how to apply and follow the GNU GPL, see
<http://www.gnu.org/licenses/>.

  The GNU General Public License does not permit incorporating your program
into proprietary programs.  If your program is a subroutine library, you
may consider it more useful to permit linking proprietary applications with
the library.  If this is what you want to do, use the GNU Lesser General
Public License instead of this License.  But first, please read
<http://www.gnu.org/philosophy/why-not-lgpl.html>.


*/
?>







<?php
 include('config/config.php');
# start the sessions
session_start();
if(!isset($_SESSION['username']))// error ->1
{
  header('Location:login.php');
}
else
  {//echo $_SESSION['username'],$_SESSION['id'];

  $sql  = "UPDATE user SET online_status = '1' WHERE user.id = '$_SESSION[id]' ";
  mysqli_query($conn,$sql);

  $data = readById($conn,'user',$_SESSION['id']);
}

// pass 'admin'
?>


<html>
<head>
    <title> Dashboard</title>
    <?php include('assets/css/css.php'); ?>  <!--default stylesheet -->
    
</head>
<body class="lk-zero">
<?php //include('widgets/header.php'); ?>

<div class="row">
  <!--- left navigation -->
  <div class="col-md-2 lk-sidebar-left">
   <div class="row">
     <div class="col-md-12 lk-zero">
    <div class="user-profile ">
      <a href="#" ><img src="images/<?php echo $data['photo'];?>" class="img-responsive img-circle <?php //thumbnail ?>user-profile-img"/></a>
          <p class="user-profile-name">&nbsp;&nbsp;<?php $u = user($conn,$data['id']);echo $u['fullname'];?></p>
    </div>
    <?php include('widgets/left-navbar.php');?>

      <?php if($admin_pageid == 8){logout();}?>
    </div>
  </div>
  </div>
  <div class="col-md-10 ">
    <?php include('widgets/header.php'); ?>

    <div class="row">
      <div class="col-md-8 lk-body">
         <!--- main container -->


          <?php
            switch($admin_pageid)
            {
              case 1: include('pages/dashboard.php');
                      break;
              case 2: include('pages/Notification.php');
                      break;
              case 3: include('pages/campagins.php');
                      break;
              case 4: include('pages/exchange.php');
                      break;
              case 5: include('pages/affiliate.php');
                      break;
              case 6: include('pages/store.php');
                      break;
              case 7: include('pages/comunity.php');
                      break;
              case 8: include('pages/settings.php');
                      break;

            }

          ?>

      </div>
      <div class="col-md-4 lk-notifications">

          <h2>Notifications</h2>

          <a href="?#" class="list-group-item">
            <div class="list-group-item-heading">
                Update your profile
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                    60%
                  </div>
                </div>
            </div>
          </a>

          <a href="?#" class="list-group-item">
            <div class="list-group-item-heading">
              Upgrade to primeum now
            </div>
          </a>
      </div>
    </div>

  </div>
</div>
<!-- footer-->
<div class="row lk-footer">
  <div class="container">
      <div class="col-md-4">
        <h2>About YTRider</h2><br>

        <p>We help people through our plateform to increase their Youtube views,Like and Subscribers.</p>
      </div>
      <div class="col-md-4">

      </div>
      <div class="col-md-4">
      </div>
  </div>
</div>




</body>
</html>
<?php include('assets/js/js.php'); ?><!--default js -->