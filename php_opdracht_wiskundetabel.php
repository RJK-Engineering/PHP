<?php

echo "<table>\n";
for ($i=1; $i<=10; $i++) {
    echo "  <tr>\n";
    for ($j=1; $j<=3; $j++) {
        echo "    <td>" . $i ** $j . "</td>\n";
    }
    echo "  </tr>\n";
}
echo "</table>\n";

?>
