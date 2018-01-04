


<?php
 //include('../../config/config.php');
$username = 'learnkevin';
$password = '!@#45qwE';
$server = 'localhost';
$dbname = 'learnkevin';
 $conn = mysqli_connect($server,$username,$password,$dbname);

 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 }
 else
 {
	 echo 'Connected successfuly';
 }
 
 $q = $_GET['q'];
 
 $sql = "DELETE FROM pages WHERE pages.id = '$q'";
 
 $r = mysqli_query($conn,$sql);
?>
<script>
 console.log('hello'+<?php echo $q; ?>);
</script>