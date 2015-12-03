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
<?php
var_dump($_POST);

if(!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone=$_POST['phone'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
}
else{
    $name='';
    $email='';
    $phone='';
    $subject='';
    $message='';
}
?>
<form action = "index.php?marray_key=contact" method="post">
    <input type="text" name="name" placeholder="Name" value="<?=$name;?>">
    <input type="text" name="email" placeholder="Email" value="<?=$email;?>">
    <input type="text" name="phone" placeholder="Phone" value="<?=$phone;?>">
    <input type="text" name="subject" placeholder="Subject" value="<?=$subject;?>">
    <textarea name="message" placeholder="Message"><?=$message;?></textarea>
    <input type="submit" name="contactinfo" value="Send">
</form>
<div id="contact">
    <div id="contactmacs">
        <img src="assets/images/macarons-image.png" id="contactsimg">
    </div>
</div>
</body>
