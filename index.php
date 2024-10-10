<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops(PHP)</title>
<body>   
    <h1>Activity 1</h1>
    <h2>1. </h2>
    <?php
     $a = 1;
     while($a <= 10 ){
        echo $a . " ";
        $a++;
     }
    ?>
    <h2>2. </h2>
    <?php
     $b = 1;
     while($b <= 20 ){
        if($b%2 == 0){
            echo $b . " ";
        }
        $b++;
     }
    ?>

    <h1>Activity 2</h1>
    <form method="POST" action="">
        <label for="password">Please enter the password:</label>
        <input type="password" name="password" id="password" required>
        <button type="submit">Submit</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $correctPassword = "password123";
        $userPassword = $_POST['password'];
        do {
            if ($userPassword !== $correctPassword) {
                echo "<p>Incorrect password.</p>";
                break;
            }
            echo "<p>Access Granted.</p>";
        } while ($userPassword !== $correctPassword);
    }
    ?>

    <h1>Activity 3</h1>
    <?php
     $c = 7;
     for ($i = 1; $i <= 10; $i++) {
        echo $c . " x " . $i . " = " . $c*$i . "<br>";
    }
    ?>

    <h1>Activity 4</h1>
    <?php
     for ($i = 1; $i <= 10; $i++) {
        if($i == 5){
            continue;
        }
        elseif($i == 9){
            break;
        }
        echo $i . " ";
    }
    ?>

    <h1>Activity 5</h1>
    <?php
    $sum = 0;
    $d = 1;
    while ($d <= 100) {
        $sum += $d; 
        $d++; 
    }
    echo "The sum of numbers from 1 to 100 is: " . $sum;
    ?>

    <h1>Activity 6</h1>
    <?php
    $count = 1; 
    $movies = array("The Shawshank Redemption","Inception","The Dark Knight","Interstellar","Parasite");
    foreach($movies as $movie){
        echo $count . ". " . $movie . "<br>";
        $count++;
    }
    ?>

    <h1>Activity 7</h1>
    <?php
    $person = array("Name" => "Alice", 
                    "Age" => 20, 
                    "Grade" => "A", 
                    "City" => "Baguio");
    foreach ($person as $key => $value) {
        echo "$key: $value <br>";
    }
    ?>

    <h1>Activity 8</h1>
    <?php
    $product = 1; 
    for ($i = 5; $i > 1; $i--) {
        $product *= $i; 
    }
    echo "Factorial of 5 is: $product";
    ?>

    <h1>Activity 9</h1>
    <?php
    $product = 1; 
    for ($i = 1; $i <= 50; $i++) {
        if($i%3 == 0 && $i%5 == 0){
            echo "FizzBuzz ";
        }
        elseif($i%3 == 0){
            echo "Fizz ";
        }
        elseif($i%5 == 0){
            echo "Buzz ";
        }else{
            echo $i . " ";
        }
    }
    ?>

    <h1>Activity 10</h1>
    <form method="POST" action="">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" id="number" required>
        <button type="submit">Check</button>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = (int)$_POST['number'];
            $isPrime = true;
            if ($number <= 1) {
                $isPrime = false; 
            } else {
                for ($i = 2; $i <= sqrt($number); $i++) {
                    if ($number % $i == 0) {
                        $isPrime = false; 
                        break; 
                    }
                }
            }
            if ($isPrime) {
                echo "<p>$number is a prime number.</p>";
            } else {
                echo "<p>$number is not a prime number.</p>";
            }
        }
        ?>  

    <h1>Activity 11</h1>
    <?php
    $num = 0;  
    $n1 = 0;  
    $n2 = 1;  
    echo $n1.' '.$n2.' ';  
    while ($num < 8 )  {  
        $n3 = $n2 + $n1;  
        echo $n3.' ';  
        $n1 = $n2;  
        $n2 = $n3;  
        $num ++;  }
    ?>

    <h1>Activity 12</h1>
    <?php
    $inputString = "Hello";
    $reversedString = "";
    $length = strlen($inputString);
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversedString .= $inputString[$i]; 
    }
    echo "Input: " . $inputString . "<br>";
    echo "Output: " . $reversedString . "<br>";
    ?>
    
</head>
</body>
</html>