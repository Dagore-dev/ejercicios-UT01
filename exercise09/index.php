<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercise 09</title>
</head>
<body>
  <h1>Exercise 09</h1>

  <?php
    $pesetas = 1000;
    $euros = round($pesetas / 166.386, 2);
    echo "<p>$pesetas pesetas = $euros euros</p>";
  ?>

  <a href="/">To landing</a>
</body>
</html>