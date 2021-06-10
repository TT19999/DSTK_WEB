@extends('Business.layout')

@section('body')


    <script type="text/javascript">
        // Load google charts
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        // Draw the chart and set the chart values
        function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['Xe Mays', 20],
            ['Xe Dap', 10],
            ['Xe Oto', 40],
            ['Khac', 1],
        ]);
        var newdata = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['Xe Mays', 200],
            ['Xe Dap', 112],
            ['Xe Oto', 150],
            ['Khac', 11],
        ]);
        var d = new Date();
        var day = d.getDay();
        var mounth = d.getMonth();
        var year = d.getFullYear();
        var titleChart = "Số lượng xe trong ngày: " + day + '/' + mounth + '/' + year;
        var newTitleChart = "Số lượng xe trong thang: " + mounth + '/' + year;
        // Optional; add a title and set the width and height of the chart
        var options = {'title':titleChart, 'width':800, 'height':800};
        var newOption = {'title':newTitleChart, 'width':800, 'height':800};

        // Display the chart inside the <div> element with id="piechart"
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
        mountchart = new google.visualization.PieChart(document.getElementById('mountchart'));
        mountchart.draw(newdata, newOption)
        }

        </script>
        <div>
            <div id="piechart"></div>
        </div>
    <br>

        <div id ="mountchart">

        </div>

@endsection