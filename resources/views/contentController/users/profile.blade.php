<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GetInTouchAiub</title>
</head>
<body>
    @include('contentController.menu')
    <div class="container-fluid">
        <main class="tm-main">       
            <div class="row tm-row announcement__header">
                <h1>User Profile</h1>
                <hr class="tm-hr-primary tm-hr-primary-post">
            </div>
            @if($user->profilepicture != null && count($user->profilepicture) > 0)
                <img src="/assets/pictures/{{$user->profilepicture  }} " class="profile-img" alt="{{$user->name }}">
            @else
                <img src="/assets/pictures/no-profile-pic.png" class="profile-img" alt="No profile pic">
            @endif  
            <div class="row tm-row tm-row-post">
                <h3>Name:</h3>{{$user->name}}
            </div>
            <div class="row tm-row tm-row-post">
                <h3>ID:</h3>{{$user->guid}}
            </div>
            <div class="row tm-row tm-row-post">
                <h3>Email:</h3>{{$user->email}}
            </div>
            <div class="row tm-row tm-row-post">
                <h3>Gender:</h3>{{$user->gender}}
            </div>
            <div class="row tm-row tm-row-post">
                <h3>Date of birth:</h3>{{$user->dob}}
            </div>
            <div class="row tm-row tm-row-post">
                <h3>Address:</h3>{{$user->address}}
            </div>
            <div class="row tm-row tm-row-post">
                <h3>User Status:</h3>{{$user->userstatus}}
            </div>
            <div class="row tm-row tm-row-post">
                <h3>Account Status:</h3>{{$user->accountstatus}}
            </div>
            <div class="row tm-row tm-mt-100 tm-mb-75">
                <div class="tm-prev-next-wrapper">
                    <a href="/contentcontroller/users" class="mb-2 tm-btn tm-btn-primary tm-prev-next tm-mr-20">Back</a>
                </div>               
            </div>    
            <footer class="row tm-row">
                <hr class="col-12">             
            </footer>
            
        </main>
    </div>
</body>
</html>