<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="s11.css">
  <title>SALES OF THE DAY</title>
<div class="col-sm-5">
            <div ><span style="font-family:impact;text-shadow:2px 5px 10px red; font-size:50px" ;>SALES OF THE DAY</span></div>
        </div>
            <style>

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
                        background-color:rgb(151, 207, 245);
                        
background-color:#F3D2B2;
                        min-height: 300px; 
                        background-position: center;
                        background-repeat: no-repeat;
                        background-size: cover;
                        position:relative;
                        margin:30px;
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
            </style>
<div class="topnav">
   <a  href="services.php">HOME</a>
<a  class="active" href="sales.php">ADD</a>
 
  <a  href="USALES.php">UPDATE</a>

 <a   href="rsales.php">REPORT</a>
	<a href="login.php">LOGOUT</a>
</div>
        </head>
        <body>
        <DIV>
            <form action="ssales.php" method="POST">
				<div class="form-group">
					<label >EMPLOYEE ID:</label>
					<input type="text" placeholder="Please Enter ID" name="employeeid" class="form-control" required="Please fill id" >
                </div>
                <div class="form-group">
                        <label for="tid">MACHINE ID:</label>
                        <input type="text" placeholder="Please Enter ID" name="machineid"  class="form-control" required="Please fill id" >
                    </div>
                   
                        <div>
                            <LABEL>SALES DATE:</LABEL><br>
                         <input type="text" name="salesdate">
                    </div>
                      

				
				<div class="form-group">
					<label>START READING</label>
					<input type="text" name="startreading" placeholder="Please Enter DETAILS" class="form-control" required="Please fill all the details">
                </div>
                <div class="form-group">
                        <label>END READING</label>
                        <input type="text" name="endreading"  placeholder="Please Enter DETAILS" class="form-control" required="Please fill all the details">
                    </div>
                    <div class="form-group">
                            <label >SALES AMOUNT</label>
                            <input type="text" name="amount" placeholder="Please Enter DETAILS" class="form-control" required="Please fill all the details">
                        </div>
				<div class="form-grou">
					<input type="submit" value"submit" class="button">
                </div>
        </DIV>
    </form>
    </body>
</html>