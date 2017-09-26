<div class="terms">
	<div class="container">
		<h3>Terms & Conditions</h3>
                  <?php foreach ($ter as $key => $value) { ?>
		<h4><?php echo $value['term'] ?></h4>
		<p><?php echo $value['details'] ?></p>
		<?php } ?>
	</div>
</div>