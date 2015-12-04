<?php 
	function get_errors($validations = array(), $fields = array())
	{
		$errors = array('total_errors' => 0);

		foreach ($validations as $field => $regexp) 
		{
			if (!preg_match($regexp, $fields[$field])) 
			{
				$errors["total_errors"]++;
				$errors[$field] = true;
			}
			else
			{
				$errors[$field] = false;
			}
		}

		if ($errors["total_errors"] == 0) 
		{
			return false;
		}
		else
		{
			return $errors;
		}
	}
?>