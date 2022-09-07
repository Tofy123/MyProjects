<?php $title="Update Ticket";
include("header.php") ; 
if(isset($_GET['id'])){

  $id =$_GET['id'];
  include "connection.php";

  $query = "SELECT * FROM flight WHERE id = $id ";

  $result = mysqli_query($con, $query);

  $row = mysqli_fetch_assoc($result);

}
if(isset($_POST['update'])){
    //Update
    $id = $_POST['ticketid'];
    $way = $_POST['round'];
    $from = $_POST['from2'];
    $to= $_POST['to'];
    $depart = $_POST['depart'];
    $return = $_POST['return2'];
    $adult = $_POST['adults'];
    $children =$_POST['children'];
    $infants=$_POST['infants'];
    $cabin=$_POST['cabin2'];

   //1. Establish connection with the database
   include "connection.php";
   //2. Prepare query
   $query = "UPDATE flight SET way = '$way', from_city = '$from' ,to_city ='$to', depart = '$depart', return_date='$return', adults = $adult , children= $children ,infants= $infants, cabin_class='$cabin' WHERE id = $id";
   //3. Execute query
   $result = mysqli_query($con, $query);

   //4. Process result
    if($result){
        header("location: updateTicket.php?status=1");
        exit();
    }else{
        header("location: updateTicket.php?status=0");
        exit();
    }
}
?>
                 <!-- CONTENT HTML-->

        <content class="mainContent">

          <span class = "tic_Style"> <h1>Updating Your Flight Ticket</h1></span>
           
            <div class = "ticketForm"> 
              <form id = "tiUp" name ="tiUP"  method="POST" action="updateTicket.php">
              <?php if(isset($_GET['status']) and $_GET['status']==1){ ?>
              <p>Item updated successfully in the Database</p>
              <?php }else if(isset($_GET['status']) and $_GET['status']==0){?>
              <p>Sorry Item was not updated</p>
              <?php }else{ ?>
              
              <fieldset id = "ticketField">
                <table id ="ticketStyle" cellpadding="2px" cellspacing="15px">
                  <tr><td><label for="type">Ticket ID: *</label></td></tr>
               <tr><td><input type="text" name="ticketid" size="30" value="<?php echo $row['id'] ?>" readonly/></td></tr>
               <tr>
                 
              <td> <input type="radio" onclick="destination()" id="roundTrip" name="round" value="Round" <?php if(isset($_GET['id']) and $row['way']=="Round"){ ?> checked <?php } ?> size="30" /> Round trip</td>
         
              <td><input type="radio" onclick="destination()" id="oneWay" name="round" value="One" <?php if(isset($_GET['id']) and $row['way']=="One"){ ?>checked <?php } ?> size="30"/> One way</td>
             <tr>
<td><label for="from2">From:</label></td>
<td><input type="text" name="from2" size="30" value="<?php echo $row['from_city'] ?>" placeholder="City or airport" autofocus required/></td>
<!-- second row-->
<tr>
<td><label for="to">To:</label></td>
<td><input type="text" name="to" size="30" value="<?php echo $row['to_city'] ?>" placeholder="City or airport" autofocus required/></td>
</tr>

<!-- third row-->                        </br></br>
<tr>
<td><label for="depart">Depart date:</label></td>
<td><input type="date" name="depart" size="30" value="<?php echo $row['depart'] ?>"/></td>

</tr>
<!-- forth row-->
<tr >
<td><label for="return2">Return:</label></td>
<td><span class="delete"><input type="date" name="return2" size="30" value="<?php echo $row['return_date'] ?>"/></span></td>
</tr>
<tr>
  <td><label id="adults">Adults</label></td>
    <td><input type="number" min="0" name="adults" size="30" value="<?php echo $row['adults']?>"/></td>
</tr>
<!-- second row-->
<tr>
<td><label id="children">Children</label></td>
<td><input type="number" min="0" name="children" size="30" value="<?php echo $row['children'] ?>"/></td>
</tr>
<!-- third row-->
<tr>
<td><label id="infants">Infants</label></td>
<td><input type="number" min="0" name="infants" size="30" value="<?php echo $row['infants'] ?>"/></br></td>
</tr>
<!-- Cabin class-->
<!-- first two row-->
  <tr><td><input class="radio" type="radio" name="cabin2" value="economy" size="30" <?php if(isset($_GET['id']) and $row['cabin_class']=="economy"){ ?> checked <?php } ?> /> Economy <br/><br/></td>

  <!-- second two row-->
  <td><input class="radio" type="radio" name="cabin2" value="business" <?php if(isset($_GET['id']) and $row['cabin_class']=="business"){ ?> checked <?php } ?> size="30"/>Business  <br/><br/></td>

  <!-- third two row-->
  <td><input class="radio" type="radio" name="cabin2" value="firstclass" <?php if(isset($_GET['id']) and $row['cabin_class']=="firstclass"){ ?> checked <?php } ?> size="30"/>First class <br/><br/></td></tr>
</tr>
                </table>
              </fieldset>
               <input type = "submit" class = "btnStyle3" value="Update" name="update"/>
               <?php } ?>
              </form>
            </div>


   </content>
   <?php include("footer.php")  ?>