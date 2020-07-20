<?php 
 $servername = "localhost";
$userid = "root";
$password = "";
$dbname = "login";

// Create connection
$link= mysqli_connect($servername, $userid, $password, $dbname);
mysqli_select_db($link,'login');
  $sql = " delete from tanker where supplierid = '$_GET[supplierid]'";
       
 
            if(mysqli_query($link,$sql))
            {
               echo "<script language='javascript' type='text/javascript'>";
echo "alert('deleted successfully');";
echo "</script>";

$URL="rtanker.php";
echo "<script>location.href='$URL'</script>";
            }
            else
            {
              echo "<script language='javascript' type='text/javascript'>";
echo "alert('failed to delete');";
echo "</script>";

$URL="rtanker.php";
echo "<script>location.href='$URL'</script>";
            }
        
 
?>

