<!-- <iframe style="width: 100%; height: 100%;" src="https://buffer.com"></iframe> -->
<?php
require __DIR__.'/buffer-master/buffer-connect.php';
?>
<div class="dashboard">
<?php if (!$buffer->ok) {
		echo '<a href="' . $buffer->get_login_url() . '">Connect to Buffer!</a>';
	} else {
		$profiles = $buffer->go('/profiles');
			
		if (is_array($profiles)) {
			foreach ($profiles as $profile) {
				$buffer->go('/updates/create', array('text' => 'My first status update from bufferapp-php worked!', 'profile_ids[]' => $profile->id));
			}
		}
	} ?>
</div>
