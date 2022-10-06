<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercise 03</title>
</head>
<body>
  
<h1>Exercise 03</h1>

<!-- Print a table with 10 words in Spanish and its translations to English -->

<table>
  <tr>
    <th>Español</th>
    <th>English</th>
  </tr>

  <?php
  $words_with_translations = [ 'perro' => 'dog', 'gato' => 'cat', 'rojo' => 'red', 'verde' => 'green', 'azul' => 'blue', 'guion' => 'hyphen', 'línea' => 'line', 'ocho' => 'eight', 'binario' => 'binary' ];

  foreach ($words_with_translations as $spanish => $english) { 
    echo "<tr>
      <td>$spanish</td>
      <td>$english</td>
    </tr>";
  }
  ?>
</table>
<a href="/">To landing</a>

</body>
</html>