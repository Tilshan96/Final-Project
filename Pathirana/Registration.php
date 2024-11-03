<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title>Pathirana Printers</title>
    <!---Custom CSS File--->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
  
    <section class="container">
      <header>Registration Form</header>
		<div class="container">
			<form action="" id="form">
				<h1>Register</h1>
					<div class="input-group">
						 <label for="username">Username</label>
						 <input type="text" id="username" name="username" name="t1">
						 <div class="error"></div>
					</div>
					<div class="input-group">
						<label for="email">Email</label>
						<input type="text" id="email" name="email" name="t2" >
						<div class="error"></div>
					</div>
					<div class="input-group">
						<label for="password">Password</label>
						<input type="password" id="password" name="password" name="t3">
						<div class="error"></div>
					</div>
					<div class="input-group">
						<label for="cpassword">Confirm Password</label>
						<input type="password" id="cpassword" name="cpassword" name="t4">
						<div class="error"></div>
					</div>
				<button type="submit">Register</button>
			</form>
		</div>
    </section>
<script src="logscript.js"></script>
	
<?php
		$Username=$_POST["t1"];
		$Email=$_POST["t2"];
		$Password=$_POST["t3"];
		$ConfirmPassword=$_POST["t4"];
		$con=mysqli_connect("localhost","root","","ProjectPathiranadb");

		if(isset($_POST["s1"]))
		{$sql="insert into LoginReg values('$Username','$Email','$Password', '$ConfirmPassword')";
		$result=mysqli_query($con,$sql);
		}
	?>
  </body>
</html>