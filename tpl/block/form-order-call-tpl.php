<form role="form" method="POST" action="<?php echo $root_dir.$FL;?>call-form-submission.php">
	<div class="form-group">
	<div class="input-group">
			<div class="input-group-addon"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></div>
			<input type="tel" name="contact_phone"  class="form-control" id="input3" placeholder="8(863)625-61-01">
			<span class="input-group-btn">
			<input type="hidden" name="id" value="<?php echo $ids;?>">
			<input type="hidden" name="product_info" value="<?php echo $product_info [0];?>">
			<input type="hidden" name="save" value="call">
			<button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Введите номер телефона"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;
			</button>
			</span>
	</div>
	</div>
	<div class="form-group">
	<?php 
	// check for a successful form post  
	if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
	// check for a form error  
	elseif (isset($_GET['e'])) echo "<div class=\"alert alert-danger\">".$_GET['e']."</div>";?>
	</div>
</form>