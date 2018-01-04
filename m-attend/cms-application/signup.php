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



<!-- connections-->
<?php
include('config/config.php');

if($_POST)
{

$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$user_type = $_POST['user-type'];
$pass = SHA1($_POST['password']);

$q = "INSERT INTO user(first_name,last_name,email,phone,user_type,pass) VALUES('$first','$last','$email','$phone','$user_type','$pass')";
$r = mysqli_query($conn,$q);


//header('Location: index.php');

}


 ?>


<html>
<head>
    <title> Sign Up </title>
    <?php include('assets/css/css.php'); ?>  <!--default stylesheet -->
    
</head>
<body class="sign-up">
<br/><br/><br/><br/><br/><br/>
<?php if($_POST){ echo '<div class="row">
                          <div class="col-md-6 col-md-offset-3">

                                 <p class="bg-primary">Your account has be successfully created <br> Please Login to your account
                                </p>
                          </div>
                        </div><br>';}?>
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <div class="panel panel-info">
      <div class="panel-heading">
      <strong> Sign Up </strong>
      </div>
      <div class="panel-body">

            <form method="post" action="signup.php" role="">
              <table class="table table-responsive">
                <tr>

                  <td><div class="form-group">
                    <label for="email">First name</label>
                    <input type="text" class="form-control" id="email" name="first" placeholder="First name">
                  </div></td>

                  <td><div class="form-group">
                    <label for="email">Last name</label>
                    <input type="text" class="form-control" id="email" name="last" placeholder="Last name">
                  </div></td>
                </tr>
                <tr>

                  <td><div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                  </div></td>

                  <td><div class="form-group">
                    <label for="user">User type</label>
                    <select class="form-control" name="user-type" id="user-type">
                      <option value="">Select ...</option>
                      <option value="Freelancer">Freelancer</option>
                      <option value="Vender">Equipments provider</option>
                      <option value="emp">Employee</option>
                    </select>

                  </div></td>
                </tr>
                <tr>

                  <td><div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="number" class="form-control" id="email" name="phone" placeholder="+91">
                  </div></td>
                  <td><div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                  </div></td>
                </tr>
              </table>






              <!--
              <div class="checkbox">
                <label>
                  <input type="checkbox">male
                </label>
              </div>
              -->
              <button type="submit" class="btn btn-default">Submit</button>
              <button type="submit" class="btn btn-primary">Forgate</button>
            </form>
            Already have an account <a href="http://localhost/websites/newpix/user_panel/login.php"><span style="color:#44cc22">Login<span></a>
      </div>
    </div>
  </div>
</div>

</body>
</html>
<?php include('assets/js/js.php'); ?><!--default js -->
