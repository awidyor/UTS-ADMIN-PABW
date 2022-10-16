<?php
/*
{
    "chart":{
        "caption":"Revenue Bulanan",
        "subCaption":"INF Mart",
        "xaxisName":"Bulan",
        "yAxisName":"Revenue(ribu Rp.)",
        "theme":"fint"
    },
    "data":[
        {"label":"Jan","value":"1000"},
        {"label":"Feb","value":"2000"},
        {"label":"Mar","value":"1500"},
        {"label":"Apr","value":"2500"},
        {"label":"May","value":"4500"}
    ]
}*/

$x1 = array(
    "caption"=>"Revenue Bulanan",
    "subCaption"=>"INF Mart",
    "xaxisName"=>"Bulan",
    "yAxisName"=>"Revenue(ribu Rp.)",
    "theme"=>"fint");
$x2 = array(
         array("label"=>"Jul","value"=>"10000"),
         array("label"=>"Agu","value"=>"30000")
    );
$x = array(
    "chart"=>$x1,
    "data"=>$x2
);

$y = json_encode($x);
echo $y;
?>