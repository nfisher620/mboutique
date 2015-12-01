<?php
    if(empty(($_POST['form']){
        $page=$mArray['welcome']['url'];
    }
    else{

    }
?>

<body>
<div class="mediaquery">
    <img src="assets/images/contact-image.png" id="map">
</div>
<div id="informationcontact">
    <h1 class="contactheader">Visit Us!</h1>
    <p>Monday-Friday | 10am - 9pm</p>
    <p>Saturday | 10am - 8pm</p>
    <p>Sunday | 11am - 7pm</p>
    <p>Closed Thanksgiving Day, Christmas Day and Easter Day</p>
    <p>1625 Post St</p>
    <p>San Francisco, CA 94115</p>
    <p>949.800-3111</p>
    <p><span>order@mboutique.com</span></p>
    <p>Send your questions, comments, and flavor suggestions or place an order!</p>
</div>
<h1 class="contactheader">Contact Form</h1>
<form action = "index.php" method="post">
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="email" placeholder="Email">
    <input type="text" name="phone" placeholder="Phone">
    <input type="text" name="Subject" placeholder="Subject">
    <textarea placeholder="Message"></textarea>
    <input type="submit" name="contactinfo" value="Send">
</form>
<div id="contact">
    <div id="contactmacs">
        <img src="assets/images/macarons-image.png" id="contactsimg">
    </div>
</div>
</div>
</body>
