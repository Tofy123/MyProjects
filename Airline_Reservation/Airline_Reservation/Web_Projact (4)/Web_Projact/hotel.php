<?php $title="Hotel Page";
include("header.php");
 
 if(isset($_POST['submit'])){

  $tkid = $_POST['ticket_id'];
  $fname = $_POST['fname'];
  $fnum = $_POST['fnum'];
  $chkin = $_POST['chkin'];
  $chkout = $_POST['chkout'];
  $beds = $_POST['beds'];
  $rooms = $_POST['rooms'];

  include("connection.php");

  $query = "INSERT INTO hotal SET  ticketId= $tkid, fname = '$fname', fnumber = $fnum , check_in = '$chkin', check_out = '$chkout', numRoom = $rooms ,numbeds = $beds";
  
  $result = mysqli_query($con,$query);
  
  if($result){
    header("Location:hotelPage.php");
    exit();
  }
  else{
     header("Location:hotel.php");
    exit();
  }
  }
   
 ?>
      <div class=reg_d align="center">
        <h1>  reserve a Hotel  </h1>
     
      <form  name="Reserve" method="POST" action="hotel.php">

          <fieldset style="padding-top:10px" class="fieldset_d">
            <legend>Personalia information: <img  src="log/hotel.png" id="hotel_d" ></legend>
            <table id="table_d" cellpadding="10px" cellspacing="20px" >
             <main>
               <tr>
               <td><label for="ticket_id">Ticket ID*</label></td>
                  <td><input type="text" name="ticket_id" class="input_d"></td>
                  <td> <span class="error_d">This is required</span></td>
               </tr>
              <tr>
                  <td><label for="fname">Full Name*</label></td>
                  <td><input type="text" name="fname" class="input_d"></td>
                  <td> <span class="error_d">This is required</span></td>
            </tr>
            <br>
            <tr>
                  <td><label for="fnum" > Phone Number*</label></td>
                   <td><input type="text" name="fnum" class="input_d"></td>
                  <td> <span class="error_d">This is required</span></td>
            </tr>
            <br>
            </fieldset>
                        
            <tr>
                  <td><label for ="chkin">Check-in Data*</label></td>
                  <td><input type="date"  name="chkin" value="2021-07-22" min="2021-01-01" max="2021-12-31" class="input_d"></td>
                  <td> <span class="error_d">This is required</span></td>
            </tr>
            <br>
            <tr>
            <td><label for ="chkout">Check-out Data*</label></td>
            <td><input type="date"  name="chkout" value="2022-07-22" min="2022-01-01" max="2022-12-31" class="input_d"></td>
            <td> <span class="error_d">This is required</span></td>
           </tr> 
           <br>

           <tr>
            <td><label for="beds">Number of Beds*</label></td>
            <td><input type="number"  name="beds" value="1" min="1" max="4" class="input_d"></td>
            <td> <span class="error_d">This is required</span></td>
          </tr>
          <br>

          <tr>
            <td><label for="rooms">Number of Rooms*</label></td>
            <td><input type="number"  name="rooms" value = "1" min="1" max="4" class="input_d"></td>
            <td> <span class="error_d">This is required</span></td>
          </tr>
          <br>
      </table>
        <input type="submit" value="Submit" size="50px" name="submit" onclick="validate_d()" class="inputBUT_d">
        <input  type="reset"  value="cancel" size="10px" class="inputBUT_d">
      </form>
</div>
<script type="text/javascript"  src="js/script.js"></script>
<?php include("footer.php")  ?>
