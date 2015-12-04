<?php  
	function redirect_to($address)
	{
		header("Location:".APP_ROOT.$address);
	}

	function save_msg_warnings($msg)
	{
		if(empty($msg))
		{
			return false;
		}
		$_SESSION["msg"]["warnings"] = $msg;
		return true;
	}
	
	function save_msg_success($msg)
	{
		if(empty($msg))
		{
			return false;
		}
		$_SESSION["msg"]["success"] = $msg;
		return true;
	}
?>