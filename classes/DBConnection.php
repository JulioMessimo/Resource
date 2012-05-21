<?php
class DBConnection
{
	private static $instance = null;
	private $id = 0;
	public static function getConnection($host,$user,$pass,$dbName)
	{
		if (self::$instance == null)
		{
			self::$instance = new DBConnection(mysql_connect($host,$user,$pass));
						self::$instance->SelectDB($dbName);
		}
		return self::$instance;
	}
	public function SelectDB($name)
	{
		mysql_select_db($name,$this->id);
	}
	public function addQuery($sql)
	{
		$result = mysql_query($sql) or die(mysql_error());
		return $result;
	}
	public function getID()
	{
	return $this->id;
	}
	private function __construct($id)
	{
		$this->id = $id;
	}
	private function __clone()
	{
	}

}
?>