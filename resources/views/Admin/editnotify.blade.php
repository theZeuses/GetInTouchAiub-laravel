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
                       
                     <table>
                         
                         <tr  style="text-align:center">
                            <td>
                             <h2 class="tm-pt-30 tm-color-primary tm-post-title">User Id :</h2>
                            </td>
                            <td>
                            <input style="height : 70px;"class="form-control tm-search-input" name="userid" type="text" placeholder="" aria-label="Uid" value="{{$ntc[0]['towhom']}}" readonly >
                            </td>
                         </tr>
                          <tr  style="text-align:center">
                            <td>
                             <h2 class="tm-pt-30 tm-color-primary tm-post-title">Admin Id :</h2>
                            </td>
                            <td>
                            <input style="height : 70px;"class="form-control tm-search-input" name="adminid" type="text" placeholder="" aria-label="country"value="{{$ntc[0]['adminid']}}"  readonly>
                            </td>
                         </tr>
                            <tr  style="text-align:center">
                                <td>
                                <h2 class="tm-pt-30 tm-color-primary tm-post-title">Subject :</h2>
                                </td>
                                <td>
                                <input style="height : 70px;"class="form-control tm-search-input"  name="subject" type="text" placeholder="subject...." aria-label="vplace" value="{{$ntc[0]['subject']}}">
                                </td>
                            </tr>
                          <tr  style="text-align:center">
                            <td>
                             <h2 class="tm-pt-30 tm-color-primary tm-post-title">Body :</h2>
                            </td>
                            <td>
                            <input style="height : 170px;"class="form-control tm-search-input"  name="body" type="text" placeholder="Enter Your Notice Here.." aria-label="shistory"value="{{$ntc[0]['body']}}" >
                            </td>
                         </tr>
                         
                         <tr >
                         <td colspan="2">
                          <input style="margin-left  : 45%;margin-top:25px" class=" tm-new-badge" type="submit" name="" value="Edit">
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