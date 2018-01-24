<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo "PHP assignment by: \"Rob\" (fix PHP syntax errors)" ?></title>
  </head>

  <body>
      <?php
        $ages = array(10,50,39,40,67,99,7,2,10,88);

        function getAverageAge($input) {
          $sum = 0;
          for ($i=0; $i<count($input); $i++) {
            $sum += $input[$i];
          }

          return $sum / count($input);
        }

        echo getAverageAge($ages);
        ?>
  </body>
</html>
