<?php

namespace BlueShell;

use Sophwork\app\app\SophworkApp;
use Sophwork\app\view\AppView;

class Shell
{
	protected $con;
	protected $user;
	protected $password;

	public function shell(SophworkApp $app) {
		$view = new AppView();
		echo'<pre>';
		var_dump($view);
		echo'</pre>';
	}

	public function exec() {
		if (ssh2_auth_password($this->connection, 'root', 'root')) {
			$stream = ssh2_exec($connection, "ls -al");
			$errorStream = ssh2_fetch_stream($stream, SSH2_STREAM_STDERR);
		
			// Enable blocking for both streams
			// stream_set_blocking($errorStream, true);
			stream_set_blocking($stream, true);
		
			// Whichever of the two below commands is listed first will receive its appropriate output.  The second command receives nothing
			echo'<pre>';
			var_dump(stream_get_contents($stream));
			echo'</pre>';
			// echo "Error: " . stream_get_contents($errorStream);
		
			// Close the streams
			fclose($stream);
		}
	}
}