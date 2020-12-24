@include('Admin.menu');
<div class="container-fluid">
    <main class="tm-main">
        <!-- Search form -->
        <div class="row tm-row">
            <div class="col-12">
                <form method="GET" class="form-inline tm-mb-80 tm-search-form">                
                    <input class="form-control tm-search-input" id ="srcpost" name="query" type="text" placeholder="Search..." aria-label="Search">
                                                  
                </form>
            </div>                
        </div>            
        <div class="row tm-row">
            <!--<article class="col-12 col-md-6 tm-post">
                <hr class="tm-hr-primary">
                <a href="post.html" class="effect-lily tm-post-link tm-pt-60">
                    <div class="tm-post-link-inner">
                        <img src="img/img-01.jpg" alt="Image" class="img-fluid">                            
                    </div>
                    <span class="position-absolute tm-new-badge">New</span>
                    <h2 class="tm-pt-30 tm-color-primary tm-post-title">Simple and useful HTML layout</h2>
                </a>                    
                <p class="tm-pt-30">
                    There is a clickable image with beautiful hover effect and active title link for each post item. 
                    Left side is a sticky menu bar. Right side is a blog content that will scroll up and down.
                </p>
                <div class="d-flex justify-content-between tm-pt-45">
                    <span class="tm-color-primary">Travel . Events</span>
                    <span class="tm-color-primary">June 24, 2020</span>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <span>36 comments</span>
                    <span>by Admin Nat</span>
                </div>
            </article>-->
 
            <div class="tm-site-header ">          
                <h1  style ="color: skyblue;"class="text-center">General User Posts</h1>
            </div>
            <div id ="post">
            <div class="row tm-row">
            
                
            
                @for( $i=0; $i< Count($post); $i++ )
                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                   <!-- <a href="post.html" class="effect-lily tm-post-link tm-pt-60">-->
                        <div class="tm-post-link-inner">
                                                       
                        </div>
                        <span class="position-absolute tm-new-badge">General User</span>
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title"> {{$post[$i]['guid']}}</h2>
                    </a>                    
                    <p class="tm-pt-30">
                         {{$post[$i]['text']}} 
                    </p>
                    <span>  {{$post[$i]['file']}} </span>
                    <div class="d-flex justify-content-between tm-pt-45">
                       
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        
                        <span>Comment</span>
                        <a href="{{route('Admin.deletegupostad',$post[$i]['id'])}}"style="color:red;text-align:right" >Delete</a>
                    </div>
                    
                </article>
                @endfor
                
            
        </div>
        <div lass="row tm-row">
            <div class="tm-site-header ">          
                <h1  style ="color: skyblue;"class="text-center">Admin Posts</h1>
            </div>
            <div id ="post">
            <div class="row tm-row">
            
                
            
                @for( $i=0; $i< Count($adminpost); $i++ )
                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                   <!-- <a href="post.html" class="effect-lily tm-post-link tm-pt-60">-->
                        <div class="tm-post-link-inner">
                                                       
                        </div>
                        <span class="position-absolute tm-new-badge">Admin</span>
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title"> {{$adminpost[$i]['guid']}}</h2>
                    </a>                    
                    <p class="tm-pt-30">
                         {{$adminpost[$i]['text']}} 
                    </p>
                    <span>  {{$adminpost[$i]['file']}} </span>
                    <div class="d-flex justify-content-between tm-pt-45">
                       
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        
                        <span>Comment</span>
                    </div>
                </article>
                @endfor
        </div>
        </div>
        <div class="row tm-row tm-mt-100 tm-mb-75">
           
            
        </div>      
              
        <footer class="row tm-row">
            <hr class="col-12">
            
            
        </footer>
    </main>
</div>
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/Search.js"></script>
</body>
</html>