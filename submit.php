<?php
if(isset($_POST['submit'])){
    $startArr = $_POST['start'];
    $endArr = $_POST['end'];
    $subtitleArr = $_POST['subtitle'];
    if(!empty($subtitleArr)){
        for($i = 0; $i < count($subtitleArr); $i++){
            if(!empty($subtitleArr[$i])){
                
                
               echo $start = $startArr[$i];
               echo "-->";
               echo $end = $endArr[$i];
               echo "<br>";
             echo $subtitle = $subtitleArr[$i];
             echo "<br>";

                
                //database insert query goes here
            }
        }
    }
}
?>