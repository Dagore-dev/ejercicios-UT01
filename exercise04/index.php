<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
      padding: .5rem;
    }

    td {
      text-align: center;
    }
  </style>
  <title>Exercise 04</title>
</head>
<body>
  
  <h1>Exercise 04</h1>

  <!-- Show your weekly schedule. It can be done only with HTML but also use PHP. -->

  <table>

  <tr>
    <th>Monday</th>
    <th>Tuesday</th>
    <th>Wednesday</th>
    <th>Thursday</th>
    <th>Friday</th>
  </tr>

  <tr>
    <?php
      echo '
        <tr>
          <td>Entrepreneurship</td>
          <td>Backend</td>
          <td>Backend</td>
          <td>English</td>
          <td>English</td>
        </tr>
      ';
    ?>
  </tr>

  <tr>
    <td>Entrepreneurship</td>
    <td>Backend</td>
    <td>Backend</td>
    <td>Backend</td>
    <td>Frontend</td>
  </tr>

  <tr>
    <td>Web deployment</td>
    <td>Web deployment</td>
    <td>Frontend</td>
    <td>Backend</td>
    <td>Web interfaces</td>
  </tr>

  <tr>
    <?php
      echo '
        <tr>
          <td>Web deployment</td>
          <td>Web deployment</td>
          <td>Entrepreneurship</td>
          <td>Entrepreneurship</td>
          <td>Web interfaces</td>
        </tr>
      ';
    ?>
  </tr>

  <tr>
    <?php
      echo '
        <tr>
          <td>Backend</td>
          <td>Web interfaces</td>
          <td>Frontend</td>
          <td>Interfaces</td>
          <td>Frontend</td>
        </tr>
      ';
    ?>
  </tr>

  <tr>
    <td>Backend</td>
    <td>Web interfaces</td>
    <td>Frontend</td>
    <td>Interfaces</td>
    <td>Frontend</td>
  </tr>

  </table>

  <a href="/">To landing</a>

</body>
</html>