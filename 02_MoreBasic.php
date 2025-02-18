<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP More Basics</title>
    <style>
        *{
            margin: 0%;
            padding: 0%
            /* box-sizing: boder-box; */
        }
        .container{
            max-width:80;
            background-color:grey;
            margin: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Your Party Status is Here: </h1>
        <?php
        $age = 7;
        if($age>18){
            echo "You Can Go To The Party!!";
        }
        elseif ($age == 7){
            echo  "You are seven Year old!!";
        }
        elseif ($age == 6){
            echo  "You are six Year old!!";
        }
        else{
            echo "You Can not Go To The Party!!";
        }

        ?>

        <!-- Arrays in PHP -->

        <?php
        echo "<br>";
        $launguages = array("Python", "PHP", "C", "C++");
        echo count($launguages);echo "<br>";
        echo $launguages[0];echo "<br>";
        echo $launguages[1];echo "<br>";
        echo $launguages[2];echo "<br>";

        ?>

        <!-- Loops in PHP -->

        <?php
        $a = 0;
         while ($a <= 10) {
            echo "<br>The value of a is: ";
            echo $a;
            $a++;
         }

         // Itterating arrary in PHP using while loop
        $a = 0;
         while ($a < count($launguages)) {
            echo "<br>The value of languages is: ";
            echo $launguages[$a];
            $a++;
         }

        ?>


        <!-- Do While Loop in PHP -->
        <?php
        $a = 0;
        do {
            echo "<br>The value of a is: ";
            echo $a;
            $a++;
        }while ($a <= 10);

        // For Loop in PHP

        for ($a = 0; $a <= 10; $a++){
            echo "<br>The Value of a is: ", $a;
        }

        // For Each loop in PHP

        foreach ($launguages as $values) {
            echo "<br>Tha Value of a from for each loop is: ", $values;
        }


        // Functions in PHP

        function print5(){
            echo "<br>Five";
        }
        print5();
        print5();
        print5();

        function print_number($number){
            echo "<br>Your Number is: ";
            echo $number;
        }
        print_number(90);
        print_number(56);
        print_number(23);
        ?>
    </div>
</body>
</html>