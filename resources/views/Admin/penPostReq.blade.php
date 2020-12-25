@include('Admin.menu');
    <div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->
            <div class="tm-site-header ">          
                <h1  style ="color: skyblue;"class="text-center">Pending Post</h1>
            </div>  
            <div class="row tm-row">
                <div class="col-12">
                   
                </div>                
            </div>            
            <div class="row tm-row">
                @for($i=0; $i< count($penpost); $i++ )
                    <article class="col-12 col-md-6 tm-post">
                        <hr class="tm-hr-primary">
                        <a href="post.html" class="effect-lily tm-post-link tm-pt-60">
                            <div class="tm-post-link-inner">
                                                           
                            </div>
                            <span class="position-absolute tm-new-badge">New</span>
                            <h2 class="tm-pt-30 tm-color-primary tm-post-title">{{$penpost[$i]['guid']}}</h2>
                        </a>                    
                        <p class="tm-pt-30">
                             {{$penpost[$i]['text']}}
                             {{$penpost[$i]['file']}}
                        </p>
                        <div class="d-flex justify-content-between tm-pt-45">
                           
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                             
                            <span> <a href="{{route('Admin.approvepenpostreq',$penpost[$i]['id'])}}">Approve</a> </span>
                            <span > <a  style="color: red;"href="{{route('Admin.deletepenpostreq',$penpost[$i]['id'])}}">Remove</a> </span>
                        </div>
                    </article>
                    @endfor
                             
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