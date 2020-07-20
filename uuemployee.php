<?php

$servername = "localhost";
$userid = "root";
$password = "";
$dbname = "login";

// Create connection
$link= mysqli_connect($servername, $userid, $password, $dbname);
mysqli_select_db($link,'login');
$sql="update  employee set branchid='$_POST[branchid]',employeename='$_POST[employeename]',gender='$_POST[gender]',dob='$_POST[dob]',email='$_POST[email]',phoneno='$_POST[phoneno]',address='$_POST[address]',salary='$_POST[salary]' where employeeid='$_POST[employeeid]'";
if(mysqli_query($link,$sql))
{
echo "<script language='javascript' type='text/javascript'>";
echo "alert('updated successfully');";
echo "</script>";

$URL="remployee.php";
echo "<script>location.href='$URL'</script>";
}
else
{
echo "<script language='javascript' type='text/javascript'>";
echo "alert('failed');";
echo "</script>";

$URL="remployee.php";
echo "<script>location.href='$URL'</script>";
}

?>