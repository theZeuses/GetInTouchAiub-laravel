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
                <input id="query-announcement-zero" class="form-control tm-search-input" name="query-announcement-zero" type="text" placeholder="Search by Title..."  aria-label="Search">
            </div>        
            <div class="row tm-row">
                <h1>Announcements</h1>
            </div>
            <div class="row tm-row tm-row-post">
                <article class="col-12 col-md-6 tm-post tm-post-post">
                    <hr class="tm-hr-primary tm-hr-primary-post">                 
                    <p class="tm-pt-30">
                        There are currebtly no Announcements by you.
                    </p>
                </article>
            </div>
            <div class="row tm-row tm-mt-100 tm-mb-75">
                <div class="tm-prev-next-wrapper">
                    <a href="{{ route('contentController.createAnnouncement') }}" class="mb-2 tm-btn tm-btn-primary tm-prev-next request__btn__approve">Add New</a>
                </div>                
            </div>            
            <footer class="row tm-row">
                <hr class="col-12">             
            </footer>
        </main>
    </div>
</body>
</html>