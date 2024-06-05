<?php
$tamil = 65;
$english = 74;
$maths = 78;
$social = 69;
$science = 78;
$hindi = 55;
$cs = 79;

$regno = $_GET['reg_no'];

$mark = array(
    "7d01" => array("tamil" => 65, "english" => 74, "maths" => 78, "social" => 69, "science" => 78, "hindi" => 55, "cs" => 79)
    ,
    "7d02" => array("tamil" => 63, "english" => 75, "maths" => 98, "social" => 99, "science" => 98, "hindi" => 65, "cs" => 99)
    ,
    "7d03" => array("tamil" => 69, "english" => 77, "maths" => 68, "social" => 79, "science" => 88, "hindi" => 35, "cs" => 79)
    ,
    "7d04" => array("tamil" => 65, "english" => 74, "maths" => 78, "social" => 69, "science" => 78, "hindi" => 55, "cs" => 79)
    ,
    "7d05" => array("tamil" => 65, "english" => 74, "maths" => 78, "social" => 69, "science" => 78, "hindi" => 55, "cs" => 79)
    ,
    "7d06" => array("tamil" => 65, "english" => 74, "maths" => 78, "social" => 69, "science" => 78, "hindi" => 55, "cs" => 79)
    ,
    "7d07" => array("tamil" => 65, "english" => 74, "maths" => 78, "social" => 69, "science" => 78, "hindi" => 55, "cs" => 79)
    ,
    "7d08" => array("tamil" => 65, "english" => 74, "maths" => 78, "social" => 69, "science" => 78, "hindi" => 55, "cs" => 79)
    ,
    "7d09" => array("tamil" => 65, "english" => 74, "maths" => 78, "social" => 69, "science" => 78, "hindi" => 55, "cs" => 79)
    ,
    "7d10" => array("tamil" => 65, "english" => 74, "maths" => 78, "social" => 69, "science" => 78, "hindi" => 55, "cs" => 79)
    ,
    "7d11" => array("tamil" => 65, "english" => 74, "maths" => 78, "social" => 69, "science" => 78, "hindi" => 55, "cs" => 79)
    ,
    "7d12" => array("tamil" => 65, "english" => 74, "maths" => 78, "social" => 69, "science" => 78, "hindi" => 55, "cs" => 79)
    ,
    "7d13" => array("tamil" => 65, "english" => 74, "maths" => 78, "social" => 69, "science" => 78, "hindi" => 55, "cs" => 79)
    ,
    "7d14" => array("tamil" => 65, "english" => 74, "maths" => 78, "social" => 69, "science" => 78, "hindi" => 55, "cs" => 79)
    ,
    "7d15" => array("tamil" => 65, "english" => 74, "maths" => 78, "social" => 69, "science" => 78, "hindi" => 55, "cs" => 79)
    ,
    "7d16" => array("tamil" => 65, "english" => 74, "maths" => 78, "social" => 69, "science" => 78, "hindi" => 55, "cs" => 79)
    ,
    "7d17" => array("tamil" => 65, "english" => 74, "maths" => 78, "social" => 69, "science" => 78, "hindi" => 55, "cs" => 79)
);

