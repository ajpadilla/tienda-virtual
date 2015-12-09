<?php 
	function error_msg($error,$msg)
	{
		if(isset($error) && $error)
		{
			return $msg;
		}
		return "";
	}

	function logged_in()
	{
		if (isset($_SESSION["user"])) 
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function current_user($field)
	{
		if($_SESSION["user"])
		{
			return $_SESSION["user"][$field];	
		}
		else
		{
			return "";
		}
	}
?>