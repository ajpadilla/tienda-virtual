<?php 
	include("db_abstract_model.php");
	include("person.php");
	include("role.php");
	/**
	* 
	*/
	class User extends DBAbstractModel
	{
		public $id;	
		public $username;
		public $password;
		public $email;
		public $person;
		public $role;

		function __construct()
		{
			$this->id = "";	
			$this->username = "";
			$this->password = "";
			$this->email = "";
			$this->person = new Person();
			$this->role = new Role();
			$this->validations = array(
				"username" => "/^[[:alnum:] [:space:] [:punct:]]{1,45}$/",
				"password" => "/^[[:alnum:] [:space:] [:punct:]]{1,40}$/",
				"confirm_password" => "/^[[:alnum:] [:space:] [:punct:]]{1,40}$/", 
				"email" => "/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/",
			);
		}

	    function __destruct() 
	    {
	        unset($this);
	    }

	    public function get($user_email = "")
	    {
	    	if ($user_email != "") 
	    	{
	    		$this->query = "SELECT * FROM users 
	    		WHERE users.email = '{$user_email}'";
	    		$this->get_results_from_query();
	    	}

	    	if (count($this->rows) == 1 ) 
			{
				foreach ($this->rows[0] as $property => $value) 
				{
					$this->$property = $value;
				}
				$this->person->get($this->id);
			}
	    }

	    public function set($user_data = array())
	    {

	    	if (array_key_exists('email', $user_data) && array_key_exists('username', $user_data))
	    	{
	    		//echo "Entro en la primera"."<br/>";
	    		$this->get($user_data['email']);
	    		if ($user_data["email"] != $this->email && $user_data["username"] != $this->username) 
	    		{
	    			//echo "Entro en la segunda"."<br/>";
	    			foreach ($user_data as $property => $value) 
	    			{
	    				if (property_exists($this, $property)) 
	    				{
	    					$$property = $value;
	    					echo "Entro en la tercera"."<br/>";
	    				}
	    			}
	    			$this->query = "INSERT INTO users
	    			(username, password, email, create_at)
	    			VALUES 
	    			('{$username}','{$password}','{$email}', NOW())";
	    			$this->execute_single_query();
	    			$this->get($user_data['email']);
	    			$user_data["user_id"] = $this->id;
	    			$this->person->set($user_data);
	    			$this->role->asignedRole($this->id,$user_data["roles"]);
	    		}
	    	}
	    }

	    public  function edit($user_data = array())
	    {
	    	#code
	    }
	    public  function delete($user_email = '')
	    {
	    	#code
	    }

	    public function search($input = array())
	    {
	    	$invalid_fields = array("email" => false, "username" => false);

	    	$this->get($input["email"]);
	    	if (!empty($this->email)) 
	    	{
	    		$invalid_fields["email"] = true;
	    		if (!empty($this->username) && $input["username"] != "") 
	    		{
	    			if ($this->username == $input["username"]) 
	    			{
	    				$invalid_fields["username"] = true;
	    			}
	    			else
	    			{
	    				$invalid_fields["username"] = false;
	    			}
	    		}
	    	}
	    	else
	    	{
	    		$invalid_fields["email"] = false;
	    	}

	    	return $invalid_fields;
	    }

	    public function valid_password($password='', $confirm_password)
	    {
	    	$invalid_password = array('confirm_password' => false);
	    	if ($password != "" && $confirm_password != "")
	    	{
	    		if ($password != $confirm_password) 
		    	{
		    		$invalid_password["confirm_password"] = true;
		    	}
	    	}
	    	
	    	return $invalid_password;
	    }

	}
?>