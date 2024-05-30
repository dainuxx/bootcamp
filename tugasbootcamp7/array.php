<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>soal Array</h1>

    <?php
    echo "<h4>soal 1</h4>";

    $kids = ['Mike', 'Dustin','Will','Lucas','Max','Eleven'];
    
    $Adults = [ "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"];

    print_r($kids);
    print_r($Adults);
    
    echo  "<h4>soal 2</h4>";

    echo "Total kids: " .count($kids);
    echo "<br>";
    echo "<ol>";
    echo "<li> $kids[0] </li>";
    echo "<li> $kids[1] </li>";
    echo "<li> $kids[2] </li>";
    echo "<li> $kids[3] </li>";
    echo "<li> $kids[4] </li>";
    echo "<li> $kids[5] </li>";

    echo "</ol>";

    echo "<h4>soal 3</h4>";

    $kidsArr =[
        ["id"=> "000", "name"=> "Will Byers", "Age" => "12","Alliesse" => "will the wise", "Status" => "Allive"],
        ["id"=> "001", "name"=> "Mike Whiller", "Age" => "12","Alliesse" => "Dungeon Master", "Status" => "Allive"],
        ["id"=> "002", "name"=> "Mike Whiller", "Age" => "12","Alliesse" => "Dungeon Master", "Status" => "Allive"],
        ["id"=> "003", "name"=> "Eleven", "Age" => "12","Alliesse" => "El", "Status" => "Allive"],
    ];
    
    echo "<pre>";
    print_r($kidsArr);
    echo "</pre>";

    
    ?>
</body>
</html>