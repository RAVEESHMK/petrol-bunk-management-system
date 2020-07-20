<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="s11.css">

  <title>MACHINE</title>
<div class="col-sm-5">
            <div ><span style="font-family:impact;text-shadow:2px 5px 10px red; font-size:50px" ;>MACHINES</span></div>
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
                        
background-color:#F3D2B2;
                        height: 500PX; 
                        background-position: RELATIVE;
                        background-repeat: no-repeat;
                        background-size: cover;
                        position:relative;
                        margin:75px;
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
                        width: 350px;
                    }
                    .form-grou input {
                        width:200px;
                        float: center;
                    }
                    </STYLE>
<div class="topnav">
  <a  href="services.php">HOME</a>
<a class="active"  href="machine.php">ADD</a>
 
  <a  href="UMACHINE.php">UPDATE</a>
  
 <a   href="rmachine.php">REPORT</a>
	<a href="login.php">LOGOUT</a>
</div>
        </HEAD>
            <BODY>
        <DIV>
		<form action="msubmit.php" method="POST">
				<div class="form-group">
                        <label >MACHINE ID:</label>
                        <input type="text" placeholder=" ENTER MACHINE-ID" name="machineid" class="form-control" required="Please fill branch id">
                </div>
				<div class="form-group">
					<label >COMPANY:</label>
					<input  type="text" placeholder="Please Enter COMPANY" name="company" class="form-control" required="Please fill all the details">
				</div>
                <DIV>
                        <label>FUEL TYPE:</label>
                    <input type="radio" name="fueltype"value="PETROL" checked> PETROL
                    <input type="radio" name="fueltype" value="DIESEL"> DIESEL
                    <input type="radio" name="fueltype"value="GAS">GAS 
                </DIV>
				
				<div class="form-grou">
                        <input type="submit" value="submit" class="btn btn-success">
                    </div>
            
        </DIV>
            </form>
        </BODY>
</html>