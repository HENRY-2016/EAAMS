<?php

namespace App\Http\Controllers;

use App\Models\DepartmentsModel;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    public function index()
    {
        $data = DepartmentsModel::latest()->get ();
        $total = DepartmentsModel::count();
        return view('components/departments', compact('data','total'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
    //
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $request -> validate ([
            'Name' => 'required',
            'Description' => 'required',
        ]);

        // insert Data
        $form_data = array(
            'Name' => $request->Name,
            'Description' => $request->Description,
        );
        DepartmentsModel::create ($form_data);
        return redirect('DepartmentsResource')
            ->with('success','Data Added successfully.');
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $data = DepartmentsModel::findOrFail($id);
        // echo json_encode($data);
        return view('admin/doctor/show', compact('data'));
        // echo $data;
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
        $data = DepartmentsModel::findOrFail($id);
        return response()->json(['data' => $data]);
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
        $rowId = $request->editId;

        $request -> validate ([
            'Name' => 'required',
            'Description' => 'required',
        ]);

        // Update Data
        $form_data = array(
            'Name' => $request->Name,
            'Description' => $request->Description,
        );
        // update
        DepartmentsModel::whereId ($rowId)->update($form_data);
        return redirect('DepartmentsResource')
            ->with('success','Data Is Successfully Updated');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy(Request $request, $id)
    {
        $rowId = $request->deleteId;

        // delete
        $data = DepartmentsModel::findOrFail($rowId);
        $data ->delete();
        return redirect('DepartmentsResource')
            ->with('success','Data Is Successfully Deleted');
    }
}
