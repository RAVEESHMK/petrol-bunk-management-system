<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="s11.css">

  <title>BRANCH</title>
  	
	


    <div class="col-sm-5">
            <div ><span style="font-family:impact;text-shadow:2px 5px 10px red; font-size:50px" ;>EMPLOYEE</span></div>
        </div>
        
            
<STYLE>
      	body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
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







            body 
                    {
                        font-family: Arial, Helvetica, sans-serif;
                        
background-color:#F3D2B2;
                        margin:50px;
                        min-height: 300px; 
                        background-position: center;
                        background-repeat: no-repeat;
                        background-size: cover;
                        position:relative;
                    }
                    .button {
                        background-color: #0d9108;
                            border: none;
                            color: white;
                            padding: 18px 32px;
                            text-align: center;
                            text-decoration: none;
                            font-size: 12px;
                            margin: 4px 2px;
                            cursor: pointer;
                            POSITION:relative;
                            }    
                    .form-group input{
                        width: 500px;
                    }
                    .form-grou input {
                        width:200px;
                        float: center;
                    }
			.RTD{
	color:red;
}
.RTE{
color:yellow;
}

                </STYLE>

<div class="topnav">
  <a  href="services.php">HOME</a>
<a  class="active" href="employee.php">ADD</a>
 
  <a  href="UEMPLOYEE.php">UPDATE</a>
 
 <a   href="rEMPLOYEE.php">REPORT</a>
	<a href="login.php">LOGOUT</a>
</div>


                </head>
                <BODY>
                <div >
                <form action="esubmit.php" method="POST">   
        
		<div class="form-group">
                   
                        
					<label >EMPLOYEE ID:</label>
					<input type="text" placeholder="Please Enter EMPLOYEE-ID"  name="employeeid"class="form-control" required="Please fill employee id" >
                </div>
                <div class="form-group">
                        <label for="tid">BRANCH ID:</label>
                        <input type="text" placeholder="Please Enter BRANCH-ID" class="form-control"name="branchid" required="Please fill branch id" >
                 </div>
		<div class="form-group">
			<label >EMPLOYEE NAME:</label>
			<input  type="text"  placeholder="Please Enter name of Employee" name="employeename" class="form-control" required="Please fill all the details">
                </div>
                    <DIV>
                            <label>GENDER:</label>
                        <input type="radio" name="gender" value="M" checked> Male
                        <input type="radio" name="gender" value="F"> Female
                        <input type="radio" name="gender" value="O"> Other 
                    </DIV>
             
                    <div>
                      <LABEL>DATE OF BIRTH:</LABEL>
                     <input type="TEXT" name="dob">
               	    </div>
                  
				<div class="form-group">
					<label for="captainid">EMAIL ID:</label>
					<input type="email" placeholder="Please Enter EMAIL" name="email" class="form-control" required="Please fill all the details">
				</div>
				<div class="form-group">
					<label >PHONE NUMBER</label>
					<input type="text" placeholder="Please Enter PHONE NUMBER" name="phoneno" class="form-control" required="Please fill all the details">
                    </div>
                    <div class="form-group">
                        <label for="tcountry">ADDRESS</label>
                        <input type="text" placeholder="Please Enter the address"class="form-control"name="address" required="Please fill all the details">
                    </div>
                    <div class="form-group">
                            <label for="captainid">SALARY:</label>
                            <input type="text"  placeholder="Please Enter Salary per month" name="salary" class="form-control" required="Please fill all the details">
                    </DIV>      	
                        <div class="form-grou">
                                <input type="submit"  class="btn btn-success" value="SUBMIT">
                        </div>
           </form>
            
         </div>
        
        </BODY>
</html>