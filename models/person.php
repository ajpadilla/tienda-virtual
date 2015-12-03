<?php 
	/**
	* 
	*/
	class Person extends DBAbstractModel
	{
		public $id;
		public $user_id;
		public $name;
		public $last_name;
		public $date_of_birth;
		public $phone;
		public $address;

		function __construct()
		{
			$this->id = "";
			$this->user_id = "";
			$this->name = "";
			$this->last_name = "";
			$this->date_of_birth = "";
			$this->phone = "";
			$this->address = "";
		}

		function __destruct() 
	    {
	        unset($this);

	    }

	    public function get($user_id = "")
	    {
	    	if ($user_id != "") 
	    	{
	    		$this->query = "SELECT * FROM persons 
	    		WHERE persons.user_id = '{$user_id}'";
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

	    public function set($person_data = array())
	    {
	    	if (array_key_exists('name', $person_data)) 
	    	{
	    		foreach ($person_data as $property => $value) 
	    		{
	    			if (property_exists($this, $property)) 
	    			{
	    				$$property = $value;
	    			}
	    		}
	    		$this->query = "INSERT INTO persons
	    		(user_id, name, last_name, date_of_birth, phone, address, create_at)
	    		VALUES 
	    		('{$user_id}','{$name}','{$last_name}', '{$date_of_birth}', '{$phone}', '{$address}', NOW())";
	    		$this->execute_single_query();
	    	}
	    }

	    public  function edit($person_data = array())
	    {
	    	#code
	    }
	    public  function delete($user_email = '')
	    {
	    	#code
	    }
	}
?>