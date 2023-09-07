<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HumanResourceModel;

class HumanResourceController extends Controller
{
    
    public function index()
    {
        $data = HumanResourceModel::latest()->get ();
        $total = HumanResourceModel::count();
        return view('components/humanResource', compact('data','total'));
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
            'FName' => 'required',
            'LName' => 'required',
            'Contact' => 'required',
            'UserName'  => 'required',
            'StartDate'=>'required',
            'Password' => 'required',
        ]);

        // insert Data
        $form_data = array(
            'FName' => $request->FName,
            'LName' => $request->LName,
            'UserName'  => $request->UserName,
            'Contact'  => $request->Contact,
            'StartDate' => $request->StartDate,
            'Password' => $request->Password,

        );
        HumanResourceModel::create ($form_data);
        return redirect('HumanResource')
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
        $data = HumanResourceModel::findOrFail($id);
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
        $data = HumanResourceModel::findOrFail($id);
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
            'FName' => 'required',
            'LName' => 'required',
            'UserName'  => 'required',
            'Contact'  => 'required',
            'StartDate'=>'required',
            'Password' => 'required',
        ]);

        // Update Data
        $form_data = array(
            'FName' => $request->FName,
            'LName' => $request->LName,
            'UserName'  => $request->UserName,
            'Contact'  => $request->Contact,
            'StartDate'=>$request->StartDate,
            'Password' => $request->Password,
        );
        // update
        HumanResourceModel::whereId ($rowId)->update($form_data);
        return redirect('HumanResource')
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

            echo "rowId";
        // delete
        $data = HumanResourceModel::findOrFail($rowId);
        $data ->delete();
        return redirect('HumanResource')
            ->with('success','Data Is Successfully Deleted');
    }
}
