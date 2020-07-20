<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="s11.css">

  <title>TANKER</title>
      <div class="col-sm-5">
            <div ><span style="font-family:impact;text-shadow:2px 5px 10px red; font-size:50px" ;>TANKERS</span></div>
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
                        min-height: 300px; 
                        background-position: center;
                        background-repeat: no-repeat;
                        background-size: cover;
                        position:relative;
                        margin:50px;
                        color:rgb(0, 0, 0);
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
                </STYLE>
<div class="topnav">
   <a  href="services.php">HOME</a>
<a class="active"  href="tanker.php">ADD</a>
 
  <a  href="UTANKER.php">UPDATE</a>
 
 <a   href="rtanker.php">REPORT</a>
	<a href="login.php">LOGOUT</a>
</div>
        </HEAD>
        <BODY>
        <DIV>
            <form action="tsubmit.php" method="POST">
				<div class="form-group">
					<label >SUPPLIER ID:</label>
					<input type="text" placeholder="Please Enter ID" name="supplierid" class="form-control" required="Please fill id">
				</div>
				<div class="form-group">
					<label >VEHICLE NUMBER:</label>
					<input  type="text"  placeholder="Please Enter VEHICLE NO" name="vehicleno"  class="form-control" required="Please fill all the details">
                </div>
                    <div class="form-group" >
                        <LABEL>FILLING DATE:</LABEL><br>    
                     <input type="text" name="date" >
                </div>
                 

				
				<div class="form-group">
					<label >TANKER CAPACITY:</label>
					<input type="text" name="capacity" placeholder="Please Enter capacity of tanker" class="form-control" required="Please fill all the details">
				</div>
                <DIV>
                        <label>FUEL TYPE:</label>
                    <input type="radio" name="fueltype" value="PETROL" checked> PETROL
                    <input type="radio" name="fueltype" value="DIESEL"> DIESEL
                    <input type="radio" name="fueltype" value="GAS">GAS 
                </DIV>
				
				<div>
					<input type="submit"  value"submit" class="btn btn-success btn-submit">
                </div>
            </form>
        </DIV>
    
    </BODY>

</html>