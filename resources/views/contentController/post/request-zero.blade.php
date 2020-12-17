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
                <h1> Pending Posts</h1>
            </div>
            <div class="row tm-row tm-row-post">
                <article class="col-12 col-md-6 tm-post tm-post-post">
                    <hr class="tm-hr-primary tm-hr-primary-post">
                    <p class="tm-pt-30">
                        <h4>Currently there is no post left to Review.</h4>
                    </p>
                </article>
            </div>
            <div class="row tm-row tm-mt-100 tm-mb-75">
                <div class="tm-prev-next-wrapper">
                    <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next tm-mr-20 disabled request__btn__decline">Decline</a>
                    <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next disabled request__btn__approve">Approve</a>
                    <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next disabled request__btn__report">Analyze</a>
                </div>   
                <div class="tm-paging-wrapper">
                    <span class="d-inline-block mr-3">Post Left</span>
                    <nav class="tm-paging-nav d-inline-block">
                        <ul>
                            <li class="tm-paging-item active">
                                <a href="/contentcontroller/post/request" class="mb-2 tm-btn tm-paging-link">00</a>
                            </li>
                        </ul>
                    </nav>
                </div>             
            </div>        
            <footer class="row tm-row">
                <hr class="col-12">             
            </footer>
            
        </main>
    </div>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/templatemo-script.js"></script>
</body>
</html>