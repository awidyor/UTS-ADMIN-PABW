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

  $x2 = array();

  $kon = mysqli_connect("localhost","root","","pabw");
  $hsl = mysqli_query($kon,"SELECT * FROM revenue");
  while($r = mysqli_fetch_assoc($hsl)){
    $datum = array("label"=>$r['month'],"value"=>$r['revenue']);
    array_push($x2,$datum);
  } 

$x = array(
    "chart"=>$x1,
    "data"=>$x2
);

$y = json_encode($x);
echo $y;
?>