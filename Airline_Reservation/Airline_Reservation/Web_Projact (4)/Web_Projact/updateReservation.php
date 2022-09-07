<?php $title="Update Reservation";
include("header.php") ; 
if(isset($_GET['id'])){

  $id =$_GET['id'];
  include "connection.php";

  $query = "SELECT * FROM hotal WHERE ticketId = $id ";
  $result = mysqli_query($con, $query);

  $row = mysqli_fetch_assoc($result);

}
if(isset($_POST['update'])){
    //Update
    $id = $_POST['reid'];
    $name = $_POST['fname2'];
    $num = $_POST['fnum2'];
    $chkin = $_POST['chkin2'];
    $chkout = $_POST['chkout'];
    $beds = $_POST['beds2'];
    $rooms = $_POST['rooms2'];

   //1. Establish connection with the database
   include "connection.php";
   //2. Prepare query
   $query = "UPDATE hotal SET fname = '$name', fnumber = $num , check_in = '$chkin', check_out = '$chkout', numRoom = $rooms ,numbeds = $beds WHERE ticketId = $id";
   //3. Execute query
   $result = mysqli_query($con, $query);
   //4. Process result
    if($result){
        header("location: updateReservation.php?status=1");
        exit();
    }else{
        header("location: updateReservation.php?status=0");
        exit();
    }
}
?>
                 <!-- CONTENT HTML-->

        <content class="mainContent2">
          <span class = "res_Style"> <h1>Updating Your Hotel Reservation</h1></span>
           
            <div class = "resForm"> 
              <form id = "reUp" name ="reUP" method="POST" action="updateReservation.php">
              <?php if(isset($_GET['status']) and $_GET['status']==1){ ?>
              <p>Item updated successfully in the Database</p>
              <?php }else if(isset($_GET['status']) and $_GET['status']==0){?>
              <p>Sorry Item was not updated</p>
              <?php }else{?>
              <fieldset id = "hotelField">
                <table id ="hotesStyle" cellspacing="17px">
               <tr><td><label for="type">Ticket ID: *</label></td>
               <td><input type="text" name="reid" size="20" value="<?php echo $row['ticketId'] ?>" readonly/></td></tr>
               <tr>
                  <tr>
                  <td><label for="fname2">Full Name</label></td>
                  <td><input type="text" name="fname2"  value="<?php echo $row['fname'] ?>"></td>
                
            </tr>
           
            <tr>
                  <td><label for="fnum2" > Phone Number</label></td>
                   <td><input type="text" name="fnum2" value="<?php echo $row['fnumber'] ?>"></td>
            </tr>
             <tr>
                  <td><label for ="chkin2">Check-in Data</label></td>
                  <td><input type="date"  name="chkin2" min="2021-01-01" max="2021-12-31" class="input_d" value="<?php echo $row['check_in'] ?>"></td>
                </tr>
                <tr>
            <td><label for ="chkout">Check-out Data</label></td>
            <td><input type="date"  name="chkout" min="2022-01-01" max="2022-12-31" class="input_d" value="<?php echo $row['check_out'] ?>"></td>
          </tr>
          <tr>
            <td><label for="beds">Number of Beds</label></td>
            <td><input type="number"  name="beds2"  min="1" max="4" value="<?php echo $row['numRoom'] ?>"></td>
          </tr>
          <tr>
            <td><label for="rooms2">Number of Rooms</label></td>
            <td><input type="number"  name="rooms2"  min="1" max="4" value="<?php echo $row['numbeds'] ?>"></td>
          </tr>
             </table>
              </fieldset>
               <input type ="submit" class = "btnStyle4" value="Update" name="update"/>
               <?php }?>
              </form>
            </div>


   </content>
   <?php include("footer.php")  ?>
  