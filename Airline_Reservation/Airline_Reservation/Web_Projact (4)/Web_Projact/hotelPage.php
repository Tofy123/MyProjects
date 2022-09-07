<?php $title="Search Page";
include("header.php"); 

if(isset($_POST['edit1'])){
  header("Location:Edit1.php");
  exit();
}
if(isset($_POST['edit2'])){
  header("Location:Edit2.php");
  exit();
}
if(isset($_POST['edit3'])){
  header("Location:Edit3.php");
  exit();
}

?>
        <div id="content1">
          <div id="top">
            <form method="POST" action="hotelPage.php">
            <div class="dispL">
              <img src="log/flight.png" id="flights" width="50" height="50" />
              <br>
              <a href="flight_booking.php<?php if(isset($_GET['true'])){?>?true=1<?php } ?>" class="a">Flights</a>
              <br>
              <input class="botton_ED" type="submit" value="Edit"  name= "edit1" size="30"  class="button_allg"/>
            </div>
            
      
            <div class="dispM">
              <img src="log/Hotel1.png" id="hotels" width="50" height="50" />
              <br>
              <a href="hotel.php<?php if(isset($_GET['true'])){?>?true=1<?php } ?>" class="a">Hotels</a>
              <br>
              <input class="botton_ED" type="submit" value="Edit"  name= "edit2" size="30"  class="button_allg"/>
            </div>
            

            <div class="dispR">
              <img src="log/car.png" id="cars" width="50" height="50" />
              <br>
              <a href="RentingCar.php<?php if(isset($_GET['true'])){?>?true=1<?php } ?>" class="a">Car Rent</a>
              <br>
              <input class="botton_ED" type="submit" value="Edit"  name= "edit3" size="30"  class="button_allg"/>
            </div>
            

            </form>
        </div>
      
        <form id="mid">
          <fieldset class="fieldset_a">
            <h2>International Flight</h2>
          </fieldset>
        </form>
      
        <!---- latifah and fatimah --->
      <div class="slider">
        <div class="slides">
          <input type="radio" name="radio-but" id="radio1">
          <input type="radio" name="radio-but" id="radio2">
          <input type="radio" name="radio-but" id="radio3">
          <input type="radio" name="radio-but" id="radio4">
          <input type="radio" name="radio-but" id="radio5">
          <input type="radio" name="radio-but" id="radio6">
          <input type="radio" name="radio-but" id="radio7">
          <!-------------------------------------------->
          <div class="slide first">
            <img src="log/itay.jpeg" >
          </div>
          <div class="slide">
            <img src="log/london.jpeg">
          </div>
          <div class="slide">
            <img src="log/un.jpeg">
          </div>
          <div class="slide">
            <img src="log/maldives.jpeg">
          </div>
          <div class="slide">
            <img src="log/newyo.jpeg">
          </div>
          <div class="slide">
            <img src="log/par.jpeg">
          </div>
          <div class="slide">
            <img src="log/sbain.jpeg">
          </div>
          <!----------------------->
          <div class="navigation-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
            <div class="auto-btn4"></div>
            <div class="auto-btn5"></div>
            <div class="auto-btn6"></div>
            <div class="auto-btn7"></div>
          </div>
        </div>
        <div class="navigation-manual">
          <label for="radio1" class="manual-btn"></label>
          <label for="radio2" class="manual-btn"></label>
          <label for="radio3" class="manual-btn"></label>
          <label for="radio4" class="manual-btn"></label>
          <label for="radio5" class="manual-btn"></label>
          <label for="radio6" class="manual-btn"></label>
          <label for="radio7" class="manual-btn"></label>
        </div>
        
      </div>
      <!---- END latifah and fatimah --->
        <br/>      
        <br/>
        <form id="bottom">
          <fieldset  class="fieldset_a">
            <h2>Local Flight</h2>
          </fieldset>
        </form>
      <!----  latifah and fatimah --->
        <div class="slider2">
        <div class="slides2">
          <input type="radio" name="radio-but2" id="radio12">
          <input type="radio" name="radio-but2" id="radio22">
          <input type="radio" name="radio-but2" id="radio32">
          <input type="radio" name="radio-but2" id="radio42">
          <input type="radio" name="radio-but2" id="radio52">
          <input type="radio" name="radio-but2" id="radio62">
          <input type="radio" name="radio-but2" id="radio72">
          <!-------------------------------------------->
          <div class="slide2 first2">
            <img src="log/mac.jpeg" >
          </div>
          <div class="slide2">
            <img src="log/alhasa.jpeg">
          </div>
          <div class="slide2">
            <img src="log/gdh.jpeg">
          </div>
          <div class="slide2">
            <img src="log/kobar.jpeg">
          </div>
          <div class="slide2">
            <img src="log/taif.jpeg">
          </div>
          <div class="slide2">
            <img src="log/riyghd.jpeg">
          </div>
          <div class="slide2">
            <img src="log/abha.jpeg">
          </div>
          <!----------------------->
          <div class="navigation-auto2">
            <div class="auto-btn12"></div>
            <div class="auto-btn22"></div>
            <div class="auto-btn32"></div>
            <div class="auto-btn42"></div>
            <div class="auto-btn52"></div>
            <div class="auto-btn62"></div>
            <div class="auto-btn72"></div>
          </div>
        </div>
        <div class="navigation-manual2">
          <label for="radio12" class="manual-btn2"></label>
          <label for="radio22" class="manual-btn2"></label>
          <label for="radio32" class="manual-btn2"></label>
          <label for="radio42" class="manual-btn2"></label>
          <label for="radio52" class="manual-btn2"></label>
          <label for="radio62" class="manual-btn2"></label>
          <label for="radio72" class="manual-btn2"></label>
        </div>
      </div>

    </div>
  <script type="text/javascript" src="js/validation.js"></script>
<?php include("footer.php")  ?>

      