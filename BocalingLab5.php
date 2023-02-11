<!DOCTYPE html>
<html lang="en">
<head>
    <title>LAB5</title>

    <style>

    .title
    {
        text-align: center;
        font-size: 2rem;
        font-weight: bold;
        padding-top: 10px;
    }
    .name
    {
        text-align: center;
        font-size: 1.3rem;
        font-weight: 500;
        font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
    }
    table
    {
        border: 2px solid black;
        border-collapse: collapse;
        margin:25px auto;
    }
    td {
        width: 50px;
        height: 50px;
        text-align: center;
    }

    .black {
        background-color: black;
        color: white;
    }

    .white {
        background-color: white;
    }

    </style>

</head>
<body>

    <div class="title">Multiplication Table</div>

    <table>
        <?php
        $color = "white";
            for($i = 1; $i <= 10; $i++){
                echo "<tr>";
                for($x = 1; $x <= 10; $x++){
                    $result =  $i * $x;
                    echo "<td class='$color'>$result</td>";

                    if($color == "black"){
                    $color = "white";
                    }else{
                    $color = "black";
                    }
                }
                    if($color == "black"){
                        $color = "white";
                    }else{
                        $color = "black";
                    }
                echo "</tr>";
            }
        ?>
    </table>

    <div class="name">Submitted by: Reynaldo F, Bocaling Jr.</div>

</body>
</html>