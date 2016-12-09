<?php

$server_name = "localhost";
$username = "root";
$password="";
$db_name = "ahoretimes";
$con = mysql_connect($server_name,$username,$password);
if($con)
{
    mysql_select_db($db_name);
    //echo "Deepak";
}
else
{
       echo"<font color=\"red\">Error in Connecting to MySQL database server!!".mysql_error()."</font>";
       
}


?>

