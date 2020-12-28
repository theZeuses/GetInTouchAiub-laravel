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
                        {{ $posts[0]->text }}
                    </p>
                    @if($posts[0]->file != null && strlen($posts[0]->file) > 0)
                        <img src="/assets/contentController/pictures/{{$posts[0]->file  }} " class="profile-img" alt="{{$posts[0]->file }}">
                    @else
                        <small>**no photo**</small>
                    @endif
                    <div class="d-flex justify-content-between tm-pt-45">
                        <span class="tm-color-primary">June 24, 2020</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span>by <a> {{ $guser[0]->name }}</a></span>
                    </div>
                </article>
            </div>
            <div class="row tm-row tm-mt-100 tm-mb-75">
                <div class="tm-prev-next-wrapper">
                    <a href="{{ route('contentController.declinePost', [$posts[0]->id]) }}" class="mb-2 tm-btn tm-btn-primary tm-prev-next tm-mr-20 request__btn__decline">Decline</a>
                    <a href="{{ route('contentController.approvePost', [$posts[0]->id]) }}" class="mb-2 tm-btn tm-btn-primary tm-prev-next request__btn__approve">Approve</a>
                    <a href="{{ route('contentController.analyzePoster', [$posts[0]->id, $guser[0]->id]) }}" class="mb-2 tm-btn tm-btn-primary tm-prev-next request__btn__report">Analyze</a>
                </div>   
                <div class="tm-paging-wrapper">
                    <span class="d-inline-block mr-3">Post Left</span>
                    <nav class="tm-paging-nav d-inline-block">
                        <ul>
                            <li class="tm-paging-item active">
                                <a href="{{ route('contentController.postRequest', $posts[0]->id) }}" class="mb-2 tm-btn tm-paging-link">{{ count($posts) }}</a>
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
</body>
</html>