@include('Admin.menu');
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Profile</title>
      <script src="/assets/js/search.js"></script>
      <script src="/assets/js/jquery-2.1.4.min.js"></script>
	<link rel="stylesheet" href="/assets/fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/templatemo-xtra-blog.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
<!--
    
TemplateMo 553 Xtra Blog

https://templatemo.com/tm-553-xtra-blog

-->
</head>
<div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->
            <div class="row tm-row">
                <div class="col-12">
                   
                   <div style="color: red">
                    @foreach($errors->all() as $err)
                **
                {{$err}}<br>
                @endforeach
                </div>
                     <form method="post" class="form-inline tm-mb-80">   
                        @csrf
                         <input type="text"name="id"value="{{$info[0]['id']}}"hidden>
                     <table>
                         <tr  style="text-align:center">
                            <td colspan="2">
                                <input style="height : 70px;width:100px;margin-left:20%;"class="tm-search-input" name="name" type="image" placeholder=" Upload new pic" aria-label="Pic" >
                            
                            </td>
                         </tr>
                         <tr>
                            <td colspan='2'>
                                <h2 style="margin-left:40%;margin-bottom:20px;margin-bottom:20px"class="tm-pt-30 tm-color-primary tm-post-title">Upload Your Picture</h2>
                                </td>
                         </tr>
                          <tr  style="text-align:center">
                            <td>
                             <h2 class="tm-pt-30 tm-color-primary tm-post-title">Name :</h2>
                            </td>
                            <td>
                            <input style="height : 70px;"class="form-control tm-search-input" name="name" type="text" placeholder=" Name.." aria-label="country" value=" {{$info[0]['name']}}" >
                            </td>
                         </tr>
                            <tr  style="text-align:center">
                                <td>
                                <h2 class="tm-pt-30 tm-color-primary tm-post-title">Email :</h2>
                                </td>
                                <td>
                                <input style="height : 70px;"class="form-control tm-search-input"  name="email" type="email" placeholder="something@mail.com" aria-label="vplace"value=" {{$info[0]['email']}} " >
                                </td>
                            </tr>
                          <tr  style="text-align:center">
                            <td>
                             <h2 class="tm-pt-30 tm-color-primary tm-post-title">Address :</h2>
                            </td>
                            <td>
                            <input style="height : 170px;"class="form-control tm-search-input"  name="add" type="text" placeholder="Address.." aria-label="shistory" value=" {{$info[0]['address']}} ">
                            </td>
                         </tr>
                         
                          
                         <tr  style="text-align:center">
                            <td>
                             <h2 class="tm-pt-30 tm-color-primary tm-post-title">DOB :</h2>
                            </td>
                            <td>
                            <input style="height : 70px;"class="form-control tm-search-input"  name="dob" type="text" placeholder="Cost.." aria-label="cost"value=" {{$info[0]['dob']}} ">
                            </td>
                         </tr>
                          
                         <tr >
                         <td colspan="2">
                          <input style="margin-left  : 45%;margin-top:25px" class=" tm-new-badge" type="submit" name="" value="Edit Account">
                         </td>
                         </tr>
                        
                          <tr >
                         <td colspan="2">
                          <input style="margin-left  : 52%;margin-top:25px" class=" tm-new-badge" type="button" onclick="location.href='{{route('Admin.ViewProfilead')}}'" name="" value="Back">
                         </td>
                         </tr>
                         
                     </table>
                       
                        
                                                      
                    </form>
                </div>                
            </div>           
               
                
                
            </footer>
        </main>
    </div>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/Search.js"></script>
</body>
</html>