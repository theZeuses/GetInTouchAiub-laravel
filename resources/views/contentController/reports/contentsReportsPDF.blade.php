<html>
  <head>
    <script src="https://cdn.anychart.com/js/latest/anychart-bundle.min.js"></script>
    <script type="text/javascript">
        anychart.onDocumentLoad(function() {
            // create chart and set data

            var active = "{{$data[0]}}";
            var approved = "{{$data[1]}}";
            var declined = "{{$data[2]}}";
            var chart = anychart.column([["Active posts", active], ["Approved Posts", approved], ["declined posts", declined]]);
            // set chart title
            chart.title("All Content Report");
            // set chart container and draw
            chart.container("container").draw();
        });
    </script>
  </head>
  <body>
    <h1>Content Report:</h1>
    Active Posts:{{$data[0]}}
    Approved Posts:{{$data[1]}}
    Declined Posts:{{$data[2]}}
    <div id="container" style="width: 900px; height: 500px;"></div>
  </body>
</html>

