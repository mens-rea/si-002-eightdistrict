<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


<?php 

	foreach($item_list->result_array() as $row){ 
		$delivery_id = $row['delivery_id'];
		$item_qty = $row['delivery_quantity'];
		$item_code = $row['item_id'];		
		$item_price = $row['item_price'];
		
		
		for($x = 0; $x <= $item_qty; $x++){
		?>
			<div class="col-md-4 barcodes" id="bcTarget<?php echo $item_code.$x; ?>"></div>
			<script>
				$(document).ready(function(){	
					for (i = 0; i < <?php echo $item_qty;?>; i++) { 
				    $("#bcTarget"+<?php echo $item_code?>+i).barcode('<?php echo $item_code; ?>', "code39");
				    $("#bcTarget"+<?php echo $item_code?>+i).append('<span style="margin-left: 15px;"><?php echo $supp; ?></span>');
				    $("#bcTarget"+<?php echo $item_code?>+i).append('<span style="float:right;margin-right:15px;">Php <?php echo $item_price; ?></span>');
					}
				});

			</script>

		<?php
		}



	}


?>	




<script>

$(document).ready(function(){	

    window.print();

    window.location.href = "<?php echo site_url("tenant/view_delivery/"); ?>";
    
});
</script>
