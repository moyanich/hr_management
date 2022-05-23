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
       // $jobs = Jobs::select(['id', 'name', 'description'])->orderBy('id', 'asc')->paginate(20); 


        if ($request->ajax()) {
            $jobs = Jobs::latest()->get();
            return Datatables::of($jobs)->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '
                        <div class="flex">
                            <a href="' . route('admin.jobs.show', $row->id) . '" class="flex items-center btn btn-primary btn-sm mr-2 mb-1" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </a>

                            <button class="flex items-center btn btn-error btn-sm mb-1" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>

                        </div>
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
        $job->file_path =  $file_name;
        
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

        if ($request->file('file')) {
            $file_name = $request->file('file')->hashName();
            $path = $request->file('file')->store('public/files');
        }

        $job = Jobs::findOrFail($job->id);
        $job->name = $request->input('name');
        $job->description = $request->input('description');
        $job->file_path =  $file_name;

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
