<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="s11.css">
  <title>SUPPLIER</title>

     <div class="col-sm-5">
            <div ><span style="font-family:impact;text-shadow:2px 5px 10px red; font-size:50px" ;>SUPPLIER</span></div>
        </div>
                <STYLE>
            .RTE{
COLOR:YELLOW;
}      
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
                        
                        min-height: 300px; 
                        background-position: center;
                        background-repeat: no-repeat;
                        background-size: cover;
                        position:relative;
                        margin: 75px;
                        
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
                        width:350PX ;
                       
                        
                    }
                    .form-grou input {
                        width:200px;
                       
                    }
                   
                </STYLE>

<div class="topnav">
  <a  href="services.php">HOME</a>
<a class="active"  href="supplier.php">ADD</a>
 
  <a  href="usupplier.php">UPDATE</a>
  
 <a   href="rsupplier.php">REPORT</a>
	<a href="login.php">LOGOUT</a>
</div>
                </HEAD>
                <BODY>
                    
				<div class="form-group">
                        <form action="ssubmit.php" method="POST">
                            <div>
                                <label >SUPPLIER ID:</label><BR>
					            <input type="TEXT" placeholder="Please Enter SUPPLIERID"  NAME="supplierid"  required="Please fill  id" >
                            </div>
                            
                            <div class="form-group">
                                <label >SUPPLIER NAME:</label><BR>
                                <input  type="text"  placeholder="Please Enter supplier name" name="name"  required="Please fill all the details">
                            </div>
				
                            <div class="form-group">
                                <label >EMAIL ID:</label><BR>
                                <input type="EMAIL"  placeholder="Please Enter EMAIL" name="email"   required="Please fill all the details">
                            </div>

                            <div class="form-group">
                                <label >PHONE NUMBER</label><BR>
                                <input type="TEXT"  placeholder="Please Enter PHONE NUMBER" name="phoneno"  required="Please fill all the details">
                            </div>

                            <div class="form-group">
                                    <label >ADDRESS</label><BR>
                                    <input type="text"  placeholder="Please Enter the address" name="address" required="Please fill all the details">
                                </div>

                            <div class="form-grou">
                                <input type="submit" class="button" value="submit">
                            </div>
        
    </form>
</DIV>
    </BODY>
</html>