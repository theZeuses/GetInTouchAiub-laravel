@include('Admin.menu');
<div class="container-fluid">
    <main class="tm-main">
<div class="row tm-row">
    <div class="col-12">

        <form method="post" class="form-inline tm-mb-80 tm-search-form">                
           @csrf
          
           <div style="color: red">
            @foreach($errors->all() as $err)
            **
             {{$err}}<br>
        @endforeach
           </div>
            <input class="form-control tm-search-input"Style ="height:150px;width:2000px;margin-top:25px;margin-right:10px" name="post" type="text" placeholder="Post..." aria-label="Search">
            <input style="margin-left  : 45%;margin-top:25px" class=" tm-new-badge" type="submit" name="" value="Create Post">
            
                                         
        </form>         
</div>   
<div>
    
</div>  
<div class="tm-site-header ">          
    <h1  style ="color: skyblue;"class="text-center">Admin Post</h1>
</div>
<div class="row tm-row">
    @for($i=0; $i< count($ownpost); $i++ )
    <article class="col-12 col-md-6 tm-post">
        <hr class="tm-hr-primary">
       <!-- <a href="post.html" class="effect-lily tm-post-link tm-pt-60">-->
            <div class="tm-post-link-inner">
                                           
            </div>
            <span class="position-absolute tm-new-badge">Admin</span>
            <h2 class="tm-pt-30 tm-color-primary tm-post-title">{{$ownpost[$i]['adminid']}}</h2>
        </a>                    
        <p class="tm-pt-30">
             {{$ownpost[$i]['text']}}
        </p>
        <span>{{$ownpost[$i]['file']}} </span>
        <div class="d-flex justify-content-between tm-pt-45">
           
        </div>
        <hr>
        <div class="d-flex justify-content-between">
            
            <span>Posted by Admin :- {{$ownpost[$i]['adminid']}}</span>
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