<?php
require_once 'views/layouts/header.php';
?>
<div class="row">
    <h3 class="text-center">Create Category</h3>
    	<div class="col-md-6 col-md-offset-3">
	 <form class="form-horizontal row-border" action="" method="post">
	 <?php if (isset($_SESSION['error'])): ?>
	    <div class="alert alert-info fade in">
	    	<?php
echo $_SESSION['error'];
unset($_SESSION['error']);
?>
	    </div>
	 <?php endif;?>
	    <div class="form-group">
	        <label class="col-md-2 control-label">Name:</label>
	        <div class="col-md-10">
	            <input type="text" name="name" value="<?php echo $category['name']; ?>" class="form-control">
	        </div>
	    </div>

	    <div class="form-group">
	        <label class="col-md-2 control-label">Status:</label>
	        <div class="col-md-10">
	            <select name="status" class="form-control">
	            	<?php
$displayActive = ($category['status'] == 'active') ? "selected='selected'" : '';
$displayInactive = ($category['status'] == 'inactive') ? "selected='selected'" : '';
?>
	            	<option value="active" <?php echo $displayActive ?>>Active</option>
	            	<option value="inactive" <?php echo $displayInactive ?>>Inactive</option>
	            </select>
	        </div>
	    </div>

	    <div class="form-group">
	        <label class="col-md-2 control-label">Create_by:</label>
	        <div class="col-md-10">
	            <input type="text" name="created_by" value="<?php echo $_SESSION['employee']['fullname'] ?>" class="form-control" readonly="true">
	        </div>
	    </div>

	    <div class="text-center">
	       <button class="btn btn-warning" type="submit" name="update">Update</button>
	       <a class="btn btn-primary" href="?controller=category&action=list" >Cancel</a>
	    </div>

	</form>
    </div>
</div>
<?php
require_once 'views/layouts/footer.php';
?>