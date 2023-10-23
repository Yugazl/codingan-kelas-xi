<?php

    $celcius = 30;

    $hasilfahrenheit = (9/5) * $celcius + 32;
    $hasilreamur = $celcius * (4/5);
    $hasilkelvin = $celcius + 273;
    $hasilrankine = ($celcius + 273.15) * 9/5;

    echo "Rumus celcius ke farenheit<br>";
    echo "<sup> 0 </sup>F = (9/5) x <sup>0</sup>C + 32.<br>";
    echo "<sup> 0 </sup>F = (9/5) x $celcius + 32 = $hasilfahrenheit F<br><br>";

    echo "Rumus celcius ke reamur<br>";
    echo "<sup>0</sup>C = 5.4 x<sup>0</sup>R atau <sup>0</sup>R = 4/5x <sup>0</sup>C<br>";
    echo "<sup>0</sup>C = (4/5) x $celcius = $hasilreamur R<br><br>";

    echo "Rumus celcius ke kelvin<br>";
    echo "<sup>0</sup>K = <sup>0</sup>C + 273<br>";
    echo "<sup>0</sup>K = $celcius + 273 = $hasilkelvin K<br><br>";

    echo "Rumus celcius le rankine<br>";
    echo "<sup>0</sup>Ra = (<sup>0</sup>C + 273.15) x 9/<br>";
    echo "<sup>0</sup>Ra = ($celcius + 273.15) x 9/5 = $hasilrankine RA<br><br>";

    