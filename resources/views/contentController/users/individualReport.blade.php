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
                <h1>User Report</h1>
                <hr class="tm-hr-primary tm-hr-primary-post">
            </div>
            <div class="row tm-row tm-row-post">
                <h3>Name:</h3>{{$user->name}}
            </div>
            <div class="row tm-row tm-row-post">
                <h4>ID:</h4>{{$user->guid}}
            </div>
            <div class="row tm-row tm-row-post">
               
                <div id="container" class="report__container"></div>
                <script src="https://cdn.anychart.com/js/latest/anychart-bundle.min.js"></script>
                <script type="text/javascript">
                    anychart.onDocumentLoad(function() {
                        // create chart and set data

                        var active = "{{$data[0]}}";
                        var declined = "{{$data[1]}}";
                        var warned = "{{$data[2]}}";
                        var chart = anychart.pie([["Active Post", active], ["Declined Post", declined], ["Warnings", warned]]);
                        // set chart title
                        chart.title("User Report");
                        // set chart container and draw
                        chart.container("container").draw();
                    });
                </script>
            </div>
            <div class="row tm-row tm-mt-100 tm-mb-75">
                <div class="tm-prev-next-wrapper">
                    <a href="{{ route('contentController.userList') }}" class="mb-2 tm-btn tm-btn-primary tm-prev-next tm-mr-20">Back</a>
                </div>               
            </div>    
            <footer class="row tm-row">
                <hr class="col-12">             
            </footer>
            
        </main>
    </div>
</body>
</html>