<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Day Of The WEEK</title>
    <link rel="stylesheet" type="text/css" href="sytle.css">
  </head>
  <style >
  body
   {
background-color: blue;
}
  </style>
  <body>

    <?php

      $dayofweek = date("w");

      switch ($dayofweek) {
        case 1:
          echo "<p>It is Monday!</P>";
          break;
        case 2:
          echo "<p>It is Tuesday!</P>";
          break;
        case 3:
          echo "<p>It is Wednesday!</P>";
          break;
        case 4:
          echo "<p>It is Thursday!</P>";
          break;
        case 5:
          echo "<p>It is Friday!</P>";
          break;
        case 6:
          echo "<p>It is Saturday!</P>";
          break;
        case 0:
          echo "<p>It is Sunday!</P>";
          break;
        default:
          echo "<p>Error!</P>";
          break;
      }
    ?>
  </body>
</html>
