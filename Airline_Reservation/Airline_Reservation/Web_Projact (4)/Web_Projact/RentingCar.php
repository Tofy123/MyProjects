<?php $title="Renting Car";
include("header.php");

if(isset($_POST['rent'])){
    //Insert
    $tkid = $_POST['ticket_id'];
    $loc= $_POST['location'];
    $locD = $_POST['drop'];
    $piD = $_POST['PickUp'];
    $droD = $_POST['returnDate'];
    $piT= $_POST['pickTime'];
    $droT = $_POST['returnTime'];
    $veh = $_POST['Vehicle'];

   //1. Establish connection with the database
   include("connection.php");
   //2. Prepare query
   $query = "INSERT INTO renting SET ticketId= $tkid, loc = '$loc', locD = '$locD', piD = '$piD',droD='$droD',piT= '$piT',droT='$droT',veh ='$veh' ";
   //3. Execute query
   $result = mysqli_query($con, $query);
   //4. Process result
    if($result){
        header("location:hotelPage.php");
        exit();
    }else{
        header("location: RentingCar.php");
        exit();
    }
}
?>

<main id="main_a"> 

	 <span class = "hStyle"><h1>Fast and Easy Way to Rent Your Car</h1></span>
              <div class = "carForm"> 
            <form id = "rent" name ="rent" method="POST" action="RentingCar.php">

	<fieldset id = "carField">
		<legend><img class = "rentIcon" src= "assets/car-key.ico"> Rental Details</legend>

	<table id ="tableStyle">
        <tr><td><label for="ticket_id">Ticket ID *</label></td></tr>
        <tr><td><input type="text" name="ticket_id" size="30" placeholder= "Add your Ticket ID"/></td>
        <td><span class = "errorMsg"><img src="log/warning.png" class="warImg">This is Required</span></td></tr>
		                                <!--icon beside the label-->
	       <tr><td><label for="type"><img class = "smallIcon" src= "assets/fly.png">Pick Up Location: *</label></td></tr>

      <tr><td><input type="text" name="location" size="30" placeholder= "city, airport, station .." /></td>

    <td>  <span class = "errorMsg"><img src="log/warning.png" class="warImg">This is Required</span></td>
                                 <!--this part will be displayed when the checkbox is checked-->
     <tr><td><input type="checkbox" id="checkLocation" onclick="displayFunction()"/> Drop car off at different location</td></tr>
     	<td><input type="text" style="display:none"name = "drop" id="drop" size="30" placeholder= "city, airport, station .." /></td>

<tr>
	<td><label for="pick">Pick-Up Date*</label></td>
	<td><label for="drop">Drop-off Date*</label></td>
</tr>

<tr>
	<td><input type="date" name="PickUp" ></td>
		<td><input type="date" name="returnDate"></td>
		
</tr>
<tr>
	<td><label for="pick">Pick-Up Time</label></td>
	<td><label for="return">Drop-off Time</label></td>
</tr>
<tr>
	<td><input type="time"  name="returnTime" >
		<td><input type="time"  name="pickTime" >
</tr>
<tr><td><label for="cars">Select Vehicle: </label></td></tr>

                               <!---------Displaying the car pictures and information--------->
   <tr>
            <div class = "carImage">   
       <td>  <ul class="list_AS">
        <li><a href="#"><img class = "carImage" src="assets/Standerd.jpg" ></a></li></td>
            <td><span class = "text"><input type="radio" name="Vehicle" class="checkbox" value="Standred">Standred
                <p >Chevorolet Camaro</p>
                    </span></td>
                 <ul><span class = "innerList">
                 	<td>
                    <p>Additional details:</lp>
                      <li>Automatic </li>
                     <li>Air conditioning</li>
                 
               </ul>
                     <p> Price = 58$</p></td></span>
   </ul>   
        </td>
    </div>
     </tr>
     <tr>
     	<!--divisors to speareat each car section from the other-->
     <td><hr class = "dividers"></td>
    </tr>
        <tr>
            <div class = "carImage">
                <td><ul class="list_AS">
                <li><a href="#"><img class = "carImage" src="assets/Luxury.jpg" ></a></li></td>
            <td><span class = "text"><input type="radio" name="Vehicle" class="checkbox" value="Luxury">Luxury
                <p >Mercedes-Benz</p>
                    </span></td>
                 <ul><span class = "innerList">
                 	<td>
                    <p>Additional details:</p>
                      <li>Automatic </li>
                     <li>Unlimited mileage</li>
                     </ul>
                     <p> Price = 288$</p></td></span>
          </ul> 
        </td>
    </div>
     </tr>
     <tr>
     <td><hr class = "dividers"></td>
    </tr>
        <tr>
            <div class = "carImage">
                <td>
        <ul class="list_AS">
        <li><a href="#"><img class = "carImage" src="assets/Van.jpg" ></a></li></td>
            <td><span class = "text"><input type="radio" name="Vehicle" class="checkbox" value="Van">Van
                <p >Kia Sendona</p>
                    </span></td>
                 <ul><span class = "innerList">
                 	<td>
                    <p>Additional details:</p>
                      <li>Automatic </li>
                     <li>First 2400 miles free</li>
                     </ul>

                     <p>Price = 170$</p></td></span>
   </ul> 
        </td>
    </div>
     </tr>
    
     </table>

     </fieldset>
     <input type = "submit" class = "btnStyle"  onclick="validate()" value="Submit" name="rent" />
      <input type = "reset" class = "btnStyle" value="Clear"  />
    </form>
   
<!-- -->
</tr>
</div>
</main>



<?php include("footer.php");?>
<script type="text/javascript" src = "js/car.js" ></script>
