<?php

    $str = "This";
    echo $str. "<br>";
    $lenn = strlen($str);
    echo "The Lenth is ". $lenn . ". Thank You!!";
    echo "<br>The Number of words in this string is: ". str_word_count($str);
    echo "<br>The Number of words in this string is: ". strrev($str);
    echo "<br>The search for is in this string is: ". strpos($str, "is");
    echo "<br>The replace for is in this string is: ". str_replace("is", "at", $str);
    


?>