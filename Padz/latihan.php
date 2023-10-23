<?php


        // $nama = "YUGA ZAINAL LANOV";
        // $kelas = 11;
        // $jurusan = "RPL";
        // $sekolah = "SMK NEGERI 1 SUBANG";
        // $alamat = "SUBANG";


        // echo "NAMA             : $nama <br>";
        // echo "KELAS            : $kelas <br>";
        // echo "JURUSAN          : $jurusan <br>";
        // echo "SEKOLAH          : $sekolah <br>";
        // echo "ALAMAT SEKOLAH   : $alamat <br>";

         // $bilangan1 = 10;
        // $bilangan2 = 10;

        //  $hasilpenjumlahan = $bilangan1 + $bilangan2;
        //  $hasilpengurangan = $bilangan1 - $bilangan2;
        //  $hasilpembagian = $bilangan1 / $bilangan2;
        //  $hasilperkalian = $bilangan1 * $bilangan2;
         
        //  echo "Hasil Penjumlahan : $bilangan1 + $bilangan2 = $hasilpenjumlahan <br>";
        //  echo "Hasil Pengurangan : $bilangan1 - $bilangan2 =  $hasilpengurangan <br>";
        //  echo "Hasil Pembagian : $bilangan1 : $bilangan2 =  $hasilpembagian <br>";
        //  echo "Hasil Perkalian : $bilangan1 x $bilangan2 =  $hasilperkalian <br>";


        // $bilangan1 = 5;
        // $bilangan2 = 10;

        // $hasilpersegi = $bilangan1 * $bilangan1;

        // echo "RUMUS PERSEGI <br>";
        // echo "LUAS = S x S <br>";
        // echo "Hasil Persegi : $bilangan1 x $bilangan2 = $hasilpersegi <br><br>";


        // $alas = 10;
        // $tinggi = 7;
        // $setengah = 1/2;
        // $hasilsegitiga = $setengah * $alas * $tinggi;

        // echo "RUMUS SEGITIGA <br>";
        // echo "LUAS = 1/2 x A x T <br>";
        // echo "Hasil Segitiga : 1/2 x $alas x $tinggi = $hasilsegitiga<br><br>";


        
        // $panjang = 5;
        // $lebar = 10;
        // $hasilpersegi = $panjang * $lebar;
    
        // echo "RUMUS PERSEGI PANJANG<br>";
        // echo "Luas = P x L<br>";
        // echo "Hasil Persegi Panjang : $panjang x $lebar = $hasilpersegi<br><br>";

        // $pi = 22/7;
        // $ruas = 7;
        // $hasillingkaran = $pi * $ruas * $ruas;

        // echo "RUMUS LINGKARAN<br>";
        // echo "Luas = pi x ruas<sup>2</sup> <br>";
        // echo "Hasil Lingkaran : 22/7 x $ruas = $hasillingkaran";


        // == sama dengan
        // === sama dengan (spesifik)
        // != not (bukan)
        // !== not (lebih spesifik)
        // >= lebih dari dan sama dengan 
        // <= kurang dari dan sama dengan
        // > l

        // PERCABANGAN 2
        // $username = "yuga zainal lanov";
        // $password = 221106;


        // if ($username == "yuga zainal lanov" or $password == 221106){
        //         echo("Selmat anda berhasil login");
        // } else {
        //         echo("Maaf username/password yang anda masukan salah");  
        // };

        $nilai = -101;

        
        if($nilai >= 90 && $nilai <= 100){
                echo("A+");
        }
        else if ($nilai > 100){
                echo "pinter teuing";
        }
        else if($nilai >= 80 && $nilai <= 89){
                echo("A");
        }
        else if ($nilai >= 70 && $nilai <= 79){
                echo("B+");
        }
        else if($nilai >= 60 && $nilai <= 69){
                echo "B";
        }
        else if($nilai >= 50 && $nilai <= 59){
                echo "C";
        }
        else if($nilai >= 0 && $nilai <= 50){
                echo "E";
        }
        else {
                echo "inputan salah";
        }

        echo "<br><br>";

        $umur = 17;
        $tiket = 50.000;
        $film = "Avengers";

        if($umur >= 18 && $tiket == 100.000 && $film == "Avengers"){
                echo "selamat menonton film dengan vip";
        }
        elseif($umur >= 18 && $tiket == 50.000 && $film == "Avengers"){
                echo "selamat menonton";
        }
        elseif($umur >= 18 && $tiket == 50.000 && $film == "Avengers"){
                echo "film eweuh balik deui we";
        }
        elseif($umur < 18){
                echo "anda masih bocil";
        }
        else{
                echo "film eweuh";
        }

 ?>
