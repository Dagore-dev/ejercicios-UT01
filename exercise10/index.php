<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercise 10</title>
</head>
<body>
  <h1>Exercise 10</h1>

  <?php
    $rows = 5;

    for ($row = 0; $row < $rows; $row++)
    { 
      echo '<div><code>';
      echo_left($rows, $row);
      echo '*';
      echo_right($rows, $row);
      echo '</code></div>';
    }

    function echo_left ($rows, $row)
    {
      echo str_repeat('&nbsp;', $rows - $row);
    }

    function echo_right ($rows, $row)
    {
      echo str_repeat('*', $row * 2);
    }
  ?>


  <a href="/">To landing</a>
</body>
</html>