<?php 
	include("db_abstract_model.php");

	/**
	* 
	*/
	class User extends DBAbstractModel
	{
		public $id;	
		public $username;
		public $password;
		public $email;

		function __construct()
		{
			$this->id = "";	
			$this->username = "";
			$this->password = "";
			$this->email = "";
		}

	    function __destruct() 
	    {
	        unset($this);
	    }

	    public function get($user_email = "")
	    {
	    	if ($user_email != "") 
	    	{
	    		$this->query = "SELECT * FROM users JOIN persons 
	    		ON users.id = persons.user_id
	    		WHERE users.email = '{$user_email}'";
	    		$this->get_results_from_query();
	    	}

	    	if (count($this->rows) == 1 ) 
			{
				foreach ($this->rows[0] as $property => $value) 
				{
					$this->$property = $value;
				}
				return $this->rows;
			}
	    }

	    public function set($user_data = array())
	    {
	    	if (array_key_exists('email', $user_data) && array_key_exists('username', $user_data))
	    	{
	    		$this->get($user_data['email']);
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