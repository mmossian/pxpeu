<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	$data = $_SESSION['DISTINTIVA-MESSAGE'];
?>
<div class="alert alert-<?=$data['cls']?> alert-dismissible fade show inline-message inline-message-<?=$data['cls']?>" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
	<div class="p-2 text-center">
		<h5 class="alert-heading">
			<i class="<?=$data['icon']?> fa-lg"></i>&nbsp;
			<?=$data['message']?>
		</h5>
	</div>
</div>