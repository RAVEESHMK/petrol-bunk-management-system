<?php
$servername = "localhost";
$userid = "root";
$password = "";
$dbname = "login";
$servername = "localhost";
$userid = "root";
$password = "";
$dbname = "login";

// Create connection
$link= mysqli_connect($servername, $userid, $password, $dbname);

$sql="select * from BRANCH";
$result=mysqli_query($link,$sql);
?>
<!DOCTYPE html>
<html>
<HEAD>
<title>
retrive
</title>
<div class="col-sm-5">
            <div ><span style="font-family:impact;text-shadow:2px 5px 10px red; font-size:50px">BRANCH</span></div>
        </div>
<STYLE>
body{

background-color:#F3D2B2;
}
.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
</STYLE>
</HEAD>
<body>
<div class="topnav">
   <a  href="services.php">HOME</a>
<a   href="BRANCH.php">ADD</a>
 
  <a  href="editbranch.php">UPDATE</a>
  
 <a  class="active" href="rBRANCH.php">REPORT</a>
	<a href="login.php">LOGOUT</a>
</div>
<table align="center"border="1px" style="width:600px; line-height:40px;">
<tr>
<th colspan="6"><h2>RECORD OF THE BRANCHES</h2></th>
</tr>
<t>
<th>BRANCH ID</TH>
<th>BRANCH NAME</TH>

<th>EMAIL</TH>
<th>PHONE NUMBER</TH>
<th>ADDRESS</TH>
<th>DELETE</TH>
</t>
<?php
 if(mysqli_num_rows($result) > 0){
	 while($row = mysqli_fetch_array($result))
	{
	
echo "<tr>";
                echo "<td>" . $row['branchid'] . "</td>";
                echo "<td>" . $row['branchname'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['phoneno'] . "</td>";
		echo "<td>" . $row['address'] . "</td>";
       

echo"<td><a href=dbranch.php?branchid=".$row['branchid'].">Delete</a></td>";
 echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
}
    else{
        echo "No records matching your query were found.";
    }

 
// Close connection
mysqli_close($link);
?>
</table>
</body>
</html>