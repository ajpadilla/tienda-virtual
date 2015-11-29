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
	}

	
?>