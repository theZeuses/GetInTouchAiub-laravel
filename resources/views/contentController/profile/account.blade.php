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
                <h1>Update Password</h1>
                <hr class="tm-hr-primary tm-hr-primary-post">
            </div>
            @foreach($errors->all() as $err)
                <div class="alert alert-danger" role="alert">
                    {{ $err }}
                </div>
            @endforeach
            <form method="post">
                @csrf
                <div class="row tm-row tm-row-post">
                    <h3>New Password:</h3>
                    <input class="form-control tm-search-input" name="pass" type="password" placeholder="New Password..">
                    
                </div>                
                <div class="row tm-row tm-row-post">
                    <h3>Confirm Password:</h3>
                    <input class="form-control tm-search-input" name="confirmpass" type="password" placeholder="Confirm Password..">
                    
                </div>
                <div class="row tm-row tm-row-post">
                    <h3>Current Password:</h3>
                    <input class="form-control tm-search-input" name="currentpass" type="password" placeholder="Current Password..">
                    
                </div>
                <div class="row tm-row tm-mt-100 tm-mb-75">
                    <input type="submit" name="submit" class="mb-2 tm-btn tm-btn-primary tm-prev-next tm-mr-20" value="Update">
                    <a href="/contentcontroller/profile" class="mb-2 tm-btn tm-btn-primary tm-prev-next tm-mr-20">Back</a>         
                </div>   
            </form> 
            <footer class="row tm-row">
                <hr class="col-12">             
            </footer>
            
        </main>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    {!! Toastr::message() !!}
</body>
</html>