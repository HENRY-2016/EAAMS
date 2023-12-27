

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tasks</title>

@include('../../header')

</head>
<body class="app-body">
    <div class="body-content" >
    @include('../navigation/navigation')
    <br>

    @if ($message = Session::get('success'))
        <div class="alert alert-primary" role="alert" >
            <p class="text-center">{{$message}}</p>
        </div>
    @endif


    @if ($errors -> any())
        <div  class="alert alert-danger" role="alert">
            <ul>
            @foreach($errors -> all() as $error)
            <li>{{$error}}</li>
            @endforeach
            </ul>
        </div>
    @endif
    <br>

    {{ csrf_field() }}
		<div class="main-body" >
			

            <ul class="nav nav-tabs mb-3" id="ex1" role="tablist">
            <li class="nav-item" role="presentation">
                <a
                class="nav-link active"
                id="ex1-tab-1"
                data-bs-toggle="tab"
                href="#ex1-tabs-1"
                role="tab"
                aria-controls="ex1-tabs-1"
                aria-selected="true"
                >Approved</a
                >
            </li>
            <li class="nav-item" role="presentation">
                <a
                class="nav-link"
                id="ex1-tab-2"
                data-bs-toggle="tab"
                href="#ex1-tabs-2"
                role="tab"
                aria-controls="ex1-tabs-2"
                aria-selected="false"
                >Appraised Employee</a
                >
            </li>
            
            </ul>
            <div class="tab-content" id="ex1-content">
            <div
                class="tab-pane fade show active"
                id="ex1-tabs-1"
                role="tabpanel"
                aria-labelledby="ex1-tab-1"
            >
            <div class="alert alert-primary" role="alert" style="margin-top:10px">
                EAAMS | Tasks
                <div class="w3-container" style="float:right">
                    <p>Total Tasks <span class="w3-badge w3-red">{{$approvedTotal}}</span></p>
                </div>
            </div>
            <table class="table table-striped"  id="table3">
				<thead>
					<tr>
						<th class="text-center">Date</th>
						<th class="text-center">Name</th>
						<th class="text-center">Description</th>
						<th class="text-center">Status</th>
						<th class="text-center">Action1</th>
						<th class="text-center">Action2</th>
					</tr>
				</thead>
				@foreach($approvedData as $row)
				<tr class="row{{$row->id}}">
					<td class="text-center">{{$row->created_at}}</td>
					<td class="text-center">{{GeneralHelper::getEmpName($row->EmpName)}}</td>
					<td class="text-center">{{$row->Description}}</td>
					<td class="text-center">
                        <button type="button" class="btn btn-primary"> Approved</button>
                    </td>

                    <td class="text-center">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-id="{{ $row->id }}" data-bs-target="#approvedModal"
                        data-bs-name="{{GeneralHelper::getEmpName($row->EmpName)}}"
                        >Show</button>
                    </td>
                    <td class="text-center" >
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-id="{{ $row->id }}" data-bs-target="#appraiseModal"
                        data-bs-name="{{GeneralHelper::getEmpName($row->EmpName)}}"
                        data-bs-emp="{{$row->EmpName}}"
                        >Appraise</button>
                    </td>
				</tr>
				@endforeach
			</table>
            </div>
            <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
            <div class="alert alert-primary" role="alert" style="margin-top:10px">
                EAAMS | Appraisals 
                <div class="w3-container" style="float:right">
                    <p>Total Appraisals <span class="w3-badge w3-red">{{$appraisedTotal}}</span></p>
                </div>
            </div>
            <table class="table table-striped"  id="table2">
				<thead>
					<tr>
						<th class="text-center">Created</th>
						<th class="text-center">Name</th>
						<th class="text-center">Department</th>
						<th class="text-center">Action 1</th>
					</tr>
				</thead>
				@foreach($appraisedData as $row)
				<tr class="row{{$row->id}}">
					<td class="text-center">{{$row->created_at}}</td>
					<td class="text-center">{{GeneralHelper::getEmpName($row->id)}}</td>
					<td class="text-center">{{$row->Department}}</td>
                    <td class="text-center">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-id="{{ $row->id }}" data-bs-target="#empDetailsModal"
                        data-bs-name="{{GeneralHelper::getEmpName($row->id)}}"
                        >Show</button>
                    </td>
				</tr>
				@endforeach
			</table>
            </div>
            </div>

            </div>

    <!-- The recording Modal -->
    <div class="modal fade modal-lg" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    
                    <p class="modal-title text-center" >Adding New Task</p>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form  action="{{route('TasksResource.store')}}" method="post">
                        
                        {{ csrf_field() }}
                        @include('templates.task-add')
                    </form>
                </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>

    <!-- The show Modal -->
    <div class="modal fade modal-sm" id="showModal" tabindex="-1" aria-labelledby="showModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <p class="modal-title text-center" >Viewing Tasks Details</p>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <b><p class="text-start">Name</p></b>
                    <p class="text-start" id="show-Name-id" ></p>
                    <b><p class="text-start">Description</p></b>
                    <p class="text-start" id="show-Description-id" ></p>
                </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>

    <!-- The edit Modal -->
    <div class="modal fade modal-lg" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <p class="modal-title text-center" >Editing Task</p>
            </div>

            <!-- Modal body -->
            <div class="edit-modal-body">
                <form  action="{{route('TasksResource.update','null')}}" method="post">
                    {{method_field('patch')}}
                    {{ csrf_field() }}
                    @include('templates.task-edit')
                    <input type="hidden"  id="editId" name="editId" >
                </form>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
    <!-- The emp Details Modal -->
    <div class="modal fade modal-lg" id="empDetailsModal" tabindex="-1" aria-labelledby="empDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <p class="modal-title text-center" >Viewing A User Details</p>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <table class="table">
                    <tr>
                        <td>
                            <b><p class="text-start">Name</p></b>
                            <p class="text-start" id="emp-Name-id" ></p>
                        </td>
                        <td>
                            <b><p class="text-start">Contact</p></b>
                            <p class="text-start" id="show-contact-id" ></p>
                        </td>
                        <td>
                            <b><p class="text-start">User Name</p></b>
                            <p class="text-start" id="show-username-id" ></p>
                        </td>
                        <td>
                            <b><p class="text-start">Address</p></b>
                            <p class="text-start" id="show-address-id" ></p>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <b><p class="text-start">Position</p></b>
                            <p class="text-start" id="show-position-id" ></p>
                        </td>
                        <td>
                            <b><p class="text-start">Department</p></b>
                            <p class="text-start" id="show-Department-id" ></p>
                        </td>
                        <td>
                            @if (session('userType') === 'Admin')
                            <b><p class="text-start">Password</p></b>
                            <p class="text-start" id="show-password-id" ></p>
                            @endif
                        </td>
                    </tr>

                </table>
            </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>

    <!-- The approve Modal -->
    <div class="modal fade " id="appraiseModal" tabindex="-1" aria-labelledby="appraiseModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <p class="modal-title text-center" >Appraising Employee</p>
            </div>

            <!-- Modal body -->
            <div class="edit-modal-body">
                <form  action="{{route('EmployeeResource.store','null')}}" method="post">
                    {{ csrf_field() }}
                    <input value="appraise" name="appraise" type="hidden">
                    <input type="text"  id="EmpId" name="EmpId" >
                    <center>
                        <p class="text-center"><b>Name</b></p>
                        <p id="approve-Name" class="text-center"></p><br>
                        <p class="text-center"><b>Task Description</b></p>
                        <p id="approve-Des" class="text-center"></p>
                        <button type="submit" class="btn btn-primary">Appraise</button> 
                    </center>
                </form>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>

    <!-- The approve Modal -->
    <div class="modal fade " id="approvedModal" tabindex="-1" aria-labelledby="approvedModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <p class="modal-title text-center" >Employee Task</p>
            </div>

            <!-- Modal body -->
            <div class="edit-modal-body">
                    <center>
                    <p class="text-center"><b>Name</b></p>
                    <p id="approved-Name" class="text-center"></p><br>
                    <p class="text-center"><b>Task Description</b></p>
                    <p id="approved-Des" class="text-center"></p>
                    </center>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>

    <!-- The delete Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Deleting A Task</h5>
            </div>
            
            <!-- Modal body -->
            <div class="delete-modal-body">
                <br><p class="modal-title text-center" >Are Sure You Want To Delete</p><br>
                <p id="Delete-Name" class="text-center" ></p><br>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No Close</button>
                <form  action="{{route('TasksResource.destroy','null')}}" method="post">
                    {{ csrf_field() }}
                    {{method_field('DELETE')}}
                    <button  type="submit" class="btn btn-primary" data-bs-dismiss="modal">Yes Delete</button>
                    <input type="hidden"  id="deleteId" name="deleteId" >
                </form>
            </div>
            </div>
        </div>
    </div>



    </div>
    </div>
    <script>

