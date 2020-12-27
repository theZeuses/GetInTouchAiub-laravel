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
                <h1  style ="color: skyblue;"class="text-center">Admin  List</h1>
            </div>           
            <div class="row tm-row">
                <div>
                <div id ="adlist">
                    
               
                    <table border="1">
                        <tr>
                            <th>picture</th>
                            
                            <th>Admin Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>DoB</th>
                            <th>Address</th>
                            
                            <th>Action</th>
                        </tr>
                       @for($i=0; $i<count($adminlist); $i++ )
                        <tr>
                            <td> {{$adminlist[$i]['profilepicture']}}</td>
                                
                                <td>{{$adminlist[$i]['adminid']}} </td> 
                                <td>{{$adminlist[$i]['name']}} </td>
                                <td> {{$adminlist[$i]['email']}} </td>
                                <td>{{$adminlist[$i]['gender']}} </td>
                                <td>{{$adminlist[$i]['dob']}} </td>
                                <td>{{ $adminlist[$i]['address']}} </td>
                                
                               
                                <td>
                                    <a href="{{route('Admin.ViewCreateNotificationad',$adminlist[$i]['adminid'])}}">Notification</a> 
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