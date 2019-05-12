  <div class="container">
		<div class="row">
			<div class="col-md-12">
				
				<h1>Welcome! <?php echo $first_name;?> <?php echo $last_name; ?></h1>
				<img alt="" src="<?php echo $picture_url;?>" />
			</div>
			<br>
			<br>
			<div class="col-md-12">
				<form action="<?php echo base_url().'create-item/updateItem.html'?>" method="post">
					<?php if($this->session->flashdata('successEdit')): ?>
						<div class="alert alert-success">
							<p>You Have Successfully Edited A Post.</p>
						</div>
					<?php endif; ?>
					<?php echo validation_errors('<div class="error alert alert-danger">','</div>');?>
					<label>Item Name:</label><br>
					<input type="text" name="itemName" value="<?php echo $getItemInfoEdit->item_name;?>" class="form-control" />
					<label>Item Price:</label><br>
					<input type="text" name="itemPrice" value="<?php echo $getItemInfoEdit->item_price;?>" class="form-control" />
					<label>Location:</label><br>
					<input type="text" name="location" value="<?php echo $getItemInfoEdit->location;?>" class="form-control" />
					<br>
					<input type="hidden" name="itemId" value="<?php echo $getItemInfoEdit->id; ?>" />
					<input type="submit" value="Update Item" class="btn btn-success" />
				</form>
			</div>
		</div>
		
    </div> <!-- /container -->