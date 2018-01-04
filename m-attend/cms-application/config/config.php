<?php


$siteTitle = 'piXAdda';
//////////////////////////////
///     database connections
//////////////////////////////

$username = 'root';
$password = '';
$server = 'localhost';
$dbname = 'ytrider';

$conn = mysqli_connect($server,$username,$password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else
{	//echo "Connected successfully";
}

//////////////////////////////
///     functions
//////////////////////////////

include('config/functions.php');

//////////////////////////////
///     url query controls
//////////////////////////////

if(isset($_GET['admin_page']))
{

  //echo $_GET['admin_page']." | ".$_GET['event_id'];
  $admin_pageid = $_GET['admin_page'];

}
else
{
  $admin_pageid = 1; //default url is set to Dashboard
}

if(isset($_GET['eventid']))
  { $event_id = $_GET['eventid'];

  }
else
   $event_id = 1;

if(isset($_GET['subevent']))
    {
      $subevent = $_GET['subevent'];
    }
else {
      $subevent = 'Home';
    }
//$_GET['tab']
//if(isset($_GET['tab'])$tab = $_GET['tab'];
//echo $tab;
////////////////////////////////
///     Query controls
////////////////////////////////




//////////////////////////////
///
//////////////////////////////

?>
