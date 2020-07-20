<?php

$servername = "localhost";
$userid = "root";
$password = "";
$dbname = "login";

// Create connection
$link= mysqli_connect($servername, $userid, $password, $dbname);
mysqli_select_db($link,'login');
$sql="update  tanker set vehicleno='$_POST[vehicleno]',date='$_POST[date]',tankercapacity='$_POST[tankercapacity]',fueltype='$_POST[fueltype]' where supplierid='$_POST[supplierid]'";
if(mysqli_query($link,$sql))
{
echo "<script language='javascript' type='text/javascript'>";
echo "alert('updated');";
echo "</script>";

$URL="rtanker.php";
echo "<script>location.href='$URL'</script>";
}
else
{
echo "<script language='javascript' type='text/javascript'>";
echo "alert('failed to update');";
echo "</script>";

$URL="rtanker.php";
echo "<script>location.href='$URL'</script>";
}

?>