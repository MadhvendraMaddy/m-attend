<?php
$uid = $_SESSION['id'];
$camp = countCamaignsData($conn,'campaigns',$uid);
$q = "SELECT * FROM campaigns where uid = ".$uid;
$res = readByQuery($conn,$q);

?>

<?php lk_verticalSpace(3);?>
<div class="row">

    <div class="col-md-12">

      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Published</a></li>
        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">New campagins</a></li>
        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Running</a></li>
        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Completed</a></li>

      </ul>

    </div>
</div>
<br>
<div>
<!-- Tab panes -->
<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
      <!--published -->
      <div role="tabpanel" class="tab-pane" id="published">
          <div class="row">
            <div class="col-md-12">
              <div class="list-group">
                  <?php while($data = mysqli_fetch_assoc($res)){?>
                    <a href="#" class="list-group-item"><h6 href="#" class="lk-list-item-heading"><?php echo $data['url'];?></h6></a>
                  <?php }?>

              </div>
            </div>
          </div>
       </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="profile">

      <!--new camp--->
      <div role="tabpanel" class="tab-pane active" id="campagins">
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-info">
                <div class="panel-heading">
                    <h2>Create new campagin</h2>
                </div>
                <div class="panel-body">

                <form method="post" action="">

                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">URL</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="http://youtube.com/watch?=fjkdhfjks">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Option</label>
                        <div class="col-sm-10">
                          <select value="" name="type" id="" style="width:100%;">
                              <option vlaue="0">Select item ....</option>
                              <option value="views">Views</option>
                              <option value="likes">Likes</option>
                              <option value="subs">Subscribers</option>
                              <option value="comments">Comments (Under maintanence)</option>

                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Quantity</label>
                        <div class="col-sm-10">
                          <input type="number" class="form-control" id="inputPassword3" placeholder="56">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-2">Advance</div>
                        <div class="col-sm-10">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" disabled="true"> (Primerem feature)
                            </label>
                          </div>
                        </div>
                      </div>
                      <fieldset class="form-group" id="advance_pan">
                        <div class="row">
                          <legend class="col-form-legend col-sm-2">Advance</legend>
                          <div class="col-sm-10">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                Option one is this and that&mdash;be sure to include why it's great
                              </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                Option two can be something else and selecting it will deselect option one
                              </label>
                            </div>
                            <div class="form-check disabled">
                              <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                                Option three is disabled
                              </label>
                            </div>
                            <div class="form-group" id="advance">
                               Start date <input id="datepicker1" />
                            </div>
                          </div>
                        </div>
                      </fieldset>
                      <div class="form-group row">
                        <div class="col-sm-2">Total Coins</div>
                        <div class="col-sm-10">
                          <div class="form-check">
                            <label class="form-check-label">
                              2050
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-2">Cost</div>
                        <div class="col-sm-10">
                          <div class="form-check">
                            <label class="form-check-label">
                              -500 coins
                            </label>
                          </div>
                        </div>
                      </div>




                  <div class="form-group row">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary">Add to queue</button>
                    </div>
                  </div>
                </form>
              </div> <!-- panel body -->
              </div>
            </div>
          </div>
        </div> <!-- end of camp-->


    </div>
    <div role="tabpanel" class="tab-pane" id="messages">
          <!-- running-->
          <div role="tabpanel" class="tab-pane active" id="draft">
            <div class="list-group">
              <?php while($data = mysqli_fetch_assoc($res)){
                echo $data['state'];
                if($data['state'] == 'running'){
                echo '<a href="#" class="list-group-item"><h5 class="list-group-item-info">'.$data['url'].'</h6></a>';
                }
               }?>
            </div>
          </div><!--  end of running-->
    </div>
    <div role="tabpanel" class="tab-pane" id="settings">      <!-- compleated -->
          <div role="tabpanel" class="tab-pane active" id="rejected">
            <div class="list-group">
              <?php while($data = mysqli_fetch_assoc($res)){
                if($data['state'] == 'completed'){
                echo '<a href="#" class="list-group-item"><h5 class="list-group-item-info">'.$data['url'].'</h6></a>';
                }
               }?>
            </div>
          </div>
          <!--  end of the completed-->

    </div>

  </div>

</div>
