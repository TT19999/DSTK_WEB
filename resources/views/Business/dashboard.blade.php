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


        <div class="col-8">
            <h3>Bảng tỉ lệ số lượng xe đỗ  với cùng kì năm trước</h3>
            <p style="color: #0d95e8">năm nay</p>
            <p style="color: red">năm trước</p>
            <div id="myChart"></div>
        </div>

        <div class="col-8">
            <div id="piechart"></div>
        </div>
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
        zingchart.render({
            id: 'myChart',
            data: {
                type: 'bar',
                series: [
                    { values: [54,60,52,35,30,30,32,25,37,41,45,49] },
                    { values: [46,50,48,65,70,70,68,75,63,59,55,51] }
                ]
            },

        });
    </script>

@endsection