$(document).ready(function() {$('#table').DataTable();});
$(document).ready(function() {$('#table2').DataTable();});
$(document).ready(function() {$('#table3').DataTable();});

$('#showModal').on('show.bs.modal', function(event){
    var target = jQuery(event.relatedTarget)
    var id = target.attr('data-bs-id');
    var RequestUrl = "/TasksResource/"+id+"/edit";
    $.get(RequestUrl, function (data) {
        $('#showModal').modal('show');
        $('#show-Name-id').html(data.data.Name);
        $('#show-Description-id').html(data.data.Description);
    })
});

$('#editModal').on('show.bs.modal', function(event){
    var target = jQuery(event.relatedTarget)
    var id = target.attr('data-bs-id');
    var RequestUrl = "/TasksResource/"+id+"/edit";
    $.get(RequestUrl, function (data) {
        $('#editModal').modal('show');
        $('#editId').val(data.data.id);
        $('#edit-Name').val(data.data.Name);
        $('#edit-Description').val(data.data.Description);
    })
});

$('#appraiseModal').on('show.bs.modal', function(event){
    var target = jQuery(event.relatedTarget)
    var id = target.attr('data-bs-id');
    var name = target.attr('data-bs-name');
    var emp = target.attr('data-bs-emp');
    var RequestUrl = "/TasksResource/"+id+"/edit";
    $.get(RequestUrl, function (data) {
        $('#appraiseModal').modal('show');
        $('#EmpId').val(emp);
        $('#approve-Name').html(name);
        $('#approve-Des').html(data.data.EmpDescription);
    })
});

