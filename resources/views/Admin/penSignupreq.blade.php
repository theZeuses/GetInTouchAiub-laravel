@include('Admin.menu');
    <div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->
            <div class="tm-site-header ">          
                <h1  style ="color: skyblue;"class="text-center">Pending Signup</h1>
            </div>  
            <div class="row tm-row">
                <div class="col-12">
               
                </div>
                         
            </div>            
            <div class="row tm-row">
                <div>
                    <table border="1">
                        <tr>
                            <th>picture</th>
                            
                            <th>Acc Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>DoB</th>
                            <th>Address</th>
                            <th>User Type</th>
                            <th>Action</th>
                        </tr>
                        @for($i=0; $i< count($pensignup); $i++ )
                        <tr>
                            <td> {{$pensignup[$i]['profilepicture']}}</td>
                               
                                <td>{{ $pensignup[$i]['guid']}}</td>
                                <td> {{$pensignup[$i]['name']}}</td>
                                <td>{{$pensignup[$i]['email']}}</td>
                                <td>{{$pensignup[$i]['gender']}}</td>
                                <td> {{$pensignup[$i]['dob']}} </td>
                                <td>{{$pensignup[$i]['address']}}</td>
                                <td>{{$pensignup[$i]['userstatus']}}</td>
                               
                                <td>
                                    <a href="{{route('Admin.approvepensignupreq',$pensignup[$i]['guid'])}}">Approve</a> |
                                    <a style="color: red;" href="/Adminhome/removegureq/{{$pensignup[$i]['guid']}}">Delete</a>  
                                </td>
                            
                            @endfor
                        </tr>
                    </table>
                </div>   
                             
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