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
# start the session
include('config/config.php');
session_start();

$sql  = "UPDATE user SET online_status = '0' WHERE user.id = '$_SESSION[id]' ";
mysqli_query($conn,$sql);

unset($_SESSION['username']); //unset the ussername key

# session_destroy(); //unset all the session keys
header('Location: login.php');
?>
