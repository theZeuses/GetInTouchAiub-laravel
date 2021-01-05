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
                        @csrf               
                        <input class="form-control tm-search-input"id ="usrsrct" name="query" type="text" placeholder="Search..." aria-label="Search">
                       
                                                            
                    </form>
                </div>                
            </div>   
              <div class="tm-site-header ">          
                <h1  style ="color: skyblue;"class="text-center">General user List</h1>
            </div>           
            <div class="row tm-row">
                <div>
                <div id ="userchtab">
                    
               
                    <table border="1">
                        <tr>
                            <th>picture</th>
                            
                            <th>Grneral User Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>DoB</th>
                            <th>Address</th>
                            
                            <th>Action</th>
                        </tr>
                       @for($i=0; $i<count($Gulist); $i++ )
                        <tr>
                            <td> {{$Gulist[$i]['profilepicture']}}</td>
                                
                                <td>{{$Gulist[$i]['guid']}} </td> 
                                <td>{{$Gulist[$i]['name']}} </td>
                                <td> {{$Gulist[$i]['email']}} </td>
                                <td>{{$Gulist[$i]['gender']}} </td>
                                <td>{{$Gulist[$i]['dob']}} </td>
                                <td>{{ $Gulist[$i]['address']}} </td>
                                
                               
                                <td>
                                    <a href="{{route('Admin.ViewCreateNotificationad',$Gulist[$i]['guid'])}}">Notification</a>  |
                                    <a href="{{route('Admin.blockgu',$Gulist[$i]['guid'])}}">Block</a> | 
                                    <a href="{{route('Admin.deletegu',$Gulist[$i]['guid'])}}">Delete</a>  
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
    <script src="{{asset('/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('/assets/js/search.js')}}"></script>
    
</body>
</html>