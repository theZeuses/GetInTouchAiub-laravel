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
                <div class="col-12">
                    <div class="row tm-row announcement__header">
                        <h1>Reports</h1>
                        <hr class="tm-hr-primary tm-hr-primary-post"> 
                    </div>
                </div>                
            </div>            

            <div class="row tm-row tm-mt-100 tm-mb-75">
                <div class="tm-prev-next-wrapper d-inline-block">
                    <a href="{{ route('contentController.usersReport') }}" class="mb-2 tm-btn tm-btn-primary tm-prev-next">Users <br> Report</a>
                    <a href="{{ route('contentController.contentsReport') }}" class="mb-2 tm-btn tm-btn-primary tm-prev-next">Content <br> Report</a>
                </div>              
            </div>           
            <footer class="row tm-row">
                <hr class="col-12">              
            </footer>
        </main>
    </div>
</body>
</html>