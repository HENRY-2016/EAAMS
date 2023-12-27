<div class="my-grid-container" >
    <div class="my-grid-item">
        <input class="text-input-fields" type="text"  id="add-FName" name="FName" autocomplete="off" required="required" placeholder="FName">
    </div>

    <div class="my-grid-item ">
        <input class="text-input-fields" type="text"  id="add-LName" name="LName" autocomplete="off" required="required" placeholder="LName">
    </div>

    <div class="my-grid-item ">
        <input class="text-input-fields" type="text"  id="add-Contact" name="Contact" autocomplete="off" required="required" placeholder="Contact">
    </div>

    <div class="my-grid-item ">
        <input class="text-input-fields" type="text"  id="add-Address" name="Address" autocomplete="off" required="required" placeholder="Address">
    </div>

    <div class="my-grid-item ">
        <input class="text-input-fields" type="text"  id="add-Position" name="Position" autocomplete="off" required="required" placeholder="Position">
    </div>

    <div class="my-grid-item ">
        <select class="text-input-fields" type="text"  id="add-Department" name="department"  required="required">
            <option></option>
            @foreach (App\Models\DepartmentsModel::get(['Name']) as $name)
                <option value="{{$name->Name}}" >{{$name->Name}}</option>
            @endforeach
            <option></option>
        </select>
    </div>

    <div class="my-grid-item ">
        <input class="text-input-fields" type="text"  id="add-UserName" name="UserName" autocomplete="off" required="required" placeholder="UserName">
    </div>

    <input type="hidden" value="store" name="store" >

    <div class="my-grid-item ">
        <input  class="text-input-fields" type="password" id="add-Password" name="Password" autocomplete="off" required="required" placeholder="Password" name="Password">
    </div>
    <div class="my-grid-item ">
        <button type="submit" class="btn btn-primary">Save Data</button> 
    </div>
</div>
