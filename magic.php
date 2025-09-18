<?php
// Task 1: Magic Number Game


$number = rand(1, 1000);

if ($number % 3 === 0 && $number % 5 === 0)
     {
    $magicNumber = "FizzBuzz";
} 
elseif ($number % 3 === 0) 
    {
    $magicNumber = "Fizz";
} 
elseif ($number % 5 === 0) 
{
    $magicNumber = "Buzz";
} 
else 
{
    $magicNumber = $number;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Magic Number Game</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #c8d2e0ff;
            text-align: center;
            margin-top: 50px;
        }
        .magic-box {
            background: #a29fcfff;
            padding: 20px;
            width: 400px;
            margin: 0 auto;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="magic-box">
        <h2>Hey! Let's Play Fizz-Buzz Game</h2>
        <p>Generated number: <strong><?php echo $number; ?></strong></p>
        <p>The magic number is: <strong><?php echo $magicNumber; ?></strong></p>
    </div>
</body>
</html>
