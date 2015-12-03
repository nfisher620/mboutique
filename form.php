<?php
    if(!isset($_FROM_INDEX) || $_FROM_INDEX===false){
        die('no direct access');
    }
?>

<?php
    if(empty($_POST)){
        ?>
<form action="index.php?page=contact" method="post">
    <input type="text" name="first_name" placeholder="first name">
    <input type="text" name="email" placeholder="email">
    <textarea name="message" placeholder="your message"></textarea>
    <br>
    <button>Submit</button>


</form>
<?php
    }
else
{
    var_dump($_POST);
}

?>


<?php
    if(!empty($_POST)) {
        $name = $_POST['first_name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
    }
else{
    $name='';
    $email='';
    $message='';
}
    ?>
    <form action="index.php?page=contact" method="post">
        <input type="text" name="first_name" placeholder="first name" value="<?=$name;?>">
        <input type="text" name="email" placeholder="email" value="<?=$email;?>">
        <textarea name="message" placeholder="your message"><?=$message;?></textarea>
        <br>
        <button>Submit</button>


    </form>
    <?php

?>
