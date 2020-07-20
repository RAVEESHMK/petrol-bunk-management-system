
<!DOCTYPE html>
<html>
<head> 
	<title>LOG-IN</title>
	
	<link rel="stylesheet" href="login.css" type="text/css" ></style>
	
<STYLE>
.RTE{
COLOR:YELLOW;
text-size:10px;
}
.gg{
text-align:center;
}
</STYLE>
	
</head>

<body>
<H1 class="gg">PETROLBUNK DATABASE MANAGEMENT SYSTEM</H1>
	<div class="from">

    <form action="sub.php" method="POST" >
	
    <p>
        <labeL>USERID:  </label>
        <input type="text" placeholder="ENTER USER-ID"  required="enter ID" class="user-id" name="userid" >
    </p>
            <p>
    	<label>PASSWORD:</label>
    	<input type="password" placeholder="ENTER PASSWORD"  required="enter password" class="password" name="password">
    </p>
   <p>
	<input type="submit" class="button" value="login" >
    </p>

</form>
</div>
</body>
</html>
