<?php

// session_start();
// DEFINE("server","localhost",true);
// DEFINE("user","root",true);
// DEFINE("password","",true);
// DEFINE("database","online_grocery",true);
// 	function iud($query)
// 	{
// 		$cid=mysqli_connect(server,user,password,database) or die("connection error");
// 	$result=mysqli_query($cid,$query);
// 	$n=mysqli_affected_rows($cid);
// 	mysqli_close($cid);
// 	return $n;
// 	}
	
// function select($query)
// {
// 	$cid=mysqli_connect(server,user,password,database) or die("connection error");
// 	$result=mysqli_query($cid,$query);
// 	mysqli_close($cid);
// 	return $result;
// }

// Get Heroku ClearDB connection information
session_start();
DEFINE("server","us-cdbr-east-05.cleardb.net",true);
DEFINE("user","bcb37cccb8ecad",true);
DEFINE("password","6b9a18b4",true);
DEFINE("database","heroku_0b1fd23f5c433ca",true);
	function iud($query)
	{
		$cid=mysqli_connect(server,user,password,database) or die("connection error");
	$result=mysqli_query($cid,$query);
	$n=mysqli_affected_rows($cid);
	mysqli_close($cid);
	return $n;
	}
	
function select($query)
{
	$cid=mysqli_connect(server,user,password,database) or die("connection error");
	$result=mysqli_query($cid,$query);
	mysqli_close($cid);
	return $result;
}

?>