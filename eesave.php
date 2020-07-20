<?php

$servername = "localhost";
$userid = "root";
$password = "";
$dbname = "login";

// Create connection
$link= mysqli_connect($servername, $userid, $password, $dbname);
mysqli_select_db($link,'login');
$sql="update  branch set branchname='$_POST[branchname]',email='$_POST[email]',phoneno='$_POST[phoneno]',address='$_POST[address]' where branchid='$_POST[branchid]'";
if(mysqli_query($link,$sql))
{
echo "<script language='javascript' type='text/javascript'>";
echo "alert('UPDATE SUCCESSFULLY');";
echo "</script>";

$URL="rbranch.php";
echo "<script>location.href='$URL'</script>";
}
else
{
echo "<script language='javascript' type='text/javascript'>";
echo "alert('FAILED TO UPDATE');";
echo "</script>";

$URL="rbranch.php";
echo "<script>location.href='$URL'</script>";
}

?>