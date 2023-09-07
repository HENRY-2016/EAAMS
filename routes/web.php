<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\UserAuthenticationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HumanResourceController;
use App\Http\Controllers\EmployeeController;

use App\Models\AdminModel;
use App\Models\EmployeeModel;
use App\Models\HumanResourceModel;



// migrate db tables
Route::get('/migrate', function(){
    Artisan::call('migrate'); 
    dd('Migrations Done!');
});

//Clear route cache:
Route::get('/cache-clear', function() {
    Artisan::call('route:cache');
    return 'Routes cache cleared';
});

//Clear config cache:
Route::get('/config-cache', function() {
    Artisan::call('config:cache');
    return 'Config cache cleared';
}); 

// Clear application cache:
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return 'Application cache cleared';
});

// Clear view cache:
Route::get('/view-clear', function() {
    Artisan::call('view:clear');
    return 'View cache cleared';
});

 //Clear route cache:
Route::get('/route-cache', function() {
    Artisan::call('route:cache');
    return 'Routes cache cleared';
});

//Clear config cache:
Route::get('/config-cache', function() {
    Artisan::call('config:cache');
    return 'Config cache cleared';
}); 








Route::get('/', function () {return view('welcome');});

// Logins
Route::get('/employee/login', function () {return view('login/employee');});
Route::get('/admin/login', function () {return view('login/admin');});
Route::get('/humanResource/login', function () {return view('login/humanResource');});

Route::post('users/admin/login',[UserAuthenticationController ::class,'adminLogIn']);
Route::post('users/employee/login',[UserAuthenticationController ::class,'employeeLogIn']);
Route::post('users/humanResource/login',[UserAuthenticationController ::class,'humanResourceLogIn']);



// Log out
Route::get('users/admin/logout', function () 
{
    if (session()->has('user')){session()->pull('user');}
    return redirect('/admin/login');
});

Route::get('users/employee/logout', function () 
{
    if (session()->has('user')){session()->pull('user');}
    return redirect('/employee/login');
});

Route::get('users/humanResource/logout', function () 
{
    if (session()->has('user')){session()->pull('user');}
    return redirect('/humanResource/login');
});

// Profile
Route::get('/profile/admin', function () 
{
    if (session()->has('user')) {return view('profile/admin');}
    return view('welcome');
});
Route::get('/profile/employee', function () 
{
    if (session()->has('user')) {return view('profile/employee');}
    return view('welcome');
});
Route::get('/profile/humanResource', function () 
{
    if (session()->has('user')) {return view('profile/humanResource');}
    return view('welcome');
});


// Components
Route::get('/components/admin', function () 
{
    if (session()->has('user')) {
        $data = AdminModel::latest()->get();
        $total = AdminModel::count();

        return view('components/admin', compact('data','total'));
    }
    return view('welcome');
});

Route::get('/components/humanResource', function () 
{
    if (session()->has('user')) {
        $data = HumanResourceModel::latest()->get();
        $total = HumanResourceModel::count();

        return view('components/humanResource', compact('data','total'));
    }
    return view('welcome');
});
Route::get('/components/employee', function () 
{
    if (session()->has('user')) {
        $data = EmployeeModel::latest()->get ();
        $total = EmployeeModel::count();

        return view('components/employee', compact('data','total'));
    }
    return view('welcome');
});
// Route::get('/components/courses', function () 
// {
//     if (session()->has('user')) {
//         $data = CoursesModel::latest()->get ();
//         $total = CoursesModel::count();
//         return view('components/courses', compact('data','total'));
//     }
//     return view('welcome');
// });
// Route::get('/components/safety', function () 
// {
//     if (session()->has('user')) {
//         $data = SafetyModel::latest()->get ();
//         $total = SafetyModel::count();
//         return view('components/safety', compact('data','total'));
//     }
//     return view('welcome');
// });




// resources
Route::resource('AdminResource',AdminController::class);
Route::resource('EmployeeResource',EmployeeController::class);
Route::resource('HumanResource',HumanResourceController::class);
// Route::resource('CoursesResource',CoursesController::class);
// Route::resource('SafetyResource',SafetyController::class);
