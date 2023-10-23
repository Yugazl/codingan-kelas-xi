
    <!-- // for ($i = 0; $i <= 10; $i++) {
    //     echo "Nomor $i <br>";
    // }

    

    // $loop = 1;

    // while ($loop <= 100) {
    //     echo "{$loop}. Hello World <br>";
    //     $loop++;
    // } -->
    <?php

        for ($i = 1; $i <= 100; $i++) {
            echo "Nomor $i <br>";
        }

        echo "<br>";

        for ($a = 10; $a >= 1; $a--) {
            echo "Nomor $a <br>";
        }

        echo "<br>";

        $loop = 1;

        while ($loop <= 20) {
            echo "{$loop}. Hello World! <br>";
            $loop++;
        }

    
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tabel perkalian 1-10</title>
        <style>
            table {
                border-collapse: collapse;
                width: 50%;
                margin: 20px;
            }

            th {
                border: 1px solid black;
                padding: 8px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>Tabel perkalian 1 - 10</h1>
        <table  border = "1">
            <tr>
                <th>&nbsp;</th>
                <?php
                for ($i = 1; $i <= 10; $i++){
                    echo "<th>$i</th>";
                }
                ?>
            </tr>

            <?php
            for ($row = 1; $row <= 10; $row++) {
                echo "<tr>";
                echo "<th>$row</th>";

            for ($col = 1; $col <= 10; $col++) {
                $result = $row * $col;
                echo "<th>$result</th>";
            }

            echo "</tr>";
            }
            ?>
        </table>
    </body>
    </html>