<div class="my-grid-container" >
    <div class="my-grid-item">
        <select class="text-input-fields" type="text"  id="add-Name" name="Name" autocomplete="off" required="required" placeholder="Name">
            <option></option>
            @foreach(App\Models\TasksModel::where('Status','Pending')->get('Name') as $name)
                <option value="{{$name->Name}}">{{$name->Name}}</option>
            @endforeach
            <option></option>
        </select>
    </div>

    <div class="my-grid-item ">
        <input class="text-input-fields" type="text"  id="add-Description" name="Description" autocomplete="off" required="required" placeholder="Description">
    </div>
    <input type="hidden" value="{{session('id')}}" name="EmpId">
    <input type="hidden" value="empAdd" name="empAdd">

    <div class="my-grid-item ">
        <button type="submit" class="btn btn-primary">Save Data</button> 
    </div>
</div>