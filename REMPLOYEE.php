<?php
$servername = "localhost";
$userid = "root";
$password = "";
$dbname = "login";

// Create connection
$link= mysqli_connect($servername, $userid, $password, $dbname);

$sql="select * from employee";
$result=mysqli_query($link,$sql);
?>
<!DOCTYPE html>
<html>
<HEAD>
<title>
retrive
</title>
<div class="col-sm-5">
            <div ><span style="font-family:impact;text-shadow:2px 5px 10px red; font-size:50px">EMPLOYEE</span></div>
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
<a   href="employee.php">ADD</a>
 
  <a  href="UEMPLOYEE.php">UPDATE</a>
  
 <a  class="active" href="rEMPLOYEE.php">REPORT</a>
	<a href="login.php">LOGOUT</a>
</div>
<table align="center"border="1px" style="width:900px; line-height:40px;">
<tr>
<th colspan="10"><h2>RECORD OF THE EMPLOYEES</h2></th>
</tr>
<t>
<th>EMPLOYEE ID</TH>
<th>BRANCH ID</TH>
<th>EMPLOYEE NAME</TH>
<th>GENDER</TH>
<th>DATE OF BIRTH</TH>
<th>EMAIL</TH>
<th>PHONE NUMBER</TH>
<th>ADDRESS</TH>
<th>SALARY</TH>
</t>
<?php
 if(mysqli_num_rows($result) > 0){
	 while($row = mysqli_fetch_array($result))
	{
	
echo "<tr>";
                echo "<td>" . $row['employeeid'] . "</td>";
                echo "<td>" . $row['branchid'] . "</td>";
		 echo "<td>" . $row['employeename'] . "</td>";
		 echo "<td>" . $row['gender'] . "</td>";
		 echo "<td>" . $row['dob'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";

                echo "<td>" . $row['phoneno'] . "</td>";
		echo "<td>" . $row['address'] . "</td>";
		 echo "<td>" . $row['salary'] . "</td>";
	
echo"<td><a href=demployee.php?employeeid=".$row['employeeid'].">Delete</a></td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
}
    else{
        echo "No records matching your query were found.";
    }

 
?>
</table>
</body>
</html>