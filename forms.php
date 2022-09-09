<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<h1> Form </h1>
<form action='site.php' method='get'>
  <label> Name
    <input type='text' name='name'>
  </label>
  <br/>
  <label> Age
    <input type='number' name='age'>
  </label>
  <br>
  <label> Num 1
    <input type='number' name='num1'>
  </label>
  <label> Num 2
    <input type='number' name='num2'>
  </label>
  <input type='submit'>
</form>

<?php
$name = $_GET["name"];
$age = $_GET["age"];
$sum = $_GET["num1"] + $_GET["num2"];

echo "Your name is: $name </br>";
echo "Your age is: $age </br>";
echo "Sum: is $sum";
?>

<h1> Post Form </h1>
<form action='site.php' method='post'>
<label> Password
    <input type='text' name='password'>
  </label>
</form>

<?php
$password = $_POST["password"];
echo "Your password is: $password </br>";
?>

<?php
$friends = array('Pater', 'Atom');
$friends[2] = 'Matrix';
$friends[0] = 'Neo';
$length = count($friends);
echo ('<h1>My first friend is</h1>');
echo $friends[0];
?>

<h1>Checkbox form</h1>
<form action='site.php' method='post'>
  Apples: <input type='checkbox' name='fruits[]' value='apples' />
  Oranges: <input type='checkbox' name='fruits[]' value='oranges' />
  Kiwi: <input type='checkbox' name='fruits[]' value='kiwi' />
  <input type='submit' />
</form>

<?php
  $fruits = $_POST['fruits'];
  echo $fruits[0];
?>


</body>
</html>