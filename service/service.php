<?php

function execute() {
	$ressource = ssh2_connect('192.168.0.73');
	// $cmd = '';
	// if (isset($_POST['cmd']))
	// 	$cmd = $_POST['cmd'];

	// $descriptorspec = array(
	//    0 => array("pipe", "r"),   // stdin is a pipe that the child will read from
	//    1 => array("pipe", "w"),   // stdout is a pipe that the child will write to
	//    2 => array("pipe", "w")    // stderr is a pipe that the child will write to
	// );
	// flush();
	// $process = proc_open($cmd, $descriptorspec, $pipes, realpath('./'), array());
	// $output = "";
	// if (is_resource($process)) {
	//     while ($s = fgets($pipes[1])) {
	//         $output .= $s;
	//         flush();
	//     }
	// }
	
	// echo json_encode($output);
	// die;
}
