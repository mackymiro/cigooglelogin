  <div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Welcome! <?php echo $userData['first_name'];?> <?php echo $userData['last_name']; ?></h1>
				<img alt="" src="<?php echo $userData['picture_url']?>" />
			</div>
			<br>
			<br>
			<div class="col-md-12">
				<table class="table-striped" width="960">
					<tr>
						<th>Item Name:</th>
						<th>Item Price:</th>
						<th>Location:</th>
						<th>Options:</th>
					</tr>
					<?php foreach($getItemInfo as $infos): ?>
					<tr class="itemInfo-<?php echo $infos->id; ?>">
						<td><?php echo $infos->item_name;?></td>
						<td><?php echo $infos->item_price;?></td>
						<td><?php echo $infos->location;?></td>
						<td><a href="<?php echo base_url().'create-item/edit/id/'.$infos->id; ?>">Edit</a> | 
						<a href="#" onClick="return goDelete('<?php echo $infos->id;?>')">Delete</a></td>
					</tr>
					<?php endforeach; ?>
				</table>
				
			</div>
		</div>
		
</div> <!-- /container -->

<script type="text/javascript">
	function goDelete(id){
		var agree = confirm('Are you sure you want to delete this?');
		if(agree){
			$(".itemInfo-"+id).fadeOut('slow');
			$.post("<?php echo base_url().'delete/id/'?>", {id:id}, function(data){
			  
			});
			
		}else{
			return false;
		}
			
	}	

</script>