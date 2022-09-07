<?php $title="Contact Page";
include("header.php") ;
?>
           <div id="contact2">
           	<div class="container">
                <div class="pic">
            <img src="assets/airplane0.jpg">    
            </div>

                <div class="contactForm">
                    <form>
                        <h2>CONTACT US</h2>
                        <div class="inputBox">
                            <input type="text" placeholder="Full Name*" name="FName" class="fname">
                            <span class="err"><img src="log/warning.png" class="war"> Required </span>
                        </div>
                        <div class="inputBox">
                            <input type="text" placeholder="Email*" name="mail" class="email">
                            <span class="err"><img src="log/warning.png" class="war"> Required </span>
                        </div>
                        <div class="inputBox">
                            <textarea placeholder="Type Your Message*" name="msg" class="message"></textarea>
                            <span class="err"><img src="log/warning.png" class="war"> Required </span>
                        </div>
                        <div class="inputBox">
                            <input type="submit" value="Send" onclick="send()" >
                        </div>
                    </form>
                </div>
            </div>
           </div>
            
 <script type="text/javascript" src="js/validation1.js"></script>
 <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"></script>
<script type="text/javascript">
(function() {
emailjs.init("user_eec4p9aY3DBCmGUomft0r");
})();
</script>

            <?php include("footer.php")  ?>
           
    