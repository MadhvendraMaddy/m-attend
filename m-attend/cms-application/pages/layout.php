
<?php 

$q = "SELECT * FROM layout";
$r = mysqli_query($conn,$q);

while($element = mysqli_fetch_assoc($r)){
?>

<div class="row" role="footer">
	
	  <div class="alert alert-warning alert-dismissible " role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong class="center"><?php echo $element['label'];?></strong>
                <i class="fa fa-sort-desc push-down"  id="<?php echo $element['id'];?>" aria-hidden="true"></i>
                <i class="fa fa-sort-asc push-up" id="<?php echo $element['id'];?>" aria-hidden="true"></i>
		
	  </div>
	
</div>
<br>
<div class="row" id="flow_<?php echo $element['id'];?>">
	<div class="panel panel-info" >
		<div class="panel-heading">
		<strong> Learnkevin editor </strong>
		</div>
		<div class="panel-body">
			<form>
			<div class="form-group">
				<label>Margin</label>
				<input type="text" placeholder="0px"/>
			</div>
			<div class="form-group">	
				<label>Border</label>
				<input type="text" placeholder="0px"/>
			</div>
			<div class="form-group">	
				<label>Border radius</label>
				<input type="text" placeholder="0px"/>
			</div>
			<div class="form-group">	
				<label>Padding</label>
				<input type="text" placeholder="0px"/>
			</div>
			<div class="form-group">	
				<label>Background color</label>
				<input type="text" placeholder="color"/>
			</div>
			<div class="form-group">	
				<label>Background image</label>
				<input type="text" placeholder="URL"/>
			</div>
			<div class="form-group">	
				<label>Background Type</label>
				<input type="text" placeholder="Enable/disable"/>
			</div>
			<div class="form-group">	
				<label>Font size</label>
				<input type="text" placeholder="0px"/>
			</div>
			<div class="form-group">	
				<label>Font family</label>
				<input type="text" placeholder="Areal"/>
			</div>
			<div class="form-group">	
				<label>Font weight</label>
				<input type="text" placeholder="0"/>
			</div>
			<div class="form-group">	
				<label>Text color </label>
				<input type="text" placeholder="color"/>
			</div>
			<div class="form-group">	
				<label>Opacity</label>
				<input type="text" placeholder="1"/>
			</div>
			<div class="form-group">	
				<label>Custom css class</label>
				<input type="text" placeholder="class"/>
			</div>
				
			</form>
		</div>
	</div>
</div>

<?php }?>