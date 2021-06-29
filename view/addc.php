<?php include "../control/addCdata.php"; ?>
<?php include "../control/validation.php"; ?>
<!DOCTYPE html>
<html>
<body>
<h1>Customers Details Add</h1>
<hr></hr>
<form action="" method="post">

First Name: <input type="text" name="fname"><?php echo $validatename; ?>
<br> 
<br>  
Last Name: <input type="text" name="lname"><?php echo $validatename; ?>
<br>

<p>Gender:
<input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label>
<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label>
<input type="radio" id="other" name="gender" value="other">
<label for="other">Other</label></p>
<?php echo $validateradio; ?>

<br>
Email ID: <input type="text" name="email"> <?php echo $validateemail; ?>
<br>

<br>
Phone: <input type="tel" name="phone"> <?php echo $validatephone; ?>
<br>

<br>
Address: <textarea name="message" rows="5" cols="20"></textarea><?php echo $validateaddress; ?>
<br>

<p>Bank Branch:
<select name="branch">
<option value="mirpur">Mirpur</option>
<option value="uttara">Uttara</option>
<option value="dhanmondhi">Dhanmondhi</option>
<option value="motijheel">Motijheel</option>
<option value="gulsan">Gulsan</option>
</select></p>

<br>
Account No: <input type="text" name="accountno"><?php echo $validateaccount; ?>
<br>

<br>
<input name="submit" type="submit" value="Submit">
<input type="reset" value="Reset">
<?php echo $error; ?>
</form>
</body>
</html>