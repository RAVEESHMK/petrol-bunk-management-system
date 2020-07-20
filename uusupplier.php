<?php

$servername = "localhost";
$userid = "root";
$password = "";
$dbname = "login";

// Create connection
$link= mysqli_connect($servername, $userid, $password, $dbname);
mysqli_select_db($link,'login');
$sql="update  supplier set name='$_POST[name]',email='$_POST[email]',phoneno='$_POST[phoneno]',address='$_POST[address]' where supplierid='$_POST[supplierid]'";
if(mysqli_query($link,$sql))
{
echo "<script language='javascript' type='text/javascript'>";
echo "alert('updated ');";
echo "</script>";

$URL="rsupplier.php";
echo "<script>location.href='$URL'</script>";
}
else
{
echo "<script language='javascript' type='text/javascript'>";
echo "alert('failed');";
echo "</script>";

$URL="rsupplier.php";
echo "<script>location.href='$URL'</script>";
}

?>