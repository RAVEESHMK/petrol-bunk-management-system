<?php

$servername = "localhost";
$userid = "root";
$password = "";
$dbname = "login";

// Create connection
$link= mysqli_connect($servername, $userid, $password, $dbname);
mysqli_select_db($link,'login');
$sql="update  sales set machineid='$_POST[machineid]',salesdate='$_POST[salesdate]',startreading='$_POST[startreading]',endreading='$_POST[endreading]',amount='$_POST[amount]' where employeeid='$_POST[employeeid]'";
if(mysqli_query($link,$sql))
{
echo "<script language='javascript' type='text/javascript'>";
echo "alert('updated successfully');";
echo "</script>";

$URL="rsales.php";
echo "<script>location.href='$URL'</script>";
}
else
{
echo "<script language='javascript' type='text/javascript'>";
echo "alert('failed');";
echo "</script>";
$URL="rsales.php";
echo "<script>location.href='$URL'</script>";
}

?>