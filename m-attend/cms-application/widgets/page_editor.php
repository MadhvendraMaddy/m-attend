
<?php

if($_POST && $event_id == 2)//page editor is selected
{
    $title = $_POST['title'];
    $Bpost = $_POST['Bpost'];
    $keywords = $_POST['keywords'];
    $description = $_POST['description'];
    //$sql = "UPDATE pages SET content='$Bpost' WHERE label ='$subevent'";
    //$sql = "INSERT INTO blog_post(title,post_content) VALUES('$title','$Bpost')";
    $sql = "UPDATE pages SET content = '$Bpost' WHERE pages.lable = '$subevent'";
    $r = mysqli_query($conn,$sql);

}
$q = "SELECT * FROM pages WHERE pages.lable = '$subevent'";
$r = mysqli_query($conn,$q);
$data = mysqli_fetch_assoc($r);
?>

<div class="panel panel-success">
  <div class="panel-heading">
    <strong>Edit the content of <?php echo ' '.$subevent;?> page</strong>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php  echo '?admin_page=3&eventid=2&subevent='.$subevent;?>">
      <div class="form-group">
        <label for="post_title">Page title</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="title" value="<?php echo $data['title'];?>" placeholder="Page title">
      </div>
      <div class="form-group">
        <label for="post_content">Page content</label>
        <textarea class="form-control" rows="10" id="post"name="Bpost" placeholder="Write the content of page"><?php echo $data['content'];?></textarea>
      </div>
      <div class="form-group">
        <label for="keywords">Keywords</label>
        <input type="text" class="form-control" id="" name="keywords" value="<?php echo $data['keywords'];?>" placeholder="each keyword seprated by coma">
      </div>
      <div class="form-group">
        <label for="Description">Description</label>
        <input type="text" class="form-control" id="" name="description" value="<?php echo $data['description'];?>" placeholder="Sort desciption of the post">
      </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>
</div>
