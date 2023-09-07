

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin</title>

@include('../../header')

</head>
<body class="app-body">
    <div class="body-content" >
        @include('../navigation/navigation')
        <div class="alert alert-primary" role="alert" style="margin-top:10px">
            EAAMS | Admin | Profile
            
        </div>
        <a href="{{url('/profile/admin')}}" class="btn btn-success">Profile</a>
        <div class="main-body ">
            <br>
            <center>
                <div class="card text-white bg-success mb-3" style="max-width: 30rem;">
                    <div class="card-header">{{session('user')}}</div>
                    <div class="card-body">
                        <h5 class="card-title">User</h5>
                        <p class="card-text">{{session('userType')}}</p>
                        <h5 class="card-title">Contact</h5>
                        <p class="card-text">{{session('contact')}}</p>
                    </div>
                </div>
            </center>
        </div>
    </div>
    
@include('../../footer')

</body>
</html>

