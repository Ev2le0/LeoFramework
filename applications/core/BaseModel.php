<?php 
namespace applications\core;
class Base{
	public static function M($table){
		echo $table;
		$connection = mysql_connect("localhost","root","123456") or die("数据库连接失败");
		mysql_set_charset("UTF8", $connection);

    	mysql_select_db('mffc', $connection);
    	echo "SELECT * FROM $table limit 0,1";
    	$result = mysql_query("SELECT * FROM $table limit 0,1");

	    if ($row = mysql_fetch_array($result)) {
      		return $row;
    	}
    	mysql_close($connection);
	}
}