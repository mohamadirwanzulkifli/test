<?php
ini_set('max_execution_time', 0);
for($a=1;$a<255;$a++){
	echo '<p>192.168.0.'.$a.'<p>';
	echo file_get_contents('http://192.168.0.'.$a).'<hr>';
}
?>
