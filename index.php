<?php
?><table>
    <?php
for ($i=1; $i<= 9; $i++) {

    for ($x=1; $x<= 9; $x++){

       echo "<th><tr><td> $i x $x = ".$i*$x."</th></tr></td>";

    }
}
    ?> </table>
