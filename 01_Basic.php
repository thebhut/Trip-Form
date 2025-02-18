<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class="container">This is my first PHP Website!!
        <?php
        define ('PI', 3.14);
            echo "This is my first website using PHP";
            // single line comment
            /* Multi line Comment
            this all about
            PHP */

            // Variable in PHP
            $variable1 = 5;
            $variable2 = 2;
            echo $variable1;
            echo $variable2;

            echo $variable1 + $variable2; 
            echo "<br>" ;

            // Operators in PHP
            //Arithmetic Operator
            echo "The value of Variable1 + variable2 is: ";
            echo $variable1 + $variable2;
            echo "<br>";
            echo "The value of Variable1 - variable2 is: ";
            echo $variable1 - $variable2;
            echo "<br>";
            echo "The value of Variable1 * variable2 is: ";
            echo $variable1 * $variable2;
            echo "<br>";
            echo "The value of Variable1 / variable2 is: ";
            echo $variable1 / $variable2;
            echo "<br>";
            // Assinment Operator

            $newvar = $variable1;
            $newvar += 1;
            // $newvar -= 1;
            // $newvar *= 1;
            // $newvar /= 1;
            echo "The value of new variable is ";
            echo $newvar;
            echo "<br>";
            // Comarison Operator
            // echo "<h1>Comparison Operator</h1>"
            
            echo "The value of 1 == 4 is ";
            echo var_dump(1==4);
            echo "<br>";
            echo "The value of 1 == 4 is ";
            echo var_dump(1!=4);
            echo "<br>";
            echo "The value of 1 == 4 is ";
            echo var_dump(1>4);
            echo "<br>";
            echo "The value of 1 == 4 is ";
            echo var_dump(1>=4);
            echo "<br>";
            echo "The value of 1 == 4 is ";
            echo var_dump(1<4);
            echo "<br>";
            echo "The value of 1 == 4 is ";
            echo var_dump(1<=4);

            // Increment/Decrement Operator
            echo "<br>";
            // echo $variable1++, " ";
            // echo $variable1;
            // echo "<br>";
            // echo $variable1--, " ";
            // echo $variable1;
            // echo "<br>";
            // echo ++$variable1, " ";
            // echo $variable1;
            // echo "<br>";
            echo --$variable1, " ";
            echo $variable1;
            echo "<br>"; 

            // Logical Oprators

            // $myvar = (true) && (true);
            // $myvar = (true) && (false);
            // $myvar = (false) && (true);
            // $myvar = (false) and (false);
            // echo var_dump($myvar);
            // echo "<br/>"

            // $myvar = (true) or (true);
            // $myvar = (true) or (false);
            // $myvar = (false) or (true);
            // $myvar = (false) || (false);
            // echo var_dump($myvar);
            // echo "<br/>"

            // $myvar = (true) XOR (true); //True
            // $myvar = (true) XOR (false); //True
            // $myvar = (false) XOR (true); //False
            $myvar = (false) XOR (false); //False
            echo var_dump($myvar);
            echo "<br/>";

            // Data Type in PHP

            // 1) String
            echo "<br/>Data Type: <br>";
            $var = "This is a String";
            echo var_dump($var);
            echo "<br/>";

            $var = 34;
            echo var_dump($var);
            echo "<br/>";

            $var = 34.1;
            echo var_dump($var);
            echo "<br/>";

            $var = true;
            echo var_dump($var);
            echo "<br/>";
            echo PI;
        ?>
    </div>
</body>
</html>