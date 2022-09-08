<?php

namespace App\Http\Controllers;

use App\Http\Requests\Applicant\StoreRequest;
use App\Models\ApplicantTable;
use Illuminate\Http\Request;

class ApplicantTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applicants = ApplicantTable::get();
        return view('applicant.index', compact('applicants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('applicant.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $validated = $request->validated();
        ApplicantTable::create($validated);
        return redirect()->route('applicant.index')->with('success', 'Applicant has been successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ApplicantTable  $applicantTable
     * @return \Illuminate\Http\Response
     */
    public function show(ApplicantTable $applicantTable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ApplicantTable  $applicantTable
     * @return \Illuminate\Http\Response
     */
    public function edit(ApplicantTable $applicant)
    {
        // dd($applicant);
        return view('applicant.edit',compact('applicant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ApplicantTable  $applicantTable
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRequest $request, ApplicantTable $applicant)
    {
        $validated = $request->validated();
        // dd($validated);
        $applicant->update($validated);
        return redirect()->route('applicant.index')->with('success', 'Applicant has been successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ApplicantTable  $applicantTable
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApplicantTable $applicantTable)
    {
        //
    }
}
