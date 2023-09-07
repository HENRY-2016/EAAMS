<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;
use App\Models\EmployeeModel;
use App\Models\HumanResourceModel;

class UserAuthenticationController extends Controller
{
    function adminLogIn (Request $request)
    {
        $UserName = $request->UserName;
        $Password = $request->Password;

        $data = AdminModel::where('UserName',$UserName)
        ->where('Password',$Password)
        ->get(['FName','LName','Contact','UserName','Password','id']);

        $length = count ($data);
        if ($length == 0) 
        {
            return redirect('admin/login')
            ->with('error','Sorry No User Records Found');
            }

        elseif ($length !== 0)
        {
            $UserType = "Admin";
            $DbFName =  $data[0]["FName"];
            $DbId =  $data[0]["id"];
            $DbLName =  $data[0]["LName"];
            $DbContact =  $data[0]["Contact"];
            $DbUserName =  $data[0]["UserName"];
            $DbPassword =  $data[0]["Password"];

            $UserFullName = $DbFName. " " . " ". $DbLName; 


            if (($DbUserName === $UserName) && ($DbPassword === $Password))
            {
                $request->session()->put('user',$UserFullName);
                $request->session()->put('id',$DbId);
                $request->session()->put('contact',$DbContact);
                $request->session()->put('userType',$UserType);
                return redirect('profile/admin');
            }
        }
    }

    function employeeLogIn (Request $request)
    {
        $UserName = $request->UserName;
        $Password = $request->Password;

        $data = EmployeeModel::where('UserName',$UserName)
        ->where('Password',$Password)
        ->get(['FName','LName','Address','Position','Account','Salary','StartDate','Contact','UserName','Password','id']);
        $length = count ($data);
        if ($length == 0) 
        {
            return redirect('employee/login')
            ->with('error','Sorry No User Records Found');
            }

        elseif ($length !== 0)
        {
            $UserType = "Employee";
            $DbFName =  $data[0]["FName"];
            $DbId =  $data[0]["id"];
            $DbLName =  $data[0]["LName"];
            $DbContact =  $data[0]["Contact"];
            $DbAddress =  $data[0]["Address"];
            $DbPosition =  $data[0]["Position"];
            $DbStartDate =  $data[0]["StartDate"];
            $DbSalary =  $data[0]["Salary"];
            $DbAccount =  $data[0]["Account"];
            $DbUserName =  $data[0]["UserName"];
            $DbPassword =  $data[0]["Password"];

            $UserFullName = $DbFName. " " . " ". $DbLName; 


            if (($DbUserName === $UserName) && ($DbPassword === $Password))
            {
                $request->session()->put('user',$UserFullName);
                $request->session()->put('id',$DbId);
                $request->session()->put('contact',$DbContact);
                $request->session()->put('address',$DbAddress);
                $request->session()->put('position',$DbPosition);
                $request->session()->put('startDate',$DbStartDate);
                $request->session()->put('salary',$DbSalary);
                $request->session()->put('account',$DbAccount);
                $request->session()->put('userType',$UserType);
                return redirect('profile/employee');
            }
        }
    }

    function humanResourceLogIn (Request $request)
    {
        $UserName = $request->UserName;
        $Password = $request->Password;

        $data = HumanResourceModel::where('UserName',$UserName)
        ->where('Password',$Password)
        ->get(['FName','LName','UserName','StartDate','Password','id']);

        $length = count ($data);
        if ($length == 0) 
        {
            return redirect('HumanResource/login')
            ->with('error','Sorry No User Records Found');
            }

        elseif ($length !== 0)
        {
            $UserType = "HR";
            $DbFName =  $data[0]["FName"];
            $DbId =  $data[0]["id"];
            $DbLName =  $data[0]["LName"];
            $DbUserName =  $data[0]["UserName"];
            $DbStartDate = $data[0]["StartDate"];
            $DbPassword =  $data[0]["Password"];

            $UserFullName = $DbFName. " " . " ". $DbLName; 


            if (($DbUserName === $UserName) && ($DbPassword === $Password))
            {
                $request->session()->put('user',$UserFullName);
                $request->session()->put('id',$DbId);
                $request->session()->put('id',$DbStartDate);
                $request->session()->put('userType',$UserType);
                return redirect('profile/humanResource');
            }
        }
    }
}
