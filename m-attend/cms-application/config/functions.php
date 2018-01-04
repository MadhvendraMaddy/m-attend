<?php

///////////////////////////
///    detect the plateform
///////////////////////////

function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
//////////////////////////////////////
///
//////////////////////////////////////
function logout()
{

  unset($_SESSION['username']); //unset the ussername key

  # session_destroy(); //unset all the session keys
  //header('Location: logout.php');
}
//////////////////////////////////////
///
//////////////////////////////////////

function page_event($p,$e)//page ,event
{
    $u = "http://localhost:/websites/pixadda/admin/?admin_page=".$p."&eventid=".$e;
    return $u;//url
}
//////////////////////////////////////
///     user function
//////////////////////////////////////
function user($conn,$id)
{
  $q = "SELECT * FROM user";
  $r = mysqli_query($conn,$q);

  $auther = mysqli_fetch_assoc($r);
  while($auther['id'] != $id){$auther = mysqli_fetch_assoc($r);}

  $auther['fullname'] = $auther['first_name'] ." ". $auther['last_name'];
  return $auther;
}
///////////////////////////////////////
///     date
///////////////////////////////////////
function lk_date()
{
  echo date();
}
///////////////////////////////////////
///     function to count  the campagins data
///////////////////////////////////////
function countCamaignsData($conn,$table,$uid){
   $campTotal = 0;
   $campRunning = 0;
   $campCompleted = 0;

   $q = "SELECT * FROM campaigns where uid = ".$uid;
   $r = mysqli_query($conn,$q);
   while($data = mysqli_fetch_array($r)){

     if($data['state'] == 'completed'){$campCompleted++;}
     if($data['state'] == 'running'){$campRunning++;}
     $campTotal++;

   }
   return array($campTotal,$campRunning,$campCompleted);
}
///////////////////////////////////////
///     function to count  the rows
///////////////////////////////////////
function countRows($conn,$result){
  $count = 0;
    while(mysqli_fetch_assoc($r))$count++;
  return $count;
}
///////////////////////////////////////
///     function to load any table
///////////////////////////////////////
function read($conn,$table)
{
	$q = "SELECT * FROM ".$table;
	return mysqli_query($conn,$q);
}
///////////////////////////////////////
///     function to load any table
///////////////////////////////////////
function readByQuery($conn,$q){
	return mysqli_query($conn,$q);
}
///////////////////////////////////////
///     function to load any table
///////////////////////////////////////
function readById($conn,$table,$rowId)
{
	$q = "SELECT * FROM ".$table;
  $r = mysqli_query($conn,$q);
  $data = mysqli_fetch_assoc($r);
  while($rowId != $data['id']){$data = mysqli_fetch_assoc($r);}
	return $data;

}

//////////////////////////////////////
///     store data to database with protection
//////////////////////////////////////
function storeData($conn,$q,$args){

}
//////////////////////////////////////
///     load theme
//////////////////////////////////////
function loadThemeData()
{
  include('content/theme/theme.php');
}
//////////////////////////////////////
///       load header
/////////////////////////////////////
function lk_getHeader(){
  include('widgets/header.php');
}
//////////////////////////////////////
///       load footer
/////////////////////////////////////
function lk_getFooter(){
  include('widgets/footer.php');
}
//////////////////////////////////////
///       load the sidebar
/////////////////////////////////////
function lk_getSideBar(){
  include('widgets/sidebar.php');
}
//////////////////////////////////////
///       load content
/////////////////////////////////////
function lk_getContent(){
  include('widgets/content.php');
}
//////////////////////////////////////
///       load content
/////////////////////////////////////
function lk_getScripts(){
  include('js/js.php');
  echo '</body></html>';
}
//////////////////////////////////////
///       load content
/////////////////////////////////////
function lk_getHead(){

  // load the meta data
  echo '<html class="no-js  blank-false " lang="en-US">';
  echo '<head>';
  echo '<!-- META TAGS -->
          <meta charset="UTF-8" />
          <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
          <!-- LINK TAGS -->';
  include('css/css.php');
  echo '</head><!-- body start -->';
}
//////////////////////////////////////
///       load sliders
/////////////////////////////////////
function lk_getSlider(){
  // load the slider
  include('plugins/slider.php');
}
/////////////////////////////////////
///     vertical space
////////////////////////////////////
function lk_verticalSpace($lines)
{ $count = 1;
  while($count!=$lines){echo '<br>';$count+=1;}
}
?>
