<?php
$servername = "localhost";
$userid = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = new mysqli($servername, $userid, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "  CONNECTION ESTABLISHED \r\n";
//echo "  INSERTION IN PROCESS";
$employeeid=$_POST["employeeid"];
$branchid=$_POST["branchid"];
$employeename =$_POST["employeename"];
$gender =$_POST["gender"];
$dob = $_POST["dob"];
$email=$_POST["email"];
$phoneno=$_POST["phoneno"];
$address=$_POST["address"];
$salary=$_POST["salary"];


$sql = "INSERT INTO employee VALUES ('$employeeid', '$branchid','$employeename','$gender','$dob','$email','$phoneno','$address','$salary')";

if ($conn->query($sql) === TRUE) {
    echo "<script language='javascript' type='text/javascript'>";
echo "alert('INSERTED SUCCESSFULLY');";
echo "</script>";

$URL="remployee.php";
echo "<script>location.href='$URL'</script>";
} else {
   echo "<script language='javascript' type='text/javascript'>";
echo "alert('VALUE NOT INSERTED');";
echo "</script>";

$URL="remployee.php";
echo "<script>location.href='$URL'</script>";
}

$conn->close();
?>