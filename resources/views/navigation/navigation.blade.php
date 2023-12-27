
<div class=" w3-teal w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
    <button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close &times;</button>
    @if (session('userType') === 'Employee')
    <a href="{{url('/components/empTasks',['EmpId'=>session('id')])}}" class="w3-bar-item w3-button">Tasks</a>
    <a href="{{url('/profile/employee')}}" class="w3-bar-item w3-button">User Profile</a>

    @endif
    @if (session('userType') === 'HR')
        <a href="{{url('/components/hrTasks')}}" class="w3-bar-item w3-button">Tasks</a>
        <a href="{{url('/components/employee')}}" class="w3-bar-item w3-button">Employee</a>
        <a href="{{url('/profile/humanResource')}}" class="w3-bar-item w3-button">User Profile</a>
    @endif
    @if (session('userType') === 'Admin')
        <a href="{{url('/components/tasks')}}" class="w3-bar-item w3-button">Tasks</a>
        <a href="{{url('/components/employee')}}" class="w3-bar-item w3-button">Employee</a>
        <a href="{{url('/components/admin')}}" class="w3-bar-item w3-button">Administrators</a>
        <a href="{{url('/components/departments')}}" class="w3-bar-item w3-button">Departments</a>
        <a href="{{url('/components/humanResource')}}" class="w3-bar-item w3-button">Human Resource</a>
        <a href="{{url('/profile/admin')}}" class="w3-bar-item w3-button">User Profile</a>
    @endif
</div>

<div id="main">

<div class="w3-teal">
<button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>

  <div style="float:right" >
    <table>
        <tr>
            <td>
                <p class="text-center user-name">{{session('user')}}</p>
            </td>
            <td>
                @if (session('userType') === 'Admin')
                    | Logged In As An {{session('userType')}} |
                    <a  href="{{url('/users/admin/logout')}}" class="btn btn-danger log-out-btn">Log Out</a>
                @endif
                @if (session('userType') === 'Employee')
                    | Logged In As An {{session('userType')}} |
                    <a  href="{{url('/users/employee/logout')}}" class="btn btn-danger log-out-btn">Log Out</a>
                @endif
                @if (session('userType') === 'HR')
                    | Logged In As A Human Resource |
                    <a  href="{{url('/users/humanResource/logout')}}" class="btn btn-danger log-out-btn">Log Out</a>
                @endif
            </td>
        </tr>
    </table>
</div>
</div>


