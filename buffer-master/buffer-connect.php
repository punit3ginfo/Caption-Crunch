<?
	session_start();
	require('buffer.php');
	
	$client_id = '587754240ad90d54502a8e09';
	$client_secret = 'ab798c2379a4a55a04d27c09ceae6f58';
	$callback_url = 'https://share-tag.herokuapp.com';
	
	$buffer = new BufferApp($client_id, $client_secret, $callback_url);
		
	if (!$buffer->ok) {
		echo '<a href="' . $buffer->get_login_url() . '">Connect to Buffer!</a>';
	} else {
		$profiles = $buffer->go('/profiles');
			
		if (is_array($profiles)) {
			foreach ($profiles as $profile) {
				$buffer->go('/updates/create', array('text' => 'My first status update from bufferapp-php worked!', 'profile_ids[]' => $profile->id));
			}
		}
	}
?>
