<?php

namespace App\Http\Controllers;

use App\Models\TasksModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        $data = TasksModel::latest()->get ();
        $total = TasksModel::count ();
        $approveData = TasksModel::where('Status','Finished')->get ();
        $approveTotal = TasksModel::where('Status','Finished')->count ();
        $approvedData = TasksModel::where('Approval','Approved')->get ();
        $approvedTotal = TasksModel::where('Approval','Approved')->count ();
        return view('components/tasks', compact('data','total','approveData','approveTotal','approvedData','approvedTotal'));
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
        $empAdd = $request->input('empAdd');
        $approve = $request->input('approve');

        if(!empty($empAdd))
        {
            $request -> validate ([
                'Name' => 'required',
                'Description' => 'required',
            ]);

            // insert Data
            $form_data = array(
                'Name' => $request->Name,
                'EmpDescription' => $request->Description,
                'EmpName'  => $request->EmpId,
                'EmpDate'  => date('Y-m-d'),
                'Status'=> 'Finished',
            );
            TasksModel::where('Name', $request->Name)->update($form_data);
            $empId = $request->EmpId;
            $data = TasksModel::where('EmpName',$empId)->get();
            $total = TasksModel::where('EmpName',$empId)->count();
			$tasksData = TasksModel::where('Status','Pending')->get();
        $tasksTotal = TasksModel::where('Status','Pending')->count();
            return view('components/empTasks', compact('data','total','tasksTotal','tasksData'));
			 
        }
        if(!empty($approve))
        {
            $approveId = $request->approveId;

            // insert Data
            $form_data = array('Approval'=> 'Approved');
            TasksModel::whereId($approveId)->update($form_data);
            return redirect('TasksResource')
                ->with('success','Employee Was Approved Successfully.');
        }


        if(!empty($store))
        {
            $request -> validate ([
                'Name' => 'required',
                'Description' => 'required',
            ]);

            // insert Data
            $form_data = array(
                'Name' => $request->Name,
                'Description' => $request->Description,
                'EmpName'  => 'null',
                'EmpDate'  => 'null',
                'Approval' => 'null',
                'EmpDescription'=>'null',
                'Status'=> 'Pending',
            );
            TasksModel::create ($form_data);
            return redirect('TasksResource')
                ->with('success','Data Added successfully.');
        }
    }

    public function empTasksView(Request $request)
    {
        $empId = $request->EmpId;
        $data = TasksModel::where('EmpName',$empId)->get();
        $total = TasksModel::where('EmpName',$empId)->count();
        $tasksData = TasksModel::where('Status','Pending')->get();
        $tasksTotal = TasksModel::where('Status','Pending')->count();
        return view('components/empTasks', compact('data','total','tasksTotal','tasksData'));

    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $data = TasksModel::findOrFail($id);
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
        $data = TasksModel::findOrFail($id);
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
        TasksModel::whereId ($rowId)->update($form_data);
        return redirect('TasksResource')
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
        $data = TasksModel::findOrFail($rowId);
        $data ->delete();
        return redirect('TasksResource')
            ->with('success','Data Is Successfully Deleted');
    }
}
