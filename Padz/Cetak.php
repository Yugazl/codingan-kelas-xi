<?php
// Soal 1
for ($i = 5; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}

echo "<br><br>";

// Soal 2
for ($i = 0; $i <= 100; $i += 8) {
    echo $i . " ";
}

echo "<br><br>";

// Soal 3
for ($i = 2; $i <= 20; $i += 2) {
    echo $i . " - aku jago koding\n <br>";
}

echo "<br><br>";

// Soal 4
for ($i = 19; $i >= 1; $i -= 2) {
    echo $i . " - aku seorang web developer\n <br>";
}

echo "<br><br>";

// Soal 5
for ($i = 1; $i <= 6; $i++) {
    if ($i % 2 != 0) {
        echo $i . ". Hoby aku coding\n <br>";
    } else {
        echo $i . ". Aku sangat senang koding\n <br>";
    }
}
?>

