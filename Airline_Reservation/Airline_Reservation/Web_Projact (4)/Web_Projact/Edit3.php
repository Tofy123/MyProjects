<?php $title="Delete_renting"; ?>
<?php $section="delete"; ?>
<?php include('header.php'); 
include "connection.php";
if(isset($_POST['delete'])){
    $id = $_POST['rentid'];
    $query = "DELETE FROM renting  WHERE ticketId = $id";
    $result = mysqli_query($con, $query);
    if($result){
        header("location: Edit3.php?status=1");
        exit();
    }else{
        header("location: Edit3.php?status=0");
        exit();
    }
    }
    if(isset($_POST['Update'])){
        $id = $_POST['rentid'];
        header("location: updateRenting.php?id=$id");
        exit();
    }

?>
<div class="content">
	<div class="page section">
		
	</div>

<form  method="POST" action="Edit3.php" class="fram_ED">
<h1>Delete renting</h1>
<?php if(isset($_GET['status']) and $_GET['status']==1){ ?>
			<p>renting deleted successfully in the Database</p>
			<?php } else if(isset($_GET['status']) and $_GET['status']==0){?>
			<p>Sorry renting was not deleted</p>
            <?php }else{ ?>
              
              <fieldset class="resrving">
                <table >
                  <tr>
                      <td><label for="type">Ticket ID: </label></td>
            </tr>
                    <tr>
                         <td><input type="text" name="rentid" size="30"/></td>
                    </tr>

               </table>
               </fieldset>
               <input type = "submit"  value="delete" name="delete" class="botton_ED"/>
               <input type = "submit" value="Update" name="Update" class="botton_ED"/>
               <?php } ?>
           </form>

           


	<?php include('footer.php'); ?>