$('#approvedModal').on('show.bs.modal', function(event){
    var target = jQuery(event.relatedTarget)
    var id = target.attr('data-bs-id');
    var name = target.attr('data-bs-name');
    var RequestUrl = "/TasksResource/"+id+"/edit";
    $.get(RequestUrl, function (data) {
        $('#approvedModal').modal('show');
        $('#approved-Name').html(name);
        $('#approved-Des').html(data.data.EmpDescription);
    })
});

$('#empDetailsModal').on('show.bs.modal', function(event){
    var target = jQuery(event.relatedTarget)
    var id = target.attr('data-bs-id');
    var emp = target.attr('data-bs-emp');
    var RequestUrl = "/EmployeeResource/"+id+"/edit";
    $.get(RequestUrl, function (data) {
        var Name = data.data.FName +" "+" "+ data.data.LName;
        $('#empDetailsModal').modal('show');
        $('#emp-Name-id').html(Name);
        $('#show-contact-id').html(data.data.Contact);
        $('#show-username-id').html(data.data.UserName);
        $('#show-Department-id').html(data.data.Department);
        $('#show-position-id').html(data.data.Position);
        $('#show-account-id').html(data.data.Account);
        $('#show-startDate-id').html(data.data.StartDate);
        $('#show-password-id').html(data.data.PassWord);
    })
});

$('#deleteModal').on('show.bs.modal', function(event){
    var target = jQuery(event.relatedTarget)
    var id = target.attr('data-bs-id');
    var RequestUrl = "/TasksResource/"+id+"/edit";
    $.get(RequestUrl, function (data) {
        $('#deleteModal').modal('show');
        $('#deleteId').val(data.data.id);
        $('#Delete-Name').html(data.data.Name);
    })
});


</script>
@include('../../footer')

</body>
</html>

