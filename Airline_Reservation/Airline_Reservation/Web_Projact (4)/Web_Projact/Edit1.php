<?php $title="Delete_booking"; ?>
<?php $section="delete"; ?>
<?php include('header.php'); 
include "connection.php";
if(isset($_POST['delete'])){
$id = $_POST['ticketid'];
$query = "DELETE FROM flight WHERE id = $id";
$result = mysqli_query($con, $query);
if($result){
	header("location: Edit1.php?status=1");
	exit();
}else{
	header("location: Edit1.php?status=0");
	exit();
}
}
if(isset($_POST['Update'])){
  
    $id = $_POST['ticketid'];
    header("location: updateTicket.php?id=$id");
	exit();
}
?>

<form method="POST" action="Edit1.php" class="fram_ED" >
       <h1>Delete booking</h1>
		<?php if(isset($_GET['status']) and $_GET['status']==1){ ?>
			<p>booking deleted successfully in the Database</p>
			<?php } else if(isset($_GET['status']) and $_GET['status']==0){?>
			<p>Sorry booking was not deleted</p>
				<?php }else{ ?>
              
              <fieldset class="resrving">
                <table align="center">
                  <tr><td><label for="type">Ticket ID: </label></td>
                  </tr>
                    <tr>
                  <td><input type="text" name="ticketid" size="30"/></td>
                </tr>

               </table>
               </fieldset>
               <input type = "submit"  value="delete" name="delete" class="botton_ED"/>
               <input type = "submit" value="Update" name="Update" class="botton_ED"/>
               <?php } ?>
           </form>
           

	<?php include('footer.php'); ?>