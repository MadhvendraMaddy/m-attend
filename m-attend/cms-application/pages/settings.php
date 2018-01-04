


<?php 

$r = read($conn,'settings');
$setting = mysqli_fetch_assoc($r);

$r1 = read($conn,'user');
$user = mysqli_fetch_assoc($r1);
?>
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-info">
      <div class="panel-heading">
      <strong>  Login Panel</strong>
      </div>
	  <div class="panel-body">
			<form>
				<div class="form-group">
					<label>Site title</label>
					<input type="text" class="form-control" name="title" value="<?php echo $setting['site_title'];?>" placeholder="Your site name" />
				</div>
				<div class="form-group">
					<label>Site slogan</label>
					<input type="text"  class="form-control" name="title" value="<?php echo $setting['site_slogan'];?>" placeholder="Your site slogan" />
				</div>
				<div class="form-group">
					<label>Site description</label>
					<input type="text" class="form-control" name="title" value="<?php echo $setting['site_description'];?>" placeholder="Your site description" />
				</div>		
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" name="title" value="<?php $u = user($conn);echo $u['fullname'];?>" placeholder="Username" />
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="title" value="<?php echo $user['email'];?>" placeholder="Email" />
				</div>
				<div class="form-group">
					<label>Change password</label>
					<input type="password" class="form-control" name="title" value="" placeholder="Enter new password" />
				</div>
				<button type="submit" class="btn btn-primary pull-right">Save</button>
				<button type="submit" class="btn btn-default pull-right">Cancel</button>
			</form>
		</div>
	</div>
  </div>
</div>
