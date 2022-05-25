<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSalaryScalesRequest;
use App\Http\Requests\UpdateSalaryScalesRequest;
use App\Models\SalaryScales;

class SalaryScalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.salaryscales.index');
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
    public function show(SalaryScales $salaryScales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SalaryScales  $salaryScales
     * @return \Illuminate\Http\Response
     */
    public function edit(SalaryScales $salaryScales)
    {
        //
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
        //
    }
}
