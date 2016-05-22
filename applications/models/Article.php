<?php 
// use applications\core\Base;
// require dirname(__FILE__)."/../core/BaseModel.php";
/**
*  Article Model
*/
/*class Article extends Base
{
	
	public static function first(){
		$connection = mysql_connect("localhost","root","123456") or die("数据库连接失败");
		mysql_set_charset("UTF8", $connection);

    	mysql_select_db("mffc", $connection);

    	$result = mysql_query("SELECT * FROM articles limit 0,1");

	    if ($row = mysql_fetch_array($result)) {
      		return $row;
    	}
    	mysql_close($connection);
	}

}*/


/**
* 
*/
class Article extends Illuminate\Database\Eloquent\Model
{
	
	public $timestamps = false;
}