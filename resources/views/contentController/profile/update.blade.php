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
                <h1>Profile</h1>
                <hr class="tm-hr-primary tm-hr-primary-post">
            </div> 

            @foreach($errors->all() as $err)
                <div class="alert alert-danger" role="alert">
                    {{ $err }}
                </div>
            @endforeach

            <form method="post" enctype="multipart/form-data">
                @csrf
                <div class="row tm-row tm-row-post">
                    <h3>Profile Picture:</h3>     
                    @if($user->profilepicture != null && strlen($user->profilepicture) > 0)
                        <img src="/assets/contentController/pictures/{{$user->profilepicture  }}" id="image-preview" class="profile-img" alt="{{$user->name }}">
                    @else
                        <img src="/assets/contentController/pictures/no-profile-pic.png" id="image-preview" class="profile-img" alt="No profile pic">
                    @endif 
                    <h3><pre>              </pre></h3>
                    <input type="file" name="image" id="image">           
                </div>
                
                <div class="row tm-row tm-row-post">
                    <h3>Name:</h3>              
                    <input class="form-control tm-search-input" name="name" type="text" value="{{old('name', null) != null ? old('name') : $user->name}}" placeholder="Name..">
                </div>
                <div class="row tm-row tm-row-post">
                    <h3>Email:</h3>
                    <input class="form-control tm-search-input" name="email" type="email" value="{{old('email', null) != null ? old('email') : $user->email}}" placeholder="Email..">
                    
                </div>
                <div class="row tm-row tm-row-post">
                    <h3>Gender:</h3>
                </div>
                <div class="row tm-row tm-row-post">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="genderMale" value="Male" {{ $user->gender == 'Male' ? 'checked' : '' }} {{ old('gender') == 'Male' ? 'checked' : '' }}>
                        <label class="form-check-label" for="genderMale">
                        Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="Female" {{ $user->gender == 'Female' ? 'checked' : '' }} {{ old('gender') == 'Female' ? 'checked' : '' }}>
                        <label class="form-check-label" for="genderFemale">
                        Female
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="gender" id="genderOthers" value="Others" {{ $user->gender == 'Others' ? 'checked' : '' }} {{ old('gender') == 'Others' ? 'checked' : '' }}>
                        <label class="form-check-label" for="genderOthers">
                        Others
                        </label>
                    </div>

                </div>
                <div class="row tm-row tm-row-post">
                    <h3>Date of birth:<small>(DD/MM/YYY)</small></h3>
                    <input class="form-control tm-search-input" name="dob" type="text" value="{{old('dob', null) != null ? old('dob') : $user->dob}}" placeholder="DD/MM/YYYY">
                    
                </div>
                <div class="row tm-row tm-row-post">
                    <h3>Address:</h3>
                    <input class="form-control tm-search-input" name="address" type="text" value="{{old('address', null) != null ? old('address') : $user->address}}" placeholder="Address..">
                    
                </div>
                <div class="row tm-row tm-mt-100 tm-mb-75">
                    <input type="submit" name="submit" class="mb-2 tm-btn tm-btn-primary tm-prev-next tm-mr-20" value="Update">
                    <a href="/contentcontroller/profile" class="mb-2 tm-btn tm-btn-primary tm-prev-next tm-mr-20">Back</a>         
                </div>   
            </form> 
            <footer class="row tm-row">
                <hr class="col-12">             
            </footer>
            
        </main>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    {!! Toastr::message() !!}
</body>
</html>