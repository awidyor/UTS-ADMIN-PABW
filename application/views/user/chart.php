<?php
 $this->load->view("template/header");
 ?>
<html>
    <head>
        <script type="text/javascript" src="js/fusioncharts.js"></script>
        <script type="text/javascript" src="js/themes/fusioncharts.theme.fint.js"></script>
        <script type="text/javascript">
            FusionCharts.ready(function(){
                    var revenueChart = new FusionCharts({
                        "type":"column2d",
                        "renderAt":"posisix",
                        "width": "500",
                        "height":"300",
                        "dataFormat":"json",
                        "dataSource":{
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
                                {"label":"Mar","value":"1500"}
                            ]
                        }
                    });
                    revenueChart.render();
                }
            )
        </script>
    </head>
    <body>
        <div id="posisix"></div>
    </body>
</html>
<?php
    $this->load->view("template/footer");
?>
<script type="text/javascript">

    $(document).ready( function () {
        $('.table').DataTable();
    } );

</script>