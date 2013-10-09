<?php
class MySQL {

	private $__host;
	private $__user;
	private $__pass;
	private $__db;

	private $__persistant = false; // Close connection on page load?

	var $error;
	var $link;
	
	// last query data
	var $row_count;
	
	public $last_query;

	function geterror() {
		return $this->error;
	}
	
	function __construct() {
		$this->__host = MYSQL_HOST;
		$this->__user = MYSQL_USER;
		$this->__pass = MYSQL_PASS;
		$this->__db = MYSQL_DB;
		$this->open();
	}

	/*   name:     open  -  connects to mysql database (persistant also)
	 *   args:     none
	 *   returns:  link to database
	 */

	function open()
	{
		if ($this->__persistant)
			$this->link = mysql_pconnect($this->__host, $this->__user, $this->__pass);
		else
			$this->link = mysql_connect($this->__host, $this->__user, $this->__pass);

		if (!$this->link)
		{
			$this->error = mysql_error();
			die($this->error);
			return false;
		}

		if (!$this->select_db()) return false;
		mysql_set_charset('utf8');
		return $this->link;
	}

	/*   name:     select_db  -  layer for mysql
	 *   args:     none
	 *   returns:  true if success
	 */

	function select_db() {
		if (!mysql_select_db($this->__db)) {				
			$this->error = mysql_error();
	  		return false;
		}
		return true;
	}

	/*   name:     close  -  closes mysql connection, made for persistant.
	 *   args:     none
	 *   returns:  nothing
	 */

	function close()
	{
		mysql_close($this->link);
	}

	/*   name:     query  -  does a mysql query (optional: debug in a new window)
	 *   args:     query , debug
	 *   returns:  mysql object
	 */
	
	function query($SqlString, $DebugActive = false)
	{
		$Result = mysql_query($SqlString, $this->link);
		$this->last_query = $SqlString;
		
		if (!$Result)
		{
			$this->error = mysql_error();
			return false;
		}
		else 
		{
			//$this->row_count = mysql_num_rows($Result);			
			
			if ($DebugActive)
				 __debug_query($Result, $this->row_count);
			 
			return $Result;			
		}
		
	}

	/*   name:     exec  -  execute a sql file
	 *   args:     file path
	 *   returns:  true if success
	 */

	function exec($FilePath)
	{
		if (!file_exists($FilePath)) 
		{
			$this->error = "File (" . $FilePath . ") does not exists.";
			return false;
		}			
		
		$FileStr = file_get_contents($FilePath);
		
		if (!$FileStr) {
			$this->error = "File (" . $FilePath . ") is not readable.";
			return false;
		}
		
		$SqlArray = explode(";", $FileStr);
		
		foreach($SqlArray as $SqlQuery)
			if (!empty($SqlQuery)) $this->query($SqlQuery);
			
		return true;
			
	}

	/*   name:     insert  -  inserts an array of a row into a table
	 *   args:     DataArray , TableName
	 *   returns:  true if sucess
	 */

	function insert($DataArray, $TableName)
	{		
		$RowNames = $RowValues = NULL;
		
		foreach ($DataArray as $row_name => $row_value)
		{
			$RowNames .= $row_name . ",";
			$RowValues .= "'" . mysql_real_escape_string($row_value) . "',";
		}
		
		$RowNames = substr($RowNames,0,-1);
		$RowValues = substr($RowValues,0,-1);
				
		$Sql = "INSERT INTO " . $TableName . " (" . $RowNames . ")" . " VALUES (" . $RowValues  . ")";
		
		$this->query($Sql);
		
		if (mysql_error($this->link)) {	// TODO: mysql escape
			$this->error = mysql_error($this->link);
			return false;		
		}
		else 
			return true;
		
	}

	/*   name:     update  -  updates an array of a row into a table (does not need all fields)
	 *   args:     DataArray , TableName
	 *   returns:  true if sucess
	 */

	function update($DataArray, $Where ,$TableName)
	{
		$UpdatedRows = null;
		
		foreach ($DataArray as $row_name => $row_value)
		{
			$UpdatedRows .= $row_name . "='" . mysql_real_escape_string($row_value) . "',";
		}
		
		$UpdatedRows = substr($UpdatedRows,0,-1);

		$Sql = "UPDATE " . $TableName . " SET " . $UpdatedRows . " WHERE (" . $Where . ")";
		$this->query($Sql);
		
		if (mysql_error($this->link)) {	// TODO: mysql escape
			$this->error = mysql_error($this->link);
			return false;		
		}
		else 
			return true;
		
	}

	/*   name:     delete  -  delete a row
	 *   args:     Where , TableName
	 *   returns:  true if sucess
	 */

	function delete($Where, $TableName)
	{
		if (!empty($Where))
			$Sql = "DELETE FROM " . $TableName . " WHERE (" . $Where .")";
		
		$this->query($Sql);
				
	}

	/*   name:     ping  -  pings connection
	 *   args:     none
	 *   returns:  true if sucess
	 */

	function ping()
	{
 		return mysql_ping($this->link);
	}

	/*   name:     fetchAssoc  -  fetchs assosiative
	 *   args:     resourse
	 *   returns:  array
	 */

	function fetchAssoc($MysqlResource)
	{
 		return mysql_fetch_assoc($MysqlResource);
	}
}
