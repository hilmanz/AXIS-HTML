<?php

class db{
	protected $conn;
	function open_db($index=0){
		GLOBAL $CONFIG;

		$host = 'localhost';
		$user = 'root';
		$password = '';

		$this->conn = mysql_connect($host,$user,$password);

		if($this->conn)$result =  "can used db";
		else $result =  "cant connect";
		
		return $result;

	}

	function query($sql){
	
		$this->open_db();
		$query = mysql_query($sql,$this->conn);
		$this->close_db();
		if($query) return true;
		else return false;
		// return $sql;
		
	}
	
	function fetch($sql,$all=false){
		$this->open_db();
		$data = array();
		$query = mysql_query($sql,$this->conn);
		if($all==true) {
			while($row = mysql_fetch_object($query)){
			$data[] = $row;
			}
		
		}else $data = mysql_fetch_object($query);
		
		$this->close_db();
		return $data;
	}
	
	function close_db(){
		if($this->conn!=null){mysql_close($this->conn);}
	}

	
}


?>
