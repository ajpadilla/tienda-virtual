<?php  
	/**
	* 
	*/
	class Role extends DBAbstractModel
	{
		public $id;
		public $name;
		public $display_name;
		public $description;
		function __construct()
		{
			$this->id = "";
			$this->name = "";
			$this->display_name = "";
			$this->description = "";
		}

		function __destruct() 
	    {
	        unset($this);

	    }

	    public function get($role_id = "")
	    {
	    	if ($user_id != "") 
	    	{
	    		$this->query = "SELECT * FROM roles 
	    		WHERE roles.id = '{$role_id}'";
	    		$this->get_results_from_query();
	    	}

	    	if (count($this->rows) == 1 ) 
			{
				foreach ($this->rows[0] as $property => $value) 
				{
					$this->$property = $value;
				}
			}
	    }

	    public function set($role_data = array())
	    {
	    	#code
	    }

	    public  function edit($role_data = array())
	    {
	    	#code
	    }
	    public  function delete($role_id = '')
	    {
	    	#code
	    }

	    public function asignedRole($user_id, $role_id)
	    {
	    	$this->query = "INSERT INTO users_roles (user_id, role_id, create_at) 
	    	VALUES ($user_id,$role_id,NOW())";
	    	$this->execute_single_query();
	    }

	}
?>