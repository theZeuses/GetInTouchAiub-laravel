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
            @foreach($errors->all() as $err)
                <div class="alert alert-danger" role="alert">
                    {{ $err }}
                </div>
            @endforeach

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
                <a href="/contentcontroller/post/request" class="mb-2 tm-btn tm-btn-primary tm-prev-next tm-mr-20">Back</a>
                <a href="/contentcontroller/declinepost/{{$pid}}" class="mb-2 tm-btn tm-btn-primary tm-prev-next tm-mr-20 request__btn__decline">Decline</a>
                <a href="/contentcontroller/banforever/{{$pid}}/{{$user->guid}}" class="mb-2 tm-btn tm-btn-primary tm-prev-next tm-mr-20 request__btn__report">Ban Forever</a> 
            </div>    
            <form method="post">
                @csrf
                <div class="row tm-row tm-mt-100 tm-mb-75">
                
                    <a href="" id="banFor" class="mb-2 tm-btn tm-btn-primary tm-prev-next tm-mr-20 disabled request__btn__decline">Ban For</a>    
                    <input class="form-control tm-search-input ban__days" id="banDays" name="banDays" type="number"  placeholder="days..">     

            
                    <a href="" id="blockFor" name="blockFor"  class="mb-2 tm-btn tm-btn-primary tm-prev-next tm-mr-20 disabled request__btn__decline">Block From Posting</a>    
                    <input class="form-control tm-search-input ban__days" id="blockDays" name="blockDays" type="number"  placeholder="days..">     

            
                    <a href="" id="warn" class="mb-2 tm-btn tm-btn-primary tm-prev-next tm-mr-20 disabled request__btn__decline">Warn</a>    
                    <textarea class="form-control tm-search-input tm-search-input-body" id="warning" name="warning" type="textarea"  placeholder="Warning Text..."></textarea>
                
                    <input type="submit" name="submit" class="mb-2 tm-btn tm-btn-primary tm-prev-next tm-mr-20 request__btn__report" value="Proceed">

                
                </div> 
            </form>
            <footer class="row tm-row">
                <hr class="col-12">             
            </footer>
            
        </main>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    {!! Toastr::message() !!}
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/templatemo-script.js"></script>
</body>
</html>