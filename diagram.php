<?php
function randArray(){
    $years = [];
    for($i = 2000; $i <= date("Y"); $i++) {
        $years[$i] = rand(1, 300);
            }
    return $years;

};


function randColor() {
    $color = "rgb(" . rand(0, 255) . "," . rand(0, 255) . "," . rand(0, 255) . ")";
    return $color;
}
function makeDiagram($array){
    $result = '';
    $result .=  "<div class='diagram'>";
    foreach ($array as $key =>$value){
        $result .= '<div style="background-color:' . randColor()  . '; height: '. $value . 'px' . '"></div>';
    }
    $result .= "</div>";
    return $result;
}

    ?>

<html>
<head>
    <title>Diagram</title>
    <style>
        .diagram {
            display: flex;
            height: 300px;
            align-items: baseline;

        }
    </style>
</head>
<body>
<div class="diagram">

    <?php
    makeDiagram()
    ?>
</div>

</body>
</html>
