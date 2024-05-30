<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>

<body>
    <h1>Berlatih Function PHP</h1>
    <?php

    echo "<h3> Soal No 1 Greetings </h3>";
  

    function greetings($name)
    {
        echo "Halo " . ucfirst($name) . ", Selamat Datang di Sanbercode!";
    }

   
    greetings("Bagas");
    echo "<br>";
    greetings("Wahyu");
    echo "<br>";
    greetings("ibnu");

    echo "<br>";

    echo "<h3>Soal No 2 Reverse String</h3>";
   

    function reverseString($string)
    {
        $result = '';
        for ($i = strlen($string) - 1; $i >= 0; $i--) {
            $result .= $string[$i];
        }
        echo $result;
    }

    
    reverseString("ibnu");
    echo "<br>";
    reverseString("Sanbercode");
    echo "<br>";
    reverseString("We Are Sanbers Developers");
    echo "<br>";

    echo "<h3>Soal No 3 Palindrome </h3>";
    
    function palindrome($string)
    {
        $reversed = '';
        for ($i = strlen($string) - 1; $i >= 0; $i--) {
            $reversed .= $string[$i];
        }
        if ($string === $reversed) {
            echo "$string => true";
        } else {
            echo "$string => false";
        }
    }

   
    echo "<br>";
    palindrome("civic");
    echo "<br>";
    palindrome("nababan"); 
    echo "<br>";
    palindrome("jambaban");
    echo "<br>";
    palindrome("racecar"); 

    echo "<h3>Soal No 4 Tentukan Nilai </h3>";
  

    function tentukan_nilai($nilai)
    {
        if ($nilai >= 85 && $nilai <= 100) {
            return "$nilai => Sangat Baik";
        } elseif ($nilai >= 70 && $nilai < 85) {
            return "$nilai => Baik";
        } elseif ($nilai >= 60 && $nilai < 70) {
            return "$nilai => Cukup";
        } else {
            return "$nilai => Kurang";
        }
    }

    
    echo tentukan_nilai(98);
    echo "<br>";
    echo tentukan_nilai(76); 
    echo "<br>";
    echo tentukan_nilai(67); 
    echo "<br>";
    echo tentukan_nilai(43); 
    ?>

</body>

</html>
