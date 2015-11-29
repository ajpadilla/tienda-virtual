<?php 

	/**
	* 
	*/
	abstract class DBAbstractModel
	{
		private static $db_host = 'locahost';
		private static $db_user = 'root';
		private static $db_password = '1234';
		protected static $db_name = 'tienda_virtual';
		protected $query;
		protected $rows = array();
		private $connection;
		public $message;

		# métodos abstractos para ABM de clases que hereden    
	    abstract protected function get();
	    abstract protected function set();
	    abstract protected function edit();
	    abstract protected function delete();

	    protected function open_connection()
	    {
	    	$this->connection = new mysqli(self::$db_host, self::$db_user, self::$db_password, self::$db_name);
	    }

	    private function close_connection()
	    {
	    	$this->connection->close();
	    }

		protected function execute_single_query()
		{
			if ($_POST) 
			{
				$this->open_connection();
				$this->connection->query($this->query);
				$this->close_connection();
			}
			else
			{
				$this->message = "Metodo no permitido";
			}
		}

		protected function get_results_from_query()
		{
			$this->open_connection();
	        $result = $this->connection->query($this->query);
	        while ($this->rows[] = $result->fetch_assoc());
	        $result->close();
	        $this->close_connection();
	        array_pop($this->rows);
		}

	}

	
?>