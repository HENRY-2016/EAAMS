<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeModel;

class EmployeeController extends Controller
{

    public function index()
    {
        $data = EmployeeModel::latest()->get ();
        $total = EmployeeModel::count();
        return view('components/employee', compact('data','total'));
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
        $store = $request->input('store');
        $appraise = $request->input('appraise');

        if(!empty($appraise))
        {
            $empId = $request->EmpId;

            $form_data = array('Appraise'=>'yes');
            EmployeeModel::whereId ($empId)->update($form_data);
        return redirect('/components/hrTasks')
            ->with('success','Employee Is Successfully Appraised');
        }
        if(!empty($store))
        {
        $request -> validate ([
            'FName' => 'required',
            'LName' => 'required',
            'Contact' => 'required',
            'UserName'  => 'required',
            'Password' => 'required',
            'Address'=> 'required',
            'Position'=> 'required',
            'department'=> 'required',
        ]);

        // insert Data
        $form_data = array(
            'FName' => $request->FName,
            'LName' => $request->LName,
            'UserName'  => $request->UserName,
            'Contact'  => $request->Contact,
            'Password' => $request->Password,
            'Address'=> $request->Address,
            'Position'=> $request->Position,
            'StartDate'=> 'null',
            'Salary'=> 'null',
            'Account'=> 'null',
            'Appraise'=>'no',
            'Department'=> $request->department,


        );
        EmployeeModel::create ($form_data);
        return redirect('EmployeeResource')
            ->with('success','Data Added successfully.');
        }
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $data = EmployeeModel::findOrFail($id);
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
        $data = EmployeeModel::findOrFail($id);
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
            'Password' => 'required',
            'Address'=> 'required',
            'Position'=> 'required',
            'department'=> 'required',
        ]);

        // Update Data
        $form_data = array(
            'FName' => $request->FName,
            'LName' => $request->LName,
            'UserName'  => $request->UserName,
            'Contact'  => $request->Contact,
            'Password' => $request->Password,
            'Address'=> $request->Address,
            'Position'=> $request->Position,
            'Department'=> $request->department,
        );
        // update
        EmployeeModel::whereId ($rowId)->update($form_data);
        return redirect('EmployeeResource')
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
        $data = EmployeeModel::findOrFail($rowId);
        $data ->delete();
        return redirect('EmployeeResource')
            ->with('success','Data Is Successfully Deleted');
    }
}
