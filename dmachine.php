<?php 
 $servername = "localhost";
$userid = "root";
$password = "";
$dbname = "login";

// Create connection
$link= mysqli_connect($servername, $userid, $password, $dbname);
mysqli_select_db($link,'login');
  $sql = " delete from machine where machineid = '$_GET[machineid]'";
       
 
            if(mysqli_query($link,$sql))
            {
               echo "<script language='javascript' type='text/javascript'>";
echo "alert('deleted successfully');";
echo "</script>";

$URL="rmachine.php";
echo "<script>location.href='$URL'</script>";
            }
            else
            {
              echo "<script language='javascript' type='text/javascript'>";
echo "alert('failed to delete');";
echo "</script>";

$URL="rmachine.php";
echo "<script>location.href='$URL'</script>";
            }
        
 
?>

