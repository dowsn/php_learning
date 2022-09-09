<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <?php
    $name = 'John';
    $age = 58;
    $greeting = 'Hello';
    echo ('<h1>'.$greeting.' Sir '.$name.'</h1>');
    echo ('<p>You are today '.$age.' years old</p>');
    $name = 'Paul';
    echo strtolower('<p>Oh sorry... You are actually '.$name.'</p>');
    $nameLength = strlen($name);
    $firstLetter = $name[0];
    $name[0] = 'M';
    echo ('<p>My name is now '.$name.' and it is '.$nameLength.' characters long + its first letter used to be '.$firstLetter.'</p>');
    $age = strval($age);
    $age = str_replace('5', '6', $age);
    echo ('<p>New age is '.$age.'</p>');
    $greeting = substr($greeting, 0,4);
    echo $greeting;

    echo '<h1>Math</h1>';
    $number = -120;
    $number = abs($number);
    $number += 24;
    $number = max(120, $number);
    $number = floor($number + 0.2);
    $number = sqrt($number);
    $number = pow($number, 2);
    echo $number;
    ?>

<?php
  $grades = array('Paul' => "A+", "Mark" => "B");
?>
</body>
</html>