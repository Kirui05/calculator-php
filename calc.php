<?php
class Calculator {
  function add($num1, $num2) {
    return $num1 + $num2;
  }
  
  function subtract($num1, $num2) {
    return $num1 - $num2;
  }
  
  function multiply($num1, $num2) {
    return $num1 * $num2;
  }
  
  function divide($num1, $num2) {
    if ($num2 == 0) {
      return "Cannot divide by zero";
    } else {
      return $num1 / $num2;
    }
  }
}

$calculator = new Calculator();

if (isset($_POST['submit'])) {
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $operator = $_POST['operator'];
  $result = 0;
  
  switch ($operator) {
    case 'add':
      $result = $calculator->add($num1, $num2);
      break;
    case 'subtract':
      $result = $calculator->subtract($num1, $num2);
      break;
    case 'multiply':
      $result = $calculator->multiply($num1, $num2);
      break;
    case 'divide':
      $result = $calculator->divide($num1, $num2);
      break;
  }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
  <title>Simple Calculator</title>
</head>
<body>
  <h1 class="calc">Simple Calculator</h1>
  <form method="post">
    <label for="num1">Number 1:</label>
    <input type="text" name="num1" required>
    <br><br>
    <label for="num2">Number 2:</label>
    <input type="text" name="num2" required>
    <br><br>
    <label for="operator">Operator:</label>
    <select name="operator" required>
      <option value="add">Addition (+)</option>
      <option value="subtract">Subtraction (-)</option>
      <option value="multiply">Multiplication (x)</option>
      <option value="divide">Division (/)</option>
    </select>
    <br><br>
    <input type="submit" name="submit" value="Calculate">
  </form>
  
  <?php if (isset($_POST['submit'])): ?>
    <h2>Result: <?php echo $result ?></h2>
  <?php endif ?>
</body>
</html>




