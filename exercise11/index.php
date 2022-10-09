<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercise 11</title>
</head>
<body>
  <h1>Exercise 11</h1>

  <?php
    $rows = 5;

    echo '<div><code>' . str_repeat('&nbsp;', $rows - 1) . '*' . '</code></div>';
    
    for ($row = 1; $row < $rows - 1; $row++)
    { 
      echo '<div><code>';
      echo_left($rows, $row);
      echo_right($rows, $row);
      echo '</code></div>';
    }

    echo '<div><code>' . str_repeat('*', $rows * 2 - 1) . '</code></div>';

    function echo_left ($rows, $row)
    {
      echo str_repeat('&nbsp;', $rows - $row - 1) . '*';
    }

    function echo_right ($rows, $row)
    {
      echo str_repeat('&nbsp;', $row * 2 - 1) . '*';
    }
  ?>

  <a href="/">To landing</a>
</body>
</html>