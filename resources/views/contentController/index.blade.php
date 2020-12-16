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
                <h1>Welcome Back...</h1>
                <hr class="tm-hr-primary tm-hr-primary-post">
            </div>     
            <div class="row tm-row">
                <pre> </pre>
            </div>         
            <div class="row tm-row">
                <h1>Pending</h1>
            </div>
            <div class="row tm-row">
                <h2 class="index__card">{{ count($posts) }} posts</h2>
            </div>
            <div class="row tm-row tm-mt-100 tm-mb-75">
                <div class="tm-prev-next-wrapper">
                    <a href="/contentcontroller/post/request" class="mb-2 tm-btn tm-btn-primary tm-prev-next">Inspect</a>
                </div>              
            </div>            
            <footer class="row tm-row">
                <hr class="col-12">              
            </footer>
        </main>
    </div>
</body>
</html>