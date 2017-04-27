<?php

?>
<html>
<head>
<title>Login</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<div class="container">
    <div style="width: 500px; margin: 50px auto;">
        <form method="POST" action="index.php">
          <center><h2>Register</h2></center>
          <hr/>
          <div class ="form-group">
               <label for="firstname" class="control-label">First Name</label>
               <input type="text" name="firstname" class="form-control">
          </div>
          <div class="form-group">
                <label for="lastname" class="control-label">Last Name</label>
                <input type="text" name="lastname" class="form-control">
          </div>
          <div class="form-group">
            <label for="email" class="control-label">Email</label>
            <input type="email" name="email" class="form-control">
          </div>
           <div class="form-group">
            <label for="phonenumber" class="control-label">Phone Number</label>
            <input type="tel" name="from_tel" class="form-control">
           </div>
           <div class="form-group">
           <label form="birthday" class="control-label">Birthday</label>
           <input type="date" name="birthday" class="form-control">
           </div>
           <div class="form-group">
           <label for="gender" class="control-label">Gender</label>
           <select name="gender">
             <option value=""></option>
             <option value="Male">Male</option>
             <option value="Female">Fermale</option>
           </select>
           <div class="form-group">
            	<center><input type="submit" value="Register" class="submit"></center>
            </div>

            <hr/>
            <a href="index.html"><b><h3>Login</h3></b></a>
         </form>
      </div>
    </div>
</body>
</html>