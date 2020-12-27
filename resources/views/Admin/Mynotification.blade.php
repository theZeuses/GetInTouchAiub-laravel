@include('Admin.menu');

<div class="container-fluid">
    <main class="tm-main">
<div class="row tm-row">
             
</div>   
<div>
    
</div>  
<div class="tm-site-header ">          
    <h1  style ="color: skyblue;"class="text-center">Posted notification</h1>
</div>
<div class="row tm-row">
    @for($i=0; $i< count($notice); $i++ )
    <article class="col-12 col-md-6 tm-post">
        <hr class="tm-hr-primary">
       <!-- <a href="post.html" class="effect-lily tm-post-link tm-pt-60">-->
            <div class="tm-post-link-inner">
                                           
            </div>
            <span class="position-absolute tm-new-badge">Admin</span>
            <h2 class="tm-pt-30 tm-color-primary tm-post-title">{{$notice[$i]['adminid']}}</h2>
        </a>                    
        <p class="tm-pt-30">
             {{$notice[$i]['subject']}}
        </p>
        <span>{{$notice[$i]['body']}} </span>
        <div class="d-flex justify-content-between tm-pt-45">
           
        </div>
        <hr>
        <div class="d-flex justify-content-between">
            
            <span>Posted by Admin :- {{$notice[$i]['adminid']}}</span>
        </div>
        <div class="d-flex justify-content-between">
            
            <span style ="color:red">Posted For :- {{$notice[$i]['towhom']}}</span>
        </div>
        <hr>
        <div class="d-flex justify-content-between">
                        
            <a href="{{route('Admin.Editexsistingnotice',$notice[$i]['id'])}}"style="text-align:right" >Edit</a>
            <a href="{{route('Admin.deleteexsistingnotice',$notice[$i]['id'])}}"style="color:red;text-align:right" >Delete</a>
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