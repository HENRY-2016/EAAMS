

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
        EAAMS | Administrators 
        <div class="w3-container" style="float:right">
            <p>Total Admin <span class="w3-badge w3-red">{{$total}}</span></p>
        </div>
    </div>
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal">Add New</button>
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
			<table class="table table-striped"  id="table">
				<thead>
					<tr>
						<th class="text-center">FName</th>
						<th class="text-center">LName</th>
						<th class="text-center">Contact</th>
						<th class="text-center">UserName</th>
						<th class="text-center">Password</th>
						<th class="text-center">Date</th>
						<th class="text-center">Action1</th>
						<th class="text-center">Action2</th>
						<th class="text-center">Action3</th>
					</tr>
				</thead>
				@foreach($data as $row)
				<tr class="row{{$row->id}}">
					<td class="text-center">{{$row->FName}}</td>
					<td class="text-center">{{$row->LName}}</td>
					<td class="text-center">{{$row->Contact}}</td>
					<td class="text-center">{{$row->UserName}}</td>
					<td class="text-center">{{$row->PassWord}}</td>
					<td class="text-center">{{$row->created_at}}</td>
                    <td class="text-center" >
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-id="{{ $row->id }}" data-bs-target="#editModal">  Edit</button>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-id="{{ $row->id }}" data-bs-target="#showModal">Show</button>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-id="{{ $row->id }}" data-bs-target="#deleteModal">Delete</button>
                    </td>
				</tr>
				@endforeach
			</table>


    
    <!-- The add Modal -->
    <div class="modal fade modal-lg" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    
                    <p class="modal-title text-center" >Adding New User</p>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form  action="{{route('AdminResource.store')}}" method="post">
                        
                        {{ csrf_field() }}
                        @include('templates.admin-add')
                        
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
                    <p class="modal-title text-center" >Viewing A User Details</p>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <b><p class="text-start">Name</p></b>
                    <p class="text-start" id="show-Name-id" ></p>
                    <b><p class="text-start">Contact</p></b>
                    <p class="text-start" id="show-contact-id" ></p>
                    <b><p class="text-start">User Name</p></b>
                    <p class="text-start" id="show-username-id" ></p>
                    <b><p class="text-start">Password</p></b>
                    <p class="text-start" id="show-password-id" ></p>
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
                <p class="modal-title text-center" >Editing User</p>
            </div>

            <!-- Modal body -->
            <div class="edit-modal-body">
                <form  action="{{route('AdminResource.update','test')}}" method="post">
                    {{method_field('patch')}}
                    {{ csrf_field() }}
                    @include('templates.admin-edit')
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


    <!-- The delete Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Deleting A User</h5>
            </div>
            
            <!-- Modal body -->
            <div class="delete-modal-body">
                <br><p class="modal-title text-center" >Are Sure You Want To Delete</p><br>
                <p id="Delete-Name" class="text-center" ></p><br>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No Close</button>
                <form  action="{{route('AdminResource.destroy','null')}}" method="post">
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

$('#showModal').on('show.bs.modal', function(event){
    var target = jQuery(event.relatedTarget)
    var id = target.attr('data-bs-id');
    var RequestUrl = "/AdminResource/"+id+"/edit";
    $.get(RequestUrl, function (data) {
        console.log(data)
        var Name = data.data.FName +" "+" "+ data.data.LName;
        $('#showModal').modal('show');
        $('#show-Name-id').html(Name);
        $('#show-contact-id').html(data.data.Contact);
        $('#show-username-id').html(data.data.UserName);
        $('#show-password-id').html(data.data.PassWord);
    })
});

$('#editModal').on('show.bs.modal', function(event){
    var target = jQuery(event.relatedTarget)
    var id = target.attr('data-bs-id');
    var RequestUrl = "/AdminResource/"+id+"/edit";
    $.get(RequestUrl, function (data) {
        $('#editModal').modal('show');
        $('#editId').val(data.data.id);
        $('#edit-FName').val(data.data.FName);
        $('#edit-LName').val(data.data.LName);
        $('#edit-Contact').val(data.data.Contact);
        $('#edit-UserName').val(data.data.UserName);
        $('#edit-Password').val(data.data.PassWord);
    })
});



$('#deleteModal').on('show.bs.modal', function(event){
    var target = jQuery(event.relatedTarget)
    var id = target.attr('data-bs-id');
    var RequestUrl = "/AdminResource/"+id+"/edit";
    $.get(RequestUrl, function (data) {
        $('#deleteModal').modal('show');
        $('#deleteId').val(data.data.id);
        var Name = data.data.FName +" "+" "+ data.data.LName;
        $('#Delete-Name').html(Name);
    })
});


</script>
@include('../../footer')

</body>
</html>

