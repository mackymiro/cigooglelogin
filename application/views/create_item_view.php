  <div class="container">
		<div class="row">
			<div class="col-md-12">
				
				<h1>Welcome! <?php echo $first_name;?> <?php echo $last_name; ?></h1>
				<img alt="" src="<?php echo $picture_url;?>" />
			</div>
			<br>
			<br>
			<div class="col-md-12">
				<form action="<?php echo base_url().'create-item/add.html'?>" method="post">
					<?php if($this->session->flashdata('success')): ?>
						<div class="alert alert-success">
							<p>Successfully Added An Item.</p>
						</div>
					<?php endif;?>
					<?php echo validation_errors('<div class="error alert alert-danger">','</div>');?>
					<label>Item Name:</label><br>
					<input type="text" name="itemName" value="" class="form-control" />
					<label>Item Price:</label><br>
					<input type="text" name="itemPrice" value="" class="form-control" />
					<label>Location:</label><br>
					<input type="text" name="location" value="" class="form-control" />
					<br>
					
					<input type="submit" value="Add Item" class="btn btn-success" />
				</form>
			</div>
		</div>
		
    </div> <!-- /container -->