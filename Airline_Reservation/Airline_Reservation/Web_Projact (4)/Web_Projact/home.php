<?php  $title = "Home Page"; ?>
<?php include("header.php");
    

if(isset($_POST['register'])){

    $name = $_POST['funame'];
    $pass = $_POST['pass'];
    $email= $_POST['Email'];
    $nati = $_POST['nati'];
    $date = $_POST['Dateb'];
    $gender = $_POST['gender'];

include("connection.php");

 /*$query = "INSERT INTO user SET  funame = '$name', pass = '$pass' , email = '$email', nati='$nati', date1 = '$date' , gender= '$gender'";

 $result = mysqli_query($con,$query);
*/
 if(empty($name) or empty($pass) or empty($date ) or empty($gender)){
    header("Location:home.php");
    exit();
 }
 else{
	$query = "INSERT INTO user SET  funame = '$name', pass = '$pass' , email = '$email', nati='$nati', date1 = '$date' , gender= '$gender'";

	$result = mysqli_query($con,$query);
	if($result){
	header("Location:hotelPage.php?true=1");
    exit();
    }
	else{
		header("Location:home.php");
	}
 }
 
 
}
if(isset($_POST['login'])){

    $name = $_POST['funame1'];
    $pass = $_POST['pass1'];
    
include("connection.php");

/* $query = "SELECT * FROM user WHERE funame= '$name'and pass= '$pass';";

 $result = mysqli_query($con,$query);
 $row = mysqli_fetch_assoc($result);
*/
  if(empty($name) or empty($pass)){
	header("Location: home.php");
	exit();
   }else{
	$query = "SELECT * FROM user WHERE funame= '$name'and pass= '$pass';";

	$result = mysqli_query($con,$query);
	$row = mysqli_fetch_assoc($result);
	if($row["funame"]== $name and $row["pass"] == $pass){
		header("Location:hotelPage.php?true=1");
    exit();
	 }
	 else{
		header("Location: home.php?error=1");
		exit();
	 }
   }
   
 
//  echo "your password or username are not correct";
}
 ?>
<!----------------------------main body------------------------------------>
<main id="main">
<!----------------------the left side from main body----------------------->
 <div id="home">
 	<div id="Welcome">
 		<h1>Welcome to Your Flight Airline</h1>
 	</div>
 <div id="paragraph">
 	<p>In Your Flight Airline you can find the best flights' reservation services,<br> as well as the opportunity to book a hotel and rent a car with the price<br> that suits your budget and minimum effort!</p>
 </div>
 </div>
 <!------------------------End of the left side from main body-------------------->
 <!--------------------the right side from main body------------------------------->
 <!------------it is hidden until you click 'login/Register'button----------------->
 <div class="form">
 <!-------------this for the top button To move between login form and Register form------------------>
 	<div class="buttons">
    <div id="btn1"></div>
    <button class="but" onclick="login()">Login</button>
    <button class="but" onclick="reg()">Register</button>
    </div>
 <!------------------END of the top button To move between login form and Register form---------------->
 <!----------------------------login form ------------------------------------->
 <form id="login" class="form2" name="login_form" method="POST" action="home.php">
	<fieldset id="login" >
	<legend class="legend"><img src="log/login2.png" class="icologin">Register/Login </legend>
	<table id="table-margin" cellpadding="10px" cellspacing="10px">
		<tr>
			<?php if(isset($_GET['error']) and $_GET['error'] == 1){?>
			<td colspan="2"><p id="not"><?php echo "your password or username are not correct";?></p></td>
			<?php } ?>
		</tr>
		
		<tr>
		<td><label for="funame1" class="label">Username*:</label></td>
		</tr>
		<tr>
		<td><input type="text" name="funame1" size="30px" class="input"></td>
		<td>
        <span class="err">
        <img src="log/warning.png" class="war">
        This is required
        </span>
        </td> 
	    </tr>
	    <tr>
	    <td><label for="pass1" class="label">Password*:</label></td>
		</tr>
		<tr>
		<td><input type="Password" name="pass1" size="30px" class="input"></td>
		<td>
        <span class="err">
        <img src="log/warning.png" class="war">
        This is required
        </span>
        </td> 
		</tr>
	    <tr>
	    <td colspan="2" align="center"><input type="submit" value="Login" class="but2" name="login" <?php if(empty($name) or empty($pass)){ ?> onclick="validate()" <?php  }?> class="input"/></td>
		</tr>
	    </table>
	</fieldset>
</form>
<!----------------------END of login form------------------------------------->
<!----------------------Register form ------------------------------------------>
<form id="Reg" class="form2" name="Reg_form" method="POST" action="home.php">
	<fieldset id="Reg">
	<legend class="legend"><img src="log/login2.png" class="icologin">Register</legend>
	<table cellpadding="10px" cellspacing="17.5px">
		<tr>
		<td><label for="funame" class="label">Username*:</label></td>
		<td><input type="text" name="funame" class="input"></td>
		<td>
        <span class="err">
        <img src="log/warning.png"class="war">
        This is required
        </span>
        </td> 
		</tr>
		<tr>
		<td><label for="pass" class="label">Password*:</label></td>
		<td><input type="password" name="pass" class="input"></td>
		<td>
        <span class="err">
        <img src="log/warning.png"class="war">
        This is required
        </span>
        </td> 
		</tr>
		<tr>
		<td><label for="Email" class="label">Email:</label></td>
		<td colspan="2"><input type="email" name="Email" class="input"></td>
		</tr>
		<tr>
		<td><label for="nati" class="label">Nationality:</label></td>
		<td colspan="2"><input type="text" name="nati" class="input"></td>
		</tr>
		<tr>
		<td><label for="Dateb" class="label">Birth Date*:</label></td>
		<td><input type="date" name="Dateb" class="input"></td>
		<td>
        <span class="err">
        <img src="log/warning.png"class="war">
        This is required
        </span>
        </td> 
		</tr>
	    <tr>
		<td><label for="gender" class="label">Gender*:</label></td>
		<td>
		<input type="radio" name="gender" value="male" class="input"> Male
	    <input type="radio" name="gender" value="female" class="input">Female
		</td>
		<td>
        <span class="err">
        <img src="log/warning.png" class="war">
        This is required
        </span>
        </td> 
	    </tr>
		<tr>
		<td colspan="3" align="center"><input type="submit" value="Register" name="register" <?php if(empty($name) or empty($pass) or empty($date ) or empty($gender)){?> onclick="validate2()" <?php }?> class="but2" class="input" ></td>
		</tr>
	</table>
	</fieldset>
</form>
<!-------------------------END of Register form ------------------------------------------>
</div>	
<!----------------------END of the right side from main body------------------------------>
</main>
<!---------------------------END of the main body-------------------------------->
<script src="js/valid.js"></script>
<!---------------------------Footer----------------------------------------------->
<?php include("footer.php")  ?>
