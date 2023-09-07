

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Employee</title>

@include('../../header')

</head>
<body class="app-body">
    <div class="body-content" >
        @include('../navigation/navigation')
        <div class="alert alert-primary" role="alert" style="margin-top:10px">
            EAAMS | Employee | Profile
            
        </div>
        <a href="{{url('/profile/employee')}}" class="btn btn-success">Profile</a>
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal">Check In - Out</button>
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal">Activities</button>
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
                        <h5 class="card-title">Address</h5>
                        <p class="card-text">{{session('address')}}</p>
                        <h5 class="card-title">Position</h5>
                        <p class="card-text">{{session('position')}}</p>
                        <h5 class="card-title">Start Date</h5>
                        <p class="card-text">{{session('startDate')}}</p>
                        <h5 class="card-title">Salary</h5>
                        <p class="card-text">{{session('salary')}}</p>
                        <h5 class="card-title">Account Number</h5>
                        <p class="card-text">{{session('account')}}</p>
                    </div>
                </div>
            </center>
        </div>
    </div>
    
@include('../../footer')

</body>
</html>

