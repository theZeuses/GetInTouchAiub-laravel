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
            <div class="row tm-row">
                <h1>Pending Action Request</h1>
                <hr class="tm-hr-primary tm-hr-primary-post">
            </div>             
            <div class="row tm-row">
                @if(count($requests)>0) 
                    <table class="table table-custom">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Type</th>
                            <th scope="col">Text</th>
                        </tr>
                        </thead>
                        <tbody>
                            @for($i=0; $i< count($requests); $i++ )
                                <tr>
                                    <td>{{ $requests[$i]->id }}</td>
                                    <td>{{ $requests[$i]->actiontype }}</td>
                                    <td>{{ $requests[$i]->text }}</td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                @else
                    All requests are resolved
                @endif
            </div>
          
            <footer class="row tm-row">
                <hr class="col-12">              
            </footer>
        </main>
    </div>
</body>
</html>