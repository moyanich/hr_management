<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSalaryScalesRequest;
use App\Http\Requests\UpdateSalaryScalesRequest;
use App\Models\SalaryScales;
use Illuminate\Http\Request;

class SalaryScalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$salaries = SalaryScales::all(); 
        // return view('admin.salaryscales.index')->with('salaries', $salaries);
        $salaries = SalaryScales::select(['id', 'series', 'group'])->orderBy('id', 'asc')->paginate(10); 
        return view('admin.salaryscales.index', compact('salaries'))
        ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSalaryScalesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSalaryScalesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SalaryScales  $salaryScales
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $salaryScale = SalaryScales::find($id);
        return view('admin.salaryscales.show', ['salaryScale' => $salaryScale]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SalaryScales  $salaryScales
     * @return \Illuminate\Http\Response
     */
    public function edit(SalaryScales $salaryScale)
    {
        return view('admin.salaryscales.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSalaryScalesRequest  $request
     * @param  \App\Models\SalaryScales  $salaryScales
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSalaryScalesRequest $request, SalaryScales $salaryScales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SalaryScales  $salaryScales
     * @return \Illuminate\Http\Response
     */
    public function destroy(SalaryScales $salaryScales)
    {
        $salaryScales->delete();
        return redirect()->route('admin.salaryscales.index')
            ->with('success', 'Salary record for ' . $salaryScales->series . ' deleted successfully!');
    }
}
