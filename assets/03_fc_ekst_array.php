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
                        "dataFormat":"jsonurl",
                        "dataSource": "array2json.php"
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