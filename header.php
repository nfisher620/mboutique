<ul id="nav">
    <li><img src="assets/images/logo.png"></li>

    <ul>
        <?php

        foreach ($mArray as $key=>$values) {
           // print_r($key);
            ?>
            <li><a href="index.php?marray_key=<?=$key;?>"><?=$values['text'];?></a></li>
            <?php
        }
        ?>
    </ul>
</ul>

