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
        You can add a new template to your site from here and can choose the pre-designed pages add into your site.
      </div>

    </div>
</div>
<br><br>
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-info">
      <div class="panel-heading">
      <strong>Add new template</strong>
      </div>
      <div class="panel-body">
            
			
				<!--  add template form -->
				<div class="panel panel-success" id="fuck">
					
					<div class="panel-body">

						  <form class="form-inline" method="post" action="<?php echo '?admin_page=3&eventid=1';?>">
							<div class="form-group">
							  <div class="input-group">
								<div class="input-group-addon">Search template</div>
								<input type="text" class="form-control" name="ptitle" id="exampleInputAmount" placeholder="Portfolio">
							  </div>
							</div>
							<button type="submit" class="btn btn-primary">Search</button>
						  </form>
						  <br>
						  <label for="post_title" style="display:<?php if($page_addError == 0)echo 'none';else echo 'block'; ?>;color:#880000;">Title must have more then 4 letters</label>

					</div>
				</div>
      </div>
    </div>
  </div>
</div>