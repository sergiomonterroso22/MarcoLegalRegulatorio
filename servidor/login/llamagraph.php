<!DOCTYPE html>
<html>
    <head>
		<title>Dashboard</title>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript">
            
            function drawChart() {
                // call ajax function to get data

                var options = {title:'How Much Pizza Sarah Ate Last Night',
                       width:400,
                       height:300};

                var jsonData = $.ajax({
                    url: "llenagraph.php",
                    dataType: "json",
                    async: false
                }).responseText;
                //The DataTable object is used to hold the data passed into a visualization.
                var data = new google.visualization.DataTable(jsonData);

                // To render the pie chart.
                var chart = new google.visualization.PieChart(document.getElementById('chart_container'));
                chart.draw(data, {width: 800, height: 500});

                
            }
            // load the visualization api
            google.charts.load('current', {'packages':['corechart']});

            // Set a callback to run when the Google Visualization API is loaded.
            google.charts.setOnLoadCallback(drawChart);
        </script>
		
    </head>
    <body>
           <div id="chart_container"></div>
    </body>
</html>