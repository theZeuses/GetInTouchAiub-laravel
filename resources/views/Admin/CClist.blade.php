@include('Admin.menu'); 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->
            <div class="row tm-row">
                <div class="col-12">
                    <form method="GET" class="form-inline tm-mb-80 tm-search-form">                
                        <input class="form-control tm-search-input"id ="adsearcht" name="query" type="text" placeholder="Search..." aria-label="Search">
                       
                                                            
                    </form>
                </div>                
            </div>   
              <div class="tm-site-header ">          
                <h1  style ="color: skyblue;"class="text-center">Content Controller List</h1>
            </div>           
            <div class="row tm-row">
                <div>
                <div id ="adlist">
                    
               
                    <table border="1">
                        <tr>
                            <th>picture</th>
                            
                            <th>Content Controller Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>DoB</th>
                            <th>Address</th>
                            
                            <th>Action</th>
                        </tr>
                       @for($i=0; $i<count($Cclist); $i++ )
                        <tr>
                            <td> {{$Cclist[$i]['profilepicture']}}</td>
                                
                                <td>{{$Cclist[$i]['ccid']}} </td> 
                                <td>{{$Cclist[$i]['name']}} </td>
                                <td> {{$Cclist[$i]['email']}} </td>
                                <td>{{$Cclist[$i]['gender']}} </td>
                                <td>{{$Cclist[$i]['dob']}} </td>
                                <td>{{ $Cclist[$i]['address']}} </td>
                                
                               
                                <td>
                                    <a href="{{route('Admin.ViewCreateNotificationad',$Cclist[$i]['ccid'])}}">Notification</a>  |
                                    <a href="{{route('Admin.blockcc',$Cclist[$i]['ccid'])}}">Block</a> | 
                                    <a href="{{route('Admin.deletecc',$Cclist[$i]['ccid'])}}">Delete</a>  
                                </td>
                             
                            @endfor
                        </tr>
                    </table>
                     </div>
                </div>   
                             
            </div>            
            <footer class="row tm-row">
                <hr class="col-12">
                
                
            </footer>
        </main>
    </div>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/search.js"></script>
    
</body>
</html>