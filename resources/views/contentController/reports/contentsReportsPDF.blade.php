<html>
  <head>
    <title>
      Download content report pdf
    </title>
  </head>
  <body>
    <h1>Content Report:</h1>
    Active Posts:{{$data[0]}} <br>
    Approved Posts:{{$data[1]}} <br>
    Declined Posts:{{$data[2]}} <br><br>
    <div align="center">
      @if($chart)
        {!! $chart !!}
      @endif
    </div>
  </body>
</html>
