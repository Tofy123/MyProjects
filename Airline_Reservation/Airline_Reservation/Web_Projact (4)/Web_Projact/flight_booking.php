<?php $title="flight booking";
include("header.php") ;

include("connection.php");
$query = "SELECT id FROM flight ORDER BY id desc";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_assoc($result);
$last = $row['id'];

if(empty($last)){
  $flightid=100;
}else{
  $flightid = $last + 1;
}
if(isset($_POST['send'])){
  $id=$_POST['id'];
  $way = $_POST['round'];
  $from = $_POST['from'];
  $to= $_POST['to'];
  $depart = $_POST['depart'];
  $return = $_POST['return'];
  $adult = $_POST['adults'];
  $children =$_POST['children'];
  $infants=$_POST['infants'];
  $cabin=$_POST['cabin'];

include("connection.php");

$query = "INSERT INTO flight SET id= $id ,way = '$way', from_city = '$from' ,to_city ='$to', depart = '$depart', return_date='$return', adults = $adult , children= $children ,infants= $infants, cabin_class='$cabin'";
$result = mysqli_query($con,$query);



if($result){
  
  header("Location:hotelPage.php");
  exit();
}
else{
   header("Location:flight_booking.php");
  exit();
}
}
/*
if(isset($_POST['cancel'])){
  $id = $_GET['id'];
  include("connection.php");

  $query = "DELETE FROM flight WHERE id = $id";
  $result = mysqli_query($con, $query);
  
  if($result){
    echo'<script> alert("Your reservation has been canceled successfully"); </script>';
	header("location: flight_booking.php");
	exit();
 }else{
  echo'<script> alert("Your reservation has not been canceled successfully"); </script>';
	header("location: flight_booking.php");
	exit();
 }
}
*/
?>

                      <!-- CONTENT HTML-->
      <content id="content">
      <h1 id="title">Where Would you like to fly?</h1>
      <form id="flight" class="form3" name="flight" method="POST" action="flight_booking.php">

    <div class="section1">
      <!-- Flight AND Search Section-->
        <fieldset id="firstFieldset" class="fieldset">
        <legend class="legend1"><img src="img/1.png" id="ficon"/>Flight Search</legend>

        <lebel for="id">Ticket ID </lebel>
        <input type="text" name="id" size="30" value="<?php echo $flightid ?>" readonly/>
        <br>
        <input type="radio" onclick="destination()" id="roundTrip" name="round" value="Round" size="30" /> Round trip
          <!-- destination() function for determine the destination if the destination 1-Round Trip OR 2-oneWay -->
        <input type="radio" onclick="destination()" id="oneWay" name="round" value="One" size="30"/> One way
          <!-- Error massage will be visible when the radio is empty-->
        <tr>  <span class="err"><img src="log/warning.png" class="war"> Required </span></tr>
  <!-- Tabel in first Section((fieldset))-->
  <table>
    <tr>
<!-- first row-->
<tr>
<td><label for="from">From:</label></td>
<td><input type="text" name="from" size="30" placeholder="City or airport"autofocus required/></td>
<!-- Error massage will be visible when the text field is empty-->
<td>  <span class="err"><img src="log/warning.png" class="war"> Required </span></td>
</tr>

<!-- second row-->
<tr>
<td><label for="to">To:</label></td>
<td><input type="text" name="to" size="30" placeholder="City or airport" autofocus required/></td>
<!-- Error massage will be visible when the text field is empty-->
<td>  <span class="err"><img src="log/warning.png" class="war"> Required </span></td>
</tr>

<!-- third row-->                        </br></br>
<tr>
<td><label for="depart">Depart date:</label></td>
<td><input type="date" name="depart" size="30"/></td>
<!-- Error massage will be visible when the date field is empty-->
<td>  <span class="err"><img src="log/warning.png" class="war"> Required </span></td>
</tr>
<!-- forth row-->
<tr >
<td><label for="return">Return:</label></td>
<td><span class="delete"><input type="date" name="return" size="30"/></span></td>
<!-- Error massage will be visible when the date field is empty-->
<td>  <span class="err"><img src="log/warning.png" class="war"> Required </span></td>
</tr>

</table>
</fieldset>
</div>

<!-- Passengers Section-->
<div class="section2">
<fieldset id="secondFieldset" class="fieldset">
<legend class="legend1"><img src="img/2.png" id="ficon"/>Passengers</legend>
<!-- Tabel in second Section((fieldset))-->
<table>
  <!-- first row-->
  <tr>
  <td><label id="adults">Adults</label></td>
    <td><input type="number" min="0" name="adults" size="30"/></td>
</tr>
<!-- second row-->
<tr>
<td> <label class="age">Age (12+)</label></td>
<!-- Error massage will be visible when the number field is empty-->
<td>  <span class="err"><img src="log/warning.png" class="war"> Required </span></td>
</tr>
<!-- third row-->
<tr>
<td><label id="children">Children</label></td>
<td><input type="number" min="0" name="children" size="30"/></td>
</tr>
<!-- forth row-->
<tr>
  <td><label class="age">Age (2-11)</label></td>
  <!-- Error massage will be visible when the number field is empty-->
  <td>  <span class="err"><img src="log/warning.png" class="war"> Required </span></td>
</tr>
<!-- forth row-->
<tr>
<td><label id="infants">Infants</label></td>
<td><input type="number" min="0" name="infants" size="30"/></br></td>
</tr>
<!-- fifth row-->
<tr>
  <td><label class="age">Less than 2 years old</label></td>
  <!-- Error massage will be visible when the number field is empty-->
  <td>  <span class="err"><img src="log/warning.png" class="war"> Required </span></td>
</tr>

</table>
</div>
</fieldset>

<div class="section3">
<!-- Cabin class-->
<fieldset id="thirdFieldset" class="fieldset">
  <legend class="legend1"><img src="img/3.png" id="ficon"/>Cabin class</legend>
  <!-- Tabel in third Section((fieldset))-->
  <table>
<!-- first two row-->
  <tr><td><input class="radio" type="radio" name="cabin" value="economy"  size="30"/> Economy <br/><br/></td></tr>

  <!-- second two row-->
  <tr><td><input class="radio" type="radio" name="cabin" value="business" size="30"/>Business  <br/><br/></td></tr>

  <!-- third two row-->
  <tr><td><input class="radio" type="radio" name="cabin" value="firstclass" size="30"/>First class <br/><br/></td></tr>

  <!-- Error massage will be visible when the radio botton is empty-->
  <tr><td><span class="err"><img src="log/warning.png" class="war"> Required </span></td></tr>
</table>
</fieldset>
</br>
</div>
<!-- Botton for send AND reset concepts -->
<table><tr>
<div class="allBotton">
<input class="botton" type="submit" onclick="send()" name="send" value="Send" size="30" />
  <input class="botton" type="reset" value="Cancel"  name= "cancel" size="30"  />
</div>
</tr>
</table>
</form>   
 </content>
<script type="text/javascript" src="js/visible.js"></script>
      <!-- FOOTER HTML-->
      <?php include("footer.php")  ?>

