<?php
	if(isset($_POST['name']))
	{
		echo 'tell:'.$_POST['name'];

	}
	else
	{
		echo 'Args Error';
	}
?>