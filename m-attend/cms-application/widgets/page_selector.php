
<?php

//$add = false;// control when a new page should me added to the website

if(isset($_POST) != '')
{
  $label =  $_POST['ptitle'];

  if(strlen($label) > 4)
  {
    $sql = "INSERT INTO pages(lable,title) VALUES ('$label','$label')";
    $r = mysqli_query($conn,$sql);
 }
 else
 {
  $page_addError =1;
 }

}

//unset($_POST['ptitle']);

?>


<!--  add page form -->
<div class="panel panel-success" id="fuck">
    <div class="panel-heading">
      <strong>Add new page</strong>
    </div>
    <div class="panel-body">

          <form class="form-inline" method="post" action="<?php echo '?admin_page=3&eventid=1';?>">
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon">Page title</div>
                <input type="text" class="form-control" name="ptitle" id="exampleInputAmount" placeholder="Portfolio">
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
          </form>
          <br>
          <label for="post_title" style="display:<?php if($page_addError == 0)echo 'none';else echo 'block'; ?>;color:#880000;">Title must have more then 4 letters</label>

    </div>
</div>
<!-- page list display -->
<div class="list-group">
  <?php
            $q = "SELECT * FROM pages ";
            $r = mysqli_query($conn,$q);

            while($webpage = mysqli_fetch_assoc($r)){?>


              <div  class="list-group-item list-group-item-info page-slt" id="page_<?php echo $webpage['id'];?>">

                  <h4 class="list-group-item-heading"><?php echo $webpage['lable'];?><br>
                  <a href="<?php echo '?admin_page=3&eventid=2&subevent='.$webpage['lable'];?>" class=""><span style="font-size:12px; color:blue;">edit</span></a> | <a class="btn-delete"   href="#" id="<?php echo $webpage['id'];?>"><span style="font-size:12px; color:Red;">delete</span></a> </h4>

              </div>

        <?php  }?>
</div>
<!--  add page form -->
  <div class="panel panel-success">
    <div class="panel-heading">
      <strong>Add new page</strong>
    </div>
    <div class="panel-body">

          <form class="form-inline" method="post" action="<?php echo '?admin_page=3&eventid=1';?>">
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon">Page title</div>
                <input type="text" class="form-control" name="ptitle" id="exampleInputAmount" placeholder="Portfolio">
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
          </form>
          <br>
          <label for="post_title" style="display:<?php if($page_addError == 0)echo 'none';else echo 'block'; ?>;color:#880000;">Title must have more then 4 letters</label>

    </div>
  </div>
