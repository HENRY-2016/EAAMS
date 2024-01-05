

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
						<th class="text-center">Date</th>
						<th class="text-center">Name</th>
						<th class="text-center">Description</th>
						<th class="text-center">Action1</th>
						<th class="text-center">Action2</th>
						<th class="text-center">Action3</th>
					</tr>
				</thead>
				@foreach($data as $row)
				<tr class="row{{$row->id}}">
					<td class="text-center">{{$row->created_at}}</td>
					<td class="text-center">{{$row->Name}}</td>
					<td class="text-center">{{$row->Description}}</td>
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
                    
                    <p class="modal-title text-center" >Adding New Department</p>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form  action="{{route('DepartmentsResource.store')}}" method="post">
                        
                        {{ csrf_field() }}
                        @include('templates.departments-add')
                        
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
                    <p class="modal-title text-center" >Viewing Departments Details</p>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <b><p class="text-start">Name</p></b>
                    <p class="text-start" id="show-Name-id"></p>
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
                <p class="modal-title text-center" >Editing A Department</p>
            </div>

            <!-- Modal body -->
            <div class="edit-modal-body">
                <form  action="{{route('DepartmentsResource.update','test')}}" method="post">
                    {{method_field('patch')}}
                    {{ csrf_field() }}
                    @include('templates.departments-edit')
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
                <h5 class="modal-title" id="deleteModalLabel">Deleting A Department</h5>
            </div>
            
            <!-- Modal body -->
            <div class="delete-modal-body">
                <br><p class="modal-title text-center" >Are Sure You Want To Delete</p><br>
                <p id="Delete-Name" class="text-center" ></p><br>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No Close</button>
                <form  action="{{route('DepartmentsResource.destroy','null')}}" method="post">
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
      var RequestUrl = baseUrl+"/DepartmentsResource/"+id+"/edit";
      $.get(RequestUrl, function (data) {
      $('#showModal').modal('show');
      $('#show-Name-id').html(data.data.Name);
      $('#show-Description-id').html(data.data.Description);
      })
      });

      $('#editModal').on('show.bs.modal', function(event){
      var target = jQuery(event.relatedTarget)
      var id = target.attr('data-bs-id');
      var RequestUrl = baseUrl+"/DepartmentsResource/"+id+"/edit";
      $.get(RequestUrl, function (data) {
      $('#editModal').modal('show');
      $('#editId').val(data.data.id);
      $('#edit-Name').val(data.data.Name);
      $('#edit-Description').val(data.data.Description);
      })
      });


      $('#deleteModal').on('show.bs.modal', function(event){
      var target = jQuery(event.relatedTarget)
      var id = target.attr('data-bs-id');
      var RequestUrl = baseUrl+"/DepartmentsResource/"+id+"/edit";
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

