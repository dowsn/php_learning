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
    $isMale = true;
    $isTall = true;
    if ($isMale && $isTall) {
      echo "You are a tall male.";
    } elseif ($isMale && !$isTall) {
      echo "You are not tall male.";
    } else {
      echo "You are nothing.";
    }

    function getMax($number1, $number2, $number3) {
      if($number1 >= $number2 && $number1 >= $number3) {
         return $number1;
      } elseif($number2 >= $number1 && $number2 >= $number3) {
        return $number2;
      } else {
        return $number3;
      }
    }
      echo '<br />'.getMax(1,1,3);

?>
<h2>Calculator<h2>
    <form action='conditioning.php' method='post'>
      <!-- notice the decimal step -->
      First Num: <input type='number' name='num1' step='0.1' /><br />
      Option: <input type='text' name='op' /> <br />
      Second Num: <input type='number' name='num2' step='0.1'  /> <br />
      <input type = submit value='Calculate'/>
    </form>

<?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op = $_POST['op'];

    if($num1 && $num2) {
      if($op === '-') {
        echo $num1 - $num2;
      } elseif($op === '+') {
        echo $num1 + $num2;
      }
        else {
          echo 'Invalid operator';
      }
    } else {
        echo 'Please fill in all fields.';
    }
?>

<h2>Grades<h2>
    <form action='conditioning.php' method='post'>
      First Num: <input type='text' name='grade' /><br />
      <input type = submit value='Parent response'/>
    </form>

<?php
    $grade = $_POST['grade'];

    switch($grade) {
      case "A":
        echo "You did amazing!";
        break;
      case "B":
        echo "That is ok";
        break;
      default:
        echo "I don't understand. Did you mean F?";
    }

?>

<h2>Counting to 5 with while</h2>
<?php
    $index = 1;
    while($index <= 5) {
      echo "$index <br/>";
      $index++;
    }

?>


</body>
</html>