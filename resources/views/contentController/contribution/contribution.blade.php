<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GetInTouchAiub</title>
</head>
<body>
    @include('contentController.menu')
    <div class="container-fluid">
        <main class="tm-main">       
            <div class="row tm-row announcement__header">
                <h1>Contribution</h1>
                <hr class="tm-hr-primary tm-hr-primary-post">
            </div>
            @if(Session::has('succes'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif
            <div class="row tm-row tm-row-post">
                <div id="container" class="report__container"></div>
                <div id="image" style="display:none;"></div>
                {{-- <script src="https://cdn.anychart.com/js/latest/anychart-bundle.min.js"></script>
                <script type="text/javascript">
                    anychart.onDocumentLoad(function() {
                        // create chart and set data

                        var totalApproved = "{{$data[0]}}";
                        var myApproved = "{{$data[1]}}";
                        var totalDeclined = "{{$data[2]}}"
                        var myDeclined = "{{$data[3]}}";
                        var totalAnnouncement = "{{$data[4]}}"
                        var myAnnouncement = "{{$data[5]}}";
                        var chart = anychart.column();
                        chart.data({
                            header: ["#", "Total", "My"],
                            rows: [
                            {x: "Approved Posts", Total: totalApproved, My: myApproved},
                            {x: "Declined Posts", Total: totalDeclined, My: myDeclined},
                            {x: "Announcements", Total: totalAnnouncement , My: myAnnouncement }
                            ]
                        });
                        // set chart title
                        chart.title("Contribution of '{{Session::get('username')}}'");
                        // set chart container and draw
                        chart.container("container").draw();
                    });
                </script> --}}
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                    google.charts.load("current", {packages:['corechart']});
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                        ['Contribution', 'Total', 'My'],
                        ['Approved Post', {{$data[0]}}, {{$data[1]}}],
                        ['Declined Post', {{$data[2]}}, {{$data[3]}}],
                        ['Announcement', {{$data[4]}}, {{$data[4]}}]
                        ]);

                        var options = {
                            title: 'Contribution Report of {{Session::get("username")}}',
                            width: 800,
                            height: 600
                        };
                        var view = new google.visualization.DataView(data);    
                        var chart = new google.visualization.ColumnChart(document.getElementById("container"));
                        chart.draw(view, options);

                        var chart1 = new google.visualization.ColumnChart(document.getElementById("image"));
                        google.visualization.events.addListener(chart1,'ready', function(){
                        document.getElementById('image').innerHTML = '<img src="'+chart1.getImageURI()+'">';
                        });
                        chart1.draw(view, options);;
                    }
                    setTimeout(function(){
                        let chartsData = $("#image").html();
                        $("#chartInputData").val(chartsData);
                    },1000);
                </script>

            </div>
            <div class="row tm-row tm-mt-100 tm-mb-75">
                <div class="tm-prev-next-wrapper">
                    <form method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="chartData" id="chartInputData">
                        <input type="submit" class="mb-2 tm-btn tm-btn-primary tm-prev-next tm-mr-20" value="Save PDF">
                    </form>
                </div>               
            </div>    
            <footer class="row tm-row">
                <hr class="col-12">             
            </footer>
            
        </main>
    </div>
</body>
</html>