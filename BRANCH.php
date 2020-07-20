<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="s11.css">
  <title>BRANCH</title>
<HEAD>

  <form action="bsubmit.php" method="POST" >
    <div class="col-sm-5">
            <div ><span style="font-family:impact;text-shadow:2px 5px 10px red; font-size:50px">BRANCHES</span></div>
        </div>
        </form>
            <style>
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
                        
background-color:#F3D2B2;
                        margin: 50px;
                        min-height: 300px; 
                        background-position: center;
                        background-repeat: no-repeat;
                        background-size: fixed;
                        position:relative;
                    }
                    .container {
                    position: absolute;
                    right: 10px;
                    margin: 20px;
                    max-width: 15px;
                    padding: 20px;
                    background-color: #e9cece;
                    }
                        
                    .form-group input{
                        width: 500px;
                    }
                    .form-grou input {
                        width:200px;
                        float: center;
                    }
                </STYLE>
        </HEAD>
        <BODY>
	<div class="topnav">
  <a  href="services.php">HOME</a>
<a  class="active" href="branch.php">ADD</a>
 
  <a  href="EDITBRANCH.php">UPDATE</a>
  
 <a  href="rbranch.php">REPORT</a>
	<a href="login.php">LOGOUT</a>
</div>
        <div class="row">
            <form action="bsubmit.php" method="POST">
                <div class="form-group">
                        <label >BRANCH ID:</label>
                        <input type="text" placeholder=" ENTER BRANCH-ID" name="branchid" class="form-control" required="Please fill branch id">
                </div>
                <div class="form-group">
                            <label >BRANCH NAME:</label>
                            <input type="text" placeholder="ENTER BRANCH-NAME" name="branchname"  class="form-control" required="Please fill branch name">
                </div>
                <div class="form-group">
                                <label >EMAIL ID:</label>
                                <input type="email"placeholder="ENTER EMAIL" class="form-control" name="email"required="Please fill all the details">
                </div>
                <div class="form-group">
                                <label >PHONE NUMBER</label>
                                <input type="text"  placeholder="ENTER PHONE NUMBER"  class="form-control"  name="phoneno" required="Please fill all the details">
                </div>
                <div class="form-group">
                                    <label for="tcountry">ADDRESS</label>
                                    <input type="text" placeholder="ENTER ADDRESS" class="form-control" name="address" required="Please fill all the details">
                </div>
				<div class="form-grou">
					<input type="submit"  class="btn btn-success">
                </div>
        
            </form>
        </DIV>
        </BODY>
</html>