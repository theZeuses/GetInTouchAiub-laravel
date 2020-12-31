@include('Admin.menu');


<html>
  <head>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the piechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table, 
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

      // Create the data table.
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Topping');
      data.addColumn('number', 'Slices');
      data.addRows([
        ['Admin', {{$values->adcount}}],
        ['Account Controll Manager', {{$values->account}}],
        ['Content Controll Manager',{{$values->cccount}}],
        ['General User', {{$values->gucount}}],
        ['Block Users', {{$values->bloccount}}]
      ]);

      // Set chart options
      var options = {'title':'Number Of Total Users And Number Of Blocked Users ',
                     'width':900,
                     'height':450};

      // Instantiate and draw our chart, passing in some options.
      var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
    </script>
  </head>

  <body>
    <div class="container-fluid">
        <div class="tm-site-header ">          
            <h1  style ="color: skyblue;"class="text-center">Reports</h1>
        </div> 
        <main class="tm-main">
            <input style="margin-left  : 20%;margin-top:25px" class=" tm-new-badge" type="button" onclick="location.href='#'" name="" value="Download PDF">
            <input style="margin-left  : 20%;margin-top:25px" class=" tm-new-badge" type="button" onclick="location.href='#'" name="" value="Download Exel">

            <div class="row tm-row">
                <div id="chart_div" style="width:900px; height:450px"></div>
            </div> 
        </main>
    </div>
    
  </body>
</html>