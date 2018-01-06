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
session_start();

include('config/config.php');
if($_POST)
{
$q = "SELECT * FROM user WHERE email ='$_POST[email]' AND pass =SHA1('$_POST[password]')";
$r = mysqli_query($conn,$q);


  if(mysqli_num_rows($r) == 1)
  { $data = mysqli_fetch_assoc($r);
    $_SESSION['username'] = $_POST['email'];
    $_SESSION['id'] = $data['id'];
    $_SESSION['userType'] = $data['user_type'];
    $_SESSION['startTime'] = date();
    //header('Location:index.php');


  }
}
 ?>
<script>
function redirect(){
    var session =  "<?php echo $_SESSION['username'];?>";
    if(session != "")
      {
        window.open("index.php", "_self"); // will
      }
  }redirect();
</script>

<html>
<head>
    <title> Admin Panel </title>
    <?php include('assets/css/css.php'); ?>  <!--default stylesheet -->
</head>
<body class="login">
<br/><br/><br/><br/><br/><br/>
<div class="row">
  <div class="col-md-4 col-md-offset-4">
    <div class="panel panel-info">
      <div class="panel-heading">
        <strong>  Login Panel</strong>
      </div>
      <div class="panel-body">
            <form method="post" action="login.php" role="">
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
              </div>
              <!--
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Check me out
                </label>
              </div>
              -->
              <button type="submit" class="btn btn-default">Submit</button>
              <button type="submit" class="btn btn-primary">Forgate</button>
            </form>
            Register a new account <a href="http://localhost/websites/newpix/user_panel/signup.php"><span style="color:#44cc22">Sign up<span></a>
      </div>
    </div>
  </div>
</div>
hi
</body>
</html>
<?php include('assets/js/js.php'); ?><!--default js -->
