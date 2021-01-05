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
                <h1>New Announcement</h1>
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
                    <h3>Subject</h3>
                    <input class="form-control tm-search-input" name="subject" type="text" value="{{ old('subject') }}" placeholder="Subject..">
                    <div class="row tm-row tm-row-post"><pre> </pre></div>  
                    
                    <h3>Body</h3>
                <textarea class="form-control tm-search-input tm-search-input-body" name="body" type="textarea" placeholder="Body...">{{ old('body') }}</textarea>
                </div>
                <div class="row tm-row tm-mt-100 tm-mb-75">
                    <div class="tm-prev-next-wrapper">
                        <input type="submit" name="submit" class="mb-2 tm-btn tm-btn-primary tm-prev-next tm-mr-20 request__btn__approve" value="Add">
                        <a href="{{ route('contentController.announcement') }}" class="mb-2 tm-btn tm-btn-primary tm-prev-next tm-mr-20">Back</a>
                    </div>               
                </div>    
            </form>  
            <footer class="row tm-row">
                <hr class="col-12">             
            </footer>
            
        </main>
    </div>
</body>
</html>