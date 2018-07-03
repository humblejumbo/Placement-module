<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class Companycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies=Company::all();
        return view('company-index',compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('company-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $company = new Company;
        $company->CompanyName=$request->input('CompanyName');
        $company->IncorporationStatus=$request->input('Sector');
        $company->Sector=$request->input('IncorporationStatus');
        $company->Scale=$request->input('Scale');
        $company->Address=$request->input('Address');
        $company->Pin=$request->input('Pin');
        $company->Country=$request->input('Country');
        $company->State=$request->input('State');
        $company->District=$request->input('District');
        $company->Pno=$request->input('Pno');
        $company->Fno=$request->input('Fno');
        $company->Email=$request->input('Email');
        $company->Website=$request->input('Website');
        $company->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
