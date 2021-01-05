{{-- <html>
  <head>
  </head>
  <body>
    <h1>Contribution Report of {{$data[6]}}:</h1>
    Total Approved Posts:{{$data[0]}} My Approved Posts:{{$data[1]}} <br>
    Total Declined Posts:{{$data[2]}} Total Declined Posts:{{$data[3]}}<br>
    Toatal Announcements:{{$data[4]}} My Announcements:{{$data[5]}}<br><br>
     <div id="container" style="width: 900px; height: 500px;"></div>
    <script src="/assets/contentController/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js" integrity="sha512-s/XK4vYVXTGeUSv4bRPOuxSDmDlTedEpMEcAQk0t/FMd9V6ft8iXdwSBxV0eD60c6w/tjotSlKu9J2AAW1ckTA==" crossorigin="anonymous"></script>    
    <script src="https://cdn.anychart.com/js/latest/anychart-bundle.min.js"></script>
    <script type="text/javascript">
        anychart.onDocumentLoad(function() {
            // create chart and set data

            var totalApproved = "{{$data[0]}}";
            var myApproved = "{{$data[1]}}";
            var totalDeclined = "{{$data[2]}}";
            var myDeclined = "{{$data[3]}}";
            var totalAnnouncement = "{{$data[4]}}";
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
            chart.title("Contribution of ");
            // set chart container and draw
            chart.container("container").draw();
        });
    </script>
      <div id="canvas"></div>
      <div style="width:200px; float:left" id="image">
    <script type="text/javascript">
      var element = $("#container"); // global variable

    html2canvas(element, {
             onrendered: function (canvas) {
                    $("#canvas").append(canvas);
                    var data = canvas.toDataURL('image/png');
      //display 64bit imag
     var image = new Image();
    image.src = data;
    $('#image').append(image);
                 }
      });
      
    </script> 
          
  </body>
</html>
 --}}

 {{-- <html>
  <head>
    
  </head>
  <body>
    <div id="piechart"></div>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript"> 
      $(function(){
        //$("#piechart").append('<div id="piechart1" style="width: 900px; height: 500px;"></div>');
        google.charts.load('current', {callback: function(){
          var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['Work',     11],
            ['Eat',      2],
            ['Commute',  2],
            ['Watch TV', 2],
            ['Sleep',    7]
          ]);

          var options = {
            title: 'My Daily Activities'
          };

          var chart_div = document.getElementById('piechart');
          var chart = new google.visualization.PieChart(chart_div);

          google.visualization.events.addListener(chart,'ready', function(){
            $('#piechart').html('<img src="'+chart.getImageURI()+'">');
          });

          chart.draw(data, options);
        },packages:['corechart']});
      });
      
    </script>
  </body>
</html> --}}

{{-- <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        google.visualization.events.addListener(chart,'ready', function(){
          document.getElementById('piechart').innerHTML = '<img src="'+chart.getImageURI()+'">';
          });
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html> --}}

<!DOCTYPE html>
<html>
<head>
	<title>Download Contribution report pdf</title>
</head>
<body>
  <div align="center">
    <h1 align="center">Contribution of {{ $data[6] }}:</h1><br><br>
    All Approved Posts: {{$data[0]}} <br>
    Approved Posts By You: {{$data[1]}} <br>
    All Declined Posts: {{$data[2]}} <br>
    Declined Posts By You: {{$data[3]}} <br>
    All Announcements: {{$data[4]}} <br>
    Announcemnets By you: {{$data[5]}} <br><br>
  </div>
	<div align="center">
		@if($chart)
			{!! $chart !!}
		@endif
	</div>
</body>
</html>




