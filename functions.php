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
  function sayHi($name, $age = 13) {
    echo ("Hello user $name , today you are $age years old. <br />");
  }

  sayHi('Mark');

  function cube($number) {
    $result = $number**3;
    return $result;
  }

  $cubeResult = cube(4);
  echo $cubeResult;
?>

</body>
</html>