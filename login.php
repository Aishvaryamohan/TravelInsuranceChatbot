<?php

$Uname = $_POST['Uname'];
$password = $_POST['password'];
if (!empty($Uname) | !empty($password) ) 
{
	 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "finalchatbot";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	 header("Location:Chatbot.html");;
}
?>
/**
$Uname = scriptcslashes($Uname);
$password = scriptcslashes($password);

mysql_connect("localhost","root","");
mysql_select_db("finalchatbot");
$result = mysql_query(select * from login where Uname = '$Uname' and password) or die("Failed to query Database" mysql_error());
$row = mysql_fetch_array($result);
if(row['Uname'] == $Uname && $row['password' == $ password){

header{"location:Chatbot.html"};

}
else
{
	echo "Failed to login";
}
}**/
