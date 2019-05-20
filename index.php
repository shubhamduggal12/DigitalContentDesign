<?php
    $images = glob("*.jpg");
    
    foreach($images as $image) {
        echo '<img src="'.$image.'" /><br />';
    }
    
    ?>
    
