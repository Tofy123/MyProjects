<?php $title="Update Renting";
include("header.php") ; 
if(isset($_GET['id'])){

  $id =$_GET['id'];
  include "connection.php";

  $query = "SELECT * FROM renting WHERE ticketId = $id ";

  $result = mysqli_query($con, $query);

  $row = mysqli_fetch_assoc($result);

}
if(isset($_POST['update'])){
    //Update
    $tkid = $_POST['rentid'];
    $loc= $_POST['location'];
    $locD = $_POST['drop'];
    $piD = $_POST['PickUp'];
    $droD = $_POST['returnDate'];
    $piT= $_POST['pickTime'];
    $droT = $_POST['returnTime'];
    $veh = $_POST['Vehicle'];

   //1. Establish connection with the database
   include "connection.php";
   //2. Prepare query
   $query = "UPDATE renting SET loc = '$loc', locD = '$locD', piD = '$piD',droD='$droD',piT= '$piT',droT='$droT',veh ='$veh' WHERE ticketId= $tkid";
   //3. Execute query
   $result = mysqli_query($con, $query);

   //4. Process result
    if($result){
        header("location: updateRenting.php?status=1");
        exit();
    }else{
        header("location: updateRenting.php?status=0");
        exit();
    }
}
?>
   <!-- CONTENT HTML-->

        <content class="mainContent_">
           <span class = "ren_Style"> <h1>Updating Your Car Renting</h1></span>
           
            <div class = "rent_form"> 
              <form id = "teUp" name ="reUP" method="POST" action="updateRenting.php" >
              <?php if(isset($_GET['status']) and $_GET['status']==1){ ?>
              <p>Item updated successfully in the Database</p>
              <?php }else if(isset($_GET['status']) and $_GET['status']==0){?>
              <p>Sorry Item was not updated</p>
              <?php }else{ ?>
              
              <fieldset id = "rent_Field">
                <table id ="rent_Style" cellpadding="2px" cellspacing="17px">
<tr><td><label for="type">Ticket ID: *</label></td></tr>
               <tr><td><input type="text" name="rentid" size="30" value="<?php echo $row['ticketId'] ?>"/></td></tr>
               <tr><td><label for="type">Pick Up Location: *</label></td></tr>

      <tr><td><input type="text" name="location" size="30" placeholder= "city, airport, station .." value="<?php echo $row['loc'] ?>" /></td>
        <tr><td><input type="checkbox" id="checkLocation" onclick="displayFunction()"/> Drop car off at different location</td></tr>
      <td><input type="text" style="display:none"name = "drop" id="drop" size="30" placeholder= "city, airport, station .." value="<?php echo $row['locD'] ?>" /></td>
      <tr>
  <td><label for="pick">Pick-Up Date*</label></td>
  <td><label for="drop">Drop-off Date*</label></td>
</tr>

<tr>
  <td><input type="date" name="PickUp" value="<?php echo $row['piD'] ?>" ></td>
    <td><input type="date" name="returnDate" value="<?php echo $row['droD'] ?>" ></td>
    
</tr>
<tr>
  <td><label for="pick">Pick-Up Time</label></td>
  <td><label for="return">Drop-off Time</label></td>
</tr>
<tr>
  <td><input type="time"  name="pickTime" value="<?php echo $row['piT'] ?>" >
    <td><input type="time"  name="returnTime" value="<?php echo $row['droT'] ?>" >
</tr>
<tr><td><label for="cars" name ="Vehicle">Select Vehicle: </label></td></tr>
<td><span class ="text2"><input type="radio" name="Vehicle"  value="Standred" <?php if(isset($_GET['id']) and $row['veh']=="Standred"){ ?> checked <?php } ?>>Standred</td> 
<td><input type="radio" name="Vehicle"  value="Luxury" <?php if(isset($_GET['id']) and $row['veh']=="Luxury"){ ?> checked <?php } ?> >Luxury</td>
<td><input type="radio" name="Vehicle"  value="Van" <?php if(isset($_GET['id']) and $row['veh']=="Van"){ ?> checked <?php } ?> >Van</span></td></tr>


          </table>
              </fieldset>
               <input type = "submit" class = "btnStyle2" value="Update" name="update"/>
               <?php } ?>
              </form>
            </div>


   </content>
      <!-- FOOTER HTML-->
      <?php include("footer.php")  ?>

<script type="text/javascript">
  function displayFunction() {
  var checkBox = document.getElementById("checkLocation");
  var text = document.getElementById("drop");
  if (checkBox.checked == true){
    drop.style.display = "block";
  } else {
     drop.style.display = "none";
  }
}
</script>