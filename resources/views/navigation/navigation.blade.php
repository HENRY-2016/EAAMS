
<div class=" w3-teal w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
    <button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close &times;</button>
    <a href="{{url('/components/admin')}}" class="w3-bar-item w3-button">Admin</a>
    <a href="{{url('/components/employee')}}" class="w3-bar-item w3-button">Employee</a>
    <a href="{{url('/components/humanResource')}}" class="w3-bar-item w3-button">Human Resource</a>
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
                    <a  href="/users/admin/logout" class="btn btn-danger log-out-btn">Log Out</a>
                @endif
                @if (session('userType') === 'Employee')
                    | Logged In As An {{session('userType')}} |
                    <a  href="/users/employee/logout" class="btn btn-danger log-out-btn">Log Out</a>
                @endif
                @if (session('userType') === 'HR')
                    | Logged In As A Human Resource |
                    <a  href="/users/humanResource/logout" class="btn btn-danger log-out-btn">Log Out</a>
                @endif
            </td>
        </tr>
    </table>
</div>
</div>


