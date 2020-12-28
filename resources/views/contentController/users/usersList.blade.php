@include('contentController.menu')
    <div class="container-fluid">
        <main class="tm-main">  
            <div class="form-inline tm-mb-80 tm-search-form">                
                <input id="query-userList" class="form-control tm-search-input" name="query-userList" type="text" placeholder="Search by Name..."  aria-label="Search">
            </div>
            <div class="row tm-row">
                <h1>General Users</h1>
                
                <hr class="tm-hr-primary tm-hr-primary-post">
            </div>       
            <div class="row tm-row tm-row-post">
                <div id="update-user-list">
                      <table class="table table-custom">
                        <thead class="thead-light">
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            <!--<div id="update-user-list">-->
                                @for($i=0; $i< count($userlist); $i++ )
                                    <tr>
                                        <td>{{ $userlist[$i]->guid }}</td>
                                        <td>{{ $userlist[$i]->name }}</td>
                                        <td>{{ $userlist[$i]->email }}</td>
                                        <td>
                                            <div class="tm-prev-next-wrapper d-inline">
                                                <a href="{{ route('contentController.userProfile',$userlist[$i]->id) }}" class="mb-2 tm-btn tm-btn-primary tm-prev-next tm-mr-20">Profile</a>
                                                <a href="{{ route('contentController.userReport',$userlist[$i]->id) }}" class="mb-2 tm-btn tm-btn-primary tm-prev-next">Report</a>
                                            </div> 
                                        </td>
                                    </tr>
                                @endfor
                            <!--</div>-->
                        </tbody>
                      </table>
                </div>   
                            
            </div>            
            <footer class="row tm-row">
                <hr class="col-12">
                
                
            </footer>
        </main>
    </div>
    <script src="/assets/js/templatemo-script.js"></script>