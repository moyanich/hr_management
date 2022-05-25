<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreJobsRequest;
use App\Http\Requests\UpdateJobsRequest;
use Illuminate\Http\Request;
use Datatables;
use App\Models\Jobs;


class JobsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $jobs = Jobs::latest()->get();
            return Datatables::of($jobs)->addIndexColumn()
            ->addColumn('action', function($row){
                $actionBtn = '
                    <td class="px-6 py-4 text-right">
                        <a href="' . route('admin.jobs.show', $row->id) . '" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                ';
                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
        } 

        return view('admin.jobs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreJobsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobsRequest $request)
    {
        //$name = $request->file('file')->getClientOriginalName();
        $file_name = '';
    
        if ($request->file('file')) {
            $file_name = $request->file('file')->hashName();
            $path = $request->file('file')->store('public/files');
        }

        $job = new Jobs;
        $job->name = $request->input('name');
        $job->description = $request->input('description');
        $job->file_path = $file_name;
        
        $job->save();
        
       return redirect()->route('admin.jobs.index')->with('success', 'New Job - ' . $job->name . ' created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function show(Jobs $job)
    {
        return view('admin.jobs.show', ['job' => $job]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJobsRequest  $request
     * @param  \App\Models\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobsRequest $request, Jobs $job)
    {
        $file_name = '';

        if ($request->file('file_update')) {
            $file_name = $request->file('file_update')->hashName();
            $request->file('file_update')->storeAs('files', $file_name, 'public');
        }

        $job = Jobs::findOrFail($job->id);
        $job->name = $request->input('name');
        $job->description = $request->input('description');
        $job->file_path = $file_name;
        $job->save();
        
        return redirect()->back()->with('success', "Job record for " . $job->name . " updated sucessfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jobs $job)
    {
        $job->delete();
        return redirect()->route('admin.jobs.index')
            ->with('success', 'Job record for ' . $job->name . ' deleted successfully!');
    }
}
