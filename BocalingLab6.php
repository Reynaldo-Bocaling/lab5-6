<!DOCTYPE html>
<html>

<head>
<title>LAB6</title>
</head>
<body>

<?php
    $num = 40;

echo "The odd numbers are: ";
    for ($i=$num; $i>=0; $i--) {
        if ($i % 2 != 0) {
            echo " ".$i;
        }
    }
   echo '<br>';

   echo "The even numbers are: ";
    for ($i=$num; $i>=0; $i--) {Reynaldo0717
        if ($i % 2 == 0) {
            echo " ".$i;
        }
    }

?>

</body>
</html>