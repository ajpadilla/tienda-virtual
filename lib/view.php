<?php 
	function error_msg($error,$msg)
	{
		if(isset($error) && $error)
		{
			return $msg;
		}
		return "";
	}
?>