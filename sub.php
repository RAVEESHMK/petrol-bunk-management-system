<?php


$userid = $_POST['userid'];
$password = $_POST['password'];
$userid = stripcslashes($userid);
$password = stripcslashes($password);
$con =mysqli_connect('127.0.0.1','root','');
mysqli_select_db($con,'login');
$sql = ("select * from userlogin where userid='$userid' and password = '$password'") or die("failed to query database" . mysqli_connect_error());
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
if($row['userid']==$userid&&$row['password']==$password){
echo "<script language='javascript' type='text/javascript'>";
echo "alert('LOG-IN SUCCESSFUL');";
echo "</script>";

$URL="SERVICES.php";
echo "<script>location.href='$URL'</script>";
}
else {
echo "<script language='javascript' type='text/javascript'>";
echo "alert('ENTER CORRECT USER ID AND PASSWORD');";
echo "</script>";

$URL="login.php";
echo "<script>location.href='$URL'</script>";
}
?>