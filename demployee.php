<?php 
 $servername = "localhost";
$userid = "root";
$password = "";
$dbname = "login";

// Create connection
$link= mysqli_connect($servername, $userid, $password, $dbname);
mysqli_select_db($link,'login');
  $sql = " delete from employee where employeeid = '$_GET[employeeid]'";
       
 
            if(mysqli_query($link,$sql))
            {
               echo "<script language='javascript' type='text/javascript'>";
echo "alert('deleted successfully');";
echo "</script>";

$URL="remployee.php";
echo "<script>location.href='$URL'</script>";
            }
            else
            {
              echo "<script language='javascript' type='text/javascript'>";
echo "alert('failed to delete');";
echo "</script>";

$URL="remployee.php";
echo "<script>location.href='$URL'</script>";
            }
        
 
?>

