<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercise 05</title>
</head>
<body>
  
  <h1>Exercise 05</h1>

  <?php
    $x = 144;
    $y = 999;

    $operations = [ 'sum' => ($x + $y), 'subtraction' => ($x - $y), 'division' => ($x / $y), 'multiplication' => ($x * $y) ];

    echo "<p>x = $x and y = $y</p>";

    echo '<table>';

    foreach ($operations as $key => $value) {
      echo "<tr>
        <td>$key</td>
        <td>$value</td>
      </tr>";
    }

    echo '</table>';
  ?>

  <a href="/">To landing</a>

</body>
</html>