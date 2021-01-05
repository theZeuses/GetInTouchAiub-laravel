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
                               
            </div>   
              <div class="tm-site-header ">          
                <h1  style ="color: skyblue;"class="text-center">Account Controller pending List</h1>
            </div>           
            <div class="row tm-row">
                <div>
                <div id ="adlist">
                    @if(count($acpendinglist)>0)
               
                    <table border="1">
                        <tr>

                            <th>Acount Controller Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>DoB</th>
                            <th>Address</th>
                            
                            <th>Action</th>
                        </tr>
                       @for($i=0; $i<count($acpendinglist); $i++ )
                        <tr>
                          
                                
                                <td>{{$acpendinglist[$i]->Acid}} </td> 
                                <td>{{$acpendinglist[$i]->name}} </td>
                                <td> {{$acpendinglist[$i]->email}} </td>
                                <td>{{$acpendinglist[$i]->gender}} </td>
                                <td>{{$acpendinglist[$i]->dob}} </td>
                                <td>{{ $acpendinglist[$i]->address}} </td>
                                
                               
                                <td>
                                    <a href="{{route('Admin.approveac',$acpendinglist[$i]->Acid)}}">Approve</a> 
                                </td>
                             
                            @endfor
                            @endif

                           
                            

                        </tr>
                    </table>
                     </div>
                </div>   
            </div>   
            <div class="tm-site-header ">          
              <h1  style ="color: skyblue;"class="text-center">Content Controller pending List</h1>
          </div>           
          <div class="row tm-row">
              <div>
              <div id ="adlist">
                  
                @if(count($ccpendinglist)>0)
                  <table border="1">
                      <tr>

                          <th>Content Controller Id</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Gender</th>
                          <th>DoB</th>
                          <th>Address</th>
                          
                          <th>Action</th>
                      </tr>
                     @for($i=0; $i<count($ccpendinglist); $i++ )
                      <tr>
                        
                              
                              <td>{{$ccpendinglist[$i]->Ccid}} </td> 
                              <td>{{$ccpendinglist[$i]->name}} </td>
                              <td> {{$ccpendinglist[$i]->email}} </td>
                              <td>{{$ccpendinglist[$i]->gender}} </td>
                              <td>{{$ccpendinglist[$i]->dob}} </td>
                              <td>{{ $ccpendinglist[$i]->address}} </td>
                              
                             
                              <td>
                                  <a href="{{route('Admin.approvecc',$ccpendinglist[$i]->Ccid)}}">Approve</a> 
                              </td>
                           
                          @endfor
                          @endif
                         
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