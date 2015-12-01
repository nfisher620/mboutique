<?php
require_once('config.php');
if(empty($_GET['marray_key']) == true){
  $page = $mArray['welcome']['url'];
}
else{
    if(isset($mArray[$_GET['marray_key']])) {
        $page = $mArray[$_GET['marray_key']]['url'];
    }
    else{
        $page= '404.php';
    }

}
//else if ($mArray[$key]== 'welcome' || $mArray[$key] == 'macarons' || $mArray[$key] == 'gifts' || $mArray[$key]=='contact'){
//        $page =$mArray[$key];
//    }
//    else{
//        $page='404.php';
//    };
//}
//look if the get superglobal key page's value is empty
    //if yes, your $page becomes 'welcome' by default
    //if no
        //does the mArray key for the page exist?
            //if yes, change $page to that url
            //if no, go to 404.php
?>
<!doctype html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
    //print_r($mArray[$_GET['page']]['url']);

?>
<?php include('header.php');?>
<?php include($page);?>
<?php include('footer.php');?>
</body>
</html>