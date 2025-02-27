<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrix Rotation</title>
    <style>
        body{
            font-family : "Times New Roman", Times, serif;
        }
        h3{
            margin-bottom : 5px;
            color : #333;
        }
        table {
            border-collapse: collapse;
            margin-bottom: 20px;  
            width : 50%;
        }
        td {
            width: 40px;
            height: 40px;
            text-align: center;
            vertical-align: middle;
            border: 2px solid gray;
        }
        .green {
            background-color: green;
            color: white;
        }
        .white {
            background-color : white;
        }
        .red {
            background-color: red;
            color: white;
        }
    </style>
</head>
<body>

<?php
function createTable($matrix, $title) {
    echo "<h3>$title</h3>";
    echo "<table>";
    
    for($i = 0; $i <6 ; $i++){
        echo "<tr>";
        for($j = 0; $j < 6; $j++){
            $class = '';
            if($i == 0 || $i ==5 || $j == 0 || $j == 5){
                $class = 'green';
            }
            elseif(($i == 2 || $i == 3) && ($j == 2 || $j == 3)){
                $class = 'red';
            }
            else{
                $class = 'white';
            }
            echo "<td class = '$class'>".$matrix[$i][$j]. "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

$inputMatrix = [
    [1,  2,  3,  4,  5,  6],
    [7,  8,  9,  10, 11, 12],
    [13, 14, 15, 16, 17, 18],
    [19, 20, 21, 22, 23, 24],
    [25, 26, 27, 28, 29, 30],
    [31, 32, 33, 34, 35, 36],
];

$outputMatrix = [
    [6,  12,  18,  24,  30,  36],
    [5,  8,  9,  10, 11, 35],
    [4, 14, 21, 15, 17, 34],
    [3, 20, 22, 16, 23, 33],
    [2, 26, 27, 28, 29, 32],
    [1, 7, 13, 19, 25, 31],
];

createTable($inputMatrix, "Input Array (6x6)");
createTable($outputMatrix, "Output Array");
?>
</body>
</html>