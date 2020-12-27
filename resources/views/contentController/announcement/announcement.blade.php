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
            <div class="form-inline tm-mb-80 tm-search-form">                
                <input id="query-announcement" class="form-control tm-search-input" name="query-announcement" type="text" placeholder="Search by Title..."  aria-label="Search">
            </div>   
            <div class="row tm-row announcement__header">
                <h1>{{count($announcements)}} Announcements</h1>
                <a href="{{ route('contentController.createAnnouncement') }}" class="mb-2 tm-btn tm-btn-primary tm-prev-next request__btn__approve">Add New</a>
            </div>
            <div id="update-announcemnet-list">
                @for($i=0; $i< count($announcements); $i++ )
                    <div class="row tm-row tm-row-post">
                        <article class="col-12 col-md-6 tm-post tm-post-post">
                            <hr class="tm-hr-primary tm-hr-primary-post">
                            <h2 class="tm-pt-30 tm-color-primary tm-post-title">{{ $announcements[$i]->subject}}</h2>                 
                            <p class="tm-pt-30">
                                {{ $announcements[$i]->body}}
                            </p>
                            <div class="d-flex justify-content-between tm-pt-45">
                                <span class="tm-color-primary">June 24, 2020</span>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <span>by <a>{{ $cc->name}}</a></span>
                            </div>
                        </article>
                    </div>
                    <div class="row tm-row tm-mt-100 tm-mb-75">
                        <div class="tm-prev-next-wrapper">
                            <a href="{{ route('contentController.updateAnnouncement',$announcements[$i]->id) }}" class="mb-2 tm-btn tm-btn-primary tm-prev-next tm-mr-20 announcement__btn__update">Update</a>
                            <a href="{{ route('contentController.deleteAnnouncement',$announcements[$i]->id) }}" class="mb-2 tm-btn tm-btn-primary tm-prev-next announcement__btn__delete">Delete</a>
                        </div>               
                    </div>  
                @endfor   
            </div>       
            <footer class="row tm-row">
                <hr class="col-12">             
            </footer>
            
        </main>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    @if(Session::has('success'))
        <script>
            toastr.success("{{ session('success') }}");
        </script>
    @endif
</body>
</html>