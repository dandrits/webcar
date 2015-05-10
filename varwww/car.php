<?php
if (isset($_GET['q']) && ($_GET['q']!=''))
{
	$command="sudo car -".$_GET['q']." 2>&1";
	echo shell_exec($command);
}
header('Location: car.html');
?>
