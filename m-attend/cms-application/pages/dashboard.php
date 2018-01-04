<?php


$uid = $_SESSION['id'];
$camp = countCamaignsData($conn,'campaigns',$uid);

//echo "Total ".$r[0]."Running ".$r[1]."copm ".$r[2];
?>
<!-- learnkevin version info-->
<div class="row">
    <div class="bg-info">
      <div class="container" id="pad">
      LearnKevin version 17.2.1 | you are using the latest version
      </div>
    </div>
</div>
</br>
<!-- News-->
<div class="row">
    <div class="bg-warning" >
      <div class="container text-primary" id="pad">
        LearnKevin is going launch the drag and drop user interface for editing the pages
      </div>

    </div>
</div>

<div class="row">
  <div class="col-sm-3 ">
    <div class="lk-box">
      <h4>Campagins</h4>
      <h1 class="note"><?php echo $camp[0];?></h1>
    </div>
  </div>

  <div class="col-sm-3">
    <div class="lk-box">
        <h4>Coins</h4>
        <h1 class="note">214</h1>
    </div>
  </div>

  <div class="col-sm-3">
      <div class="lk-box">

          <h4>Campaigns done</h4>
          <h1 class="note"><?php echo $camp[2];?></h1>
      </div>
  </div>

  <div class="col-sm-3">
      <div class="lk-box">
        <h4>Running</h4>
        <h1 class="note"><?php echo $camp[1];?></h1>
      </div>
  </div>
</div>
