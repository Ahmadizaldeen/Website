
<table>

<?php
for ($row = 0; $row < 8; $row++) {
    echo "<tr>";

    for ($col = 0; $col < 8; $col++) {

        // Schachlogik: (row + col) bestimmt Farbe
        if (($row + $col) % 2 == 0) {
            $color = "gold";
        } else {
            $color = "black";
        }

        echo "<td style='width: 75px;height: 75px;border: 1px solid black;background-color:$color'></td>";
    }

    echo "</tr>";
}
?>

</table>
