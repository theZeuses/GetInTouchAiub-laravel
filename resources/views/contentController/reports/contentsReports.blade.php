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
                <h1>Content Report</h1>
                <hr class="tm-hr-primary tm-hr-primary-post">
            </div> 
            @if(Session::has('succes'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif
            <div class="row tm-row tm-row-post">
                <h3>Active Posts:</h3>{{$data[0]}}
                <h3>Approved Posts:</h3>{{$data[1]}}
                <h3>Declined Posts:</h3>{{$data[2]}}
            </div>
            <div class="row tm-row tm-row-post">
                <div id="container" class="report__container"></div>
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
            </div>
            <div class="row tm-row tm-mt-100 tm-mb-75">
                <a href="/contentcontroller/reports" class="mb-2 tm-btn tm-btn-primary tm-prev-next tm-mr-20">Back</a>
                <form method="post">
                    @csrf
                    <input type="submit" class="mb-2 tm-btn tm-btn-primary tm-prev-next tm-mr-20" value="Save PDF">
                </form>
            </div>    
            <footer class="row tm-row">
                <hr class="col-12">             
            </footer>
            
        </main>
    </div>
</body>
</html>