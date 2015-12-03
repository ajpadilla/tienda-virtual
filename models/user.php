<?php 
	include("db_abstract_model.php");
	include("person.php");
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

		function __construct()
		{
			$this->id = "";	
			$this->username = "";
			$this->password = "";
			$this->email = "";
			$this->person = new Person();
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
	    		echo "Entro en la primera"."<br/>";
	    		$this->get($user_data['email']);
	    		if ($user_data["email"] != $this->email && $user_data["username"] != $this->username) 
	    		{
	    			echo "Entro en la segunda"."<br/>";
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

	}
?>