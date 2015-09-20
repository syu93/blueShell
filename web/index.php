<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/../vendor/autoloader.php';

use Sophwork\core\Sophwork;
use Sophwork\app\app\SophworkApp;

$autoloader->config = '/var/www/blueShell/src';

$app = new SophworkApp([
	'baseUrl' => '/blueShell/web',
]);

$app->get('/', ['BlueShell\Shel' => 'show']);

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$baseURL = '/blueShell/web';
$baseURL = addcslashes($baseURL, "/");

// require __DIR__."/../service/service.php";

// function dispatcher ($routes, $baseURL) {
// 	$route = resolve($baseURL);
// 	if (array_key_exists($route, $routes)){
// 		$routes[$route]();
// 	}
// }

// function resolve ($baseURL) {
// 	preg_match("/".$baseURL."(.*)/", $_SERVER['REQUEST_URI'], $matches);
// 	return isset($matches[1])? $matches[1] : false;
// }

// $routes = [
// 	'/shellService' => "shell",
// ];
// ob_start();
// dispatcher($routes, $baseURL);
// ob_clean();
?>
<<!-- html> -->
<<!-- head> -->
<!-- 	<tit -->le>blueShell</title>
/*	<sty*/le type="text/css">
<!-- 	* { -->
<!-- 		 -->margin:	0;
<!-- 		 -->padding: 0;
<!-- 	} -->
<!-- 	html -->, body {
<!-- 		 -->width: 100%;
<!-- 		 -->height: 100%;
<!-- 	} -->
<!-- 	.she -->ll {
<!-- 		 -->cursor: text;
<!-- 		 -->background: #191919;
<!-- 		 -->color: #ffffff;
<!-- 		 -->resize: none;
<!-- 		 -->width: 100%;
<!-- 		 -->height: 100%;
<!-- 		 -->outline: none;
<!-- 		 -->padding: 5px;
<!-- 		 -->box-sizing: border-box;
<!-- 	} -->
<!-- 	.she -->llLine {
<!-- 		 -->display: inline;
<!-- 		 -->outline: none;
<!-- 	} -->
<!-- 	.hea -->dLine {
<!-- 		 -->color: #C9C9C9;
<!-- 		 -->margin-right: 10px;
<!-- 		 -->white-space: nowrap;
<!-- 	} -->
<!-- 	.she -->llCmd {
<!-- 		 -->display: inline;
<!-- 		 -->outline: none;
<!-- 		 -->min-width: 1%;
<!-- 	} -->
<!-- 	.out -->put {

<!-- 	} -->
<!-- 	</st -->yle>
<<!-- /head> -->
<<!-- body> -->
<<!-- div cla -->ss="shell"></div>
<<!-- script  -->src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
// <script type="text/javascript">
// (function(){
	// var shell = document.querySelector(".shell");
	// var lineNb = 1;

	// function addLine (shell){
		// var line, headLine, cmd;

		// headLine = document.createElement('span');
			// headLine.classList.add('headLine');
			// headLine.setAttribute('contentEditable',"false");
			FIXME : Id user cd chage the pwd
			// headLine.innerHTML = "<?= trim(shell_exec('echo $(whoami)@$(hostname):$PWD')) ?>";

		// line = document.createElement('div');
			// line.id = lineNb;
			// line.classList.add('shellLine');
			// line.appendChild(headLine);

		// cmd = document.createElement('div');
			// cmd.setAttribute('contentEditable',"true");
			// cmd.classList.add('shellCmd');
			// line.appendChild(cmd);
		// shell.appendChild(line);
		// 
		// cmd.focus();
		// cmd.addEventListener("keypress", function (e){
			// if (e.keyCode == 13) {
				// e.preventDefault();
				// AJAX({"cmd":this.innerHTML},function(data){
					// var output;
						// output = document.createElement('pre');
						// output.classList.add('output');
						// output.innerHTML = data;
					// cmd.appendChild(output);
					// addLine(shell);
				// },window.location.href+"shellService", 'POST', 'json');
			// }
		// });
		// lineNb++;
	// }

	// function AJAX (data, callback, URL, method, type){
	    // callback = (typeof callback === "undefined") ? function(){} : callback;
	    // URL = (typeof URL === "undefined") ? window.location.href : URL;
	    // type = (typeof type === "undefined") ? "json" : type;
	    // method = (typeof method === "undefined") ? "POST" : method;
	    // $.ajax({
	        // type: method,
	        // url: URL,
	        // data: data,
	        // success: function(data){callback(data)}, 
	        // dataType: type
	    // });
	// }
	// addLine(shell);
// })(document);
// </script>
<<!-- /body> -->
<<!-- /html> -->