$names = array(
    "7d01" => "Adish",
    "7d02" => "Darshan",
    "7d03" => "Gaushick",
    "7d04" => "Johinth",
    "7d05" => "Kabilan",
    "7d06" => "Kavin",
    "7d07" => "Kaviyen",
    "7d08" => "mithun",
    "7d09" => "mukil kumar",
    "7d10" => "Nithin",
    "7d11" => "Rigul aswin",
    "7d12" => "Sai pranav",
    "7d13" => "sajhu",
    "7d14" => "santhos",
    "7d15" => "Thanish",
    "7d16" => "vishnu varshan",
    "7d17" => "visvarjun",
);
$students = array(
    "7d01" => array(
        "mark" => array("tamil" => 65, "english" => 74, "maths" => 78, "social" => 69, "science" => 78, "hindi" => 55, "cs" => 79),
        "name" => "Adish"
    ),
    "7d02" => array(
        "mark" => array("tamil" => 65, "english" => 74, "maths" => 78, "social" => 69, "science" => 78, "hindi" => 55, "cs" => 79),
        "name" => "Darshan"
    ),
    "7d03" => array(
        "mark" => array("tamil" => 65, "english" => 74, "maths" => 78, "social" => 69, "science" => 78, "hindi" => 55, "cs" => 79),
        "name" => "Gaushick"
    ),
    "7d04" => array(
        "mark" => array("tamil" => 65, "english" => 74, "maths" => 78, "social" => 69, "science" => 78, "hindi" => 55, "cs" => 79),
        "name" => "Johinth"
    ),
    "7d05" => array(
        "mark" => array("tamil" => 65, "english" => 74, "maths" => 78, "social" => 69, "science" => 78, "hindi" => 55, "cs" => 79),
        "name" => "Kabilan"
    ),
    "7d06" => array(
        "mark" => array("tamil" => 65, "english" => 74, "maths" => 78, "social" => 69, "science" => 78, "hindi" => 55, "cs" => 79),
        "name" => "Kavin"
    ),
    "7d07" => array(
        "mark" => array("tamil" => 65, "english" => 74, "maths" => 78, "social" => 69, "science" => 78, "hindi" => 55, "cs" => 79),
        "name" => "Kaviyen"
    ),
    "7d08" => array(
        "mark" => array("tamil" => 65, "english" => 74, "maths" => 78, "social" => 69, "science" => 78, "hindi" => 55, "cs" => 79),
        "name" => "mithun"
    ),
    "7d09" => array(
        "mark" => array("tamil" => 65, "english" => 74, "maths" => 78, "social" => 69, "science" => 78, "hindi" => 55, "cs" => 79),
        "name" => "mukil kumar"
    ),
    "7d10" => array(
        "mark" => array("tamil" => 65, "english" => 74, "maths" => 78, "social" => 69, "science" => 78, "hindi" => 55, "cs" => 79),
        "name" => "Nithin"
    ),
    "7d11" => array(
        "mark" => array("tamil" => 65, "english" => 74, "maths" => 78, "social" => 69, "science" => 78, "hindi" => 55, "cs" => 79),
        "name" => "Rigul aswin"
    ),
    "7d12" => array(
        "mark" => array("tamil" => 65, "english" => 74, "maths" => 78, "social" => 69, "science" => 78, "hindi" => 55, "cs" => 79),
        "name" => "Sai pranav"
    ),
    "7d13" => array(
        "mark" => array("tamil" => 65, "english" => 74, "maths" => 78, "social" => 69, "science" => 78, "hindi" => 55, "cs" => 79),
        "name" => "sajhu"
    ),
    "7d14" => array(
        "mark" => array("tamil" => 65, "english" => 74, "maths" => 78, "social" => 69, "science" => 78, "hindi" => 55, "cs" => 79),
        "name" => "santhos"
    ),
    "7d15" => array(
        "mark" => array("tamil" => 32, "english" => 31, "maths" => 34, "social" => 25, "science" => 33, "hindi" => 32, "cs" => 46),
        "name" => "Thanish"
    ),
    "7d16" => array(
        "mark" => array("tamil" => 65, "english" => 74, "maths" => 78, "social" => 69, "science" => 78, "hindi" => 55, "cs" => 79),
        "name" => "vishnu varshan"
    ),
    "7d17" => array(
        "mark" => array("tamil" => 65, "english" => 74, "maths" => 78, "social" => 69, "science" => 78, "hindi" => 55, "cs" => 79),
        "name" => "visvarjun"
    )
);
if (isset($students[$regno])) {
    $t = $students[$regno];
} else {
    $t = null;
}
// var_dump($thanish);


?>
<html>

<head>
    <style>
        table {
            border: 3px groove goldenrod;
            border-collapse: collapse;
            margin-top: 200px;
            margin-left: 490px;
            color: navy;
            font-family: cursive;
            font-size: larger;
            font-weight: bolder;
            border-radius: 15px 50px 30px;
            width: 25%;
        }


        .Marks {
            width: 50px;
            border: 3pt inset royalblue;
            border-left: 3pt ridge purple;
            border-right: 3pt ridge purple;
            border-radius: 15px 50px 30px;



        }

        .subject {
            width: 140px;
            padding: 5px;
            border: 3pt groove gold;

            border: 3pt inset royalblue;
            border-left: 3pt ridge purple;
            border-right: 3pt ridge purple;
            border-radius: 15px 50px 30px;

        }

        th {
            border-radius: 15px 50px 30px;
            border: 3pt inset royalblue;
            border-left: 3pt ridge purple;
            border-right: 3pt ridge purple;


        }

        caption {
            border: 3pt groove gold;
            color: navy;
            border: 3pt inset royalblue;
            border-left: 3pt ridge purple;
            border-right: 3pt ridge purple;
            margin-bottom: 5px;
            border-radius: 15px;

        }
        p{
           
            margin-top: 300px;
            margin-left: 590px;
            font-size: xx-large;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    </style>
</head>

<body>

    <div class="php">
        <?php

        if ($t == null) { ?>

            <p>No Data Available</p>

        <?php } else { ?>
            <table>
                <caption>Register number:
                    <?php echo $regno; ?>
                    <br>
                    Name :<?php
                    echo $t["name"];
                    ?>
                </caption>
                <tr>
                    <th class="Subject">Subject</th>
                    <th class="Marks">Marks</th>
                </tr>
                <tr>
                    <td class="Subject">Tamil</td>
                    <td class="Marks"><?php

                    echo $t["mark"]["tamil"];

                    ?></td>
                </tr>
                <tr>
                    <td class="Subject">English</td>
                    <td class="Marks"><?php
                    echo $t["mark"]["english"];
                    ?></td>
                </tr>
                <tr>
                    <td class="Subject">Maths</td>
                    <td class="Marks"><?php
                    echo $t["mark"]["maths"];
                    ?></td>
                </tr>
                <tr>
                    <td class="Subject">Social</td>
                    <td class="Marks"><?php
                    echo $t["mark"]["social"];
                    ?></td>
                </tr>
                <tr>
                    <td class="Subject">Science</td>
                    <td class="Marks"><?php
                    echo $t["mark"]["science"];
                    ?></td>
                </tr>
                <tr>
                    <td class="Subject">C.S</td>
                    <td class="Marks"><?php
                    echo $t["mark"]["cs"];
                    ?></td>
                </tr>
                <tr>
                    <td class="Subject">Hindi</td>
                    <td class="Marks"><?php
                    echo $t["mark"]["hindi"];
                    ?></td>
                </tr>
            </table>

        <?php } ?>
    </div>
</body>

</html>