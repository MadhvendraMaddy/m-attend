<?php

  $auther = user($conn,$_SESSION['id']);
  if($_POST)
  {
      $title = $_POST['title'];
      $Bpost = $_POST['Bpost'];
      $keywords = $_POST['keywords'];
      $description = $_POST['description'];
      $sql = "INSERT INTO blog_post(title,auther,post_content,keywords,description) VALUES('$title','$auther[first]','$Bpost','$keywords','$description')";
      //$sql = "INSERT INTO blog_post(title,post_content) VALUES('$title','$Bpost')";
      $r = mysqli_query($conn,$sql);

  }
  $q = "SELECT * FROM blog_post ";
  $r = mysqli_query($conn,$q);
?>
<br>
<div class="panel panel-success">
  <div class="panel-heading">
    <strong>Your notifications</strong>
  </div>
  <div class="panel-body">
      <div class="list-group">
        <?php
                  while($blogpost = mysqli_fetch_assoc($r)){?>
                    <div  class="list-group-item list-group-item-info">
                        <div class="input-group">
                           <h4 class="list-group-item-heading"><?php echo $blogpost['title'];?>
                             <br><a href="<?php echo '?admin_page=2&postid='.$blogpost['id'];?>" class=""><span style="font-size:12px; color:blue;">edit</span></a> | <a class="btn-delete" onclick="delPage(this.id)" href="" id="<?php echo '?admin_page=2&postid='.$blogpost['id'];?>"><span style="font-size:12px; color:Red;" >delete</span></a>
                           </h4>


                      </div>
                    </div>

              <?php  }?>
      </div>
  </div>
</div>
