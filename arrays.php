<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<h1>Echo the mark based on name</h1>
<form  method='post' action='arrays.php'>
<input type='text' name='student'/>
<input type=submit>
</form>

<?php
  $grades = array('Paul' => "A+", "Mark" => "B");
  echo 'First '.$_POST['student'].' had '.$grades[$_POST['student']].'<br />';
  $paul = $grades['Paul'];
  // careful here it doesn't change $paul
  $grades['Paul'] = 'C';
  echo 'Paul had '.$paul.'<br />';
  $grades['Sarah'] = 'B';
  $grades['Mark'] = 'F';
  // I must write it again
  $paul = $grades['Paul'];
  $length = count($grades);
  echo 'Now Paul has '.$grades['Paul'].'<br />';
  // now it will print 3 because I initialized one more
  echo 'There are '.$length.' students';
?>
</body>
</html>