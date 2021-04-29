<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company=Company::paginate(4);
        return view("admins.company", [
          "x" => $company
      ]);
    }
    public function validateRequest($request)
    {
        $request->validate([
            'company_name'      => 'required',
            'company_email'     => 'required|email',
            'company_phone'     => 'required',
             'company_address'  => 'required',
           
        ]);
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
        toast('The company has been added successfully ','success');
      $this->validateRequest($request);
      
       
                 Company::create([
                    'company_name'     =>$request->company_name,
                    'company_email'    => $request->company_email,
                    'company_phone'    =>$request->company_phone,
                    'company_address'  =>$request->company_address,
               
            ]);
         
                //  return "done";
                return redirect("/company");
      
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $companyedit = Company::where("id", $id)->get()->first();

        return view("admins.company-edit", [
            "company" => $companyedit
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        toast('The company has been successfully updated  ','success');
        $this->validateRequest($request);
      
     
        
        Company::where("id", $id)->update([
            'company_name'     =>$request->company_name,
            'company_email'    => $request->company_email,
            'company_phone'    =>$request->company_phone,
            'company_address'  =>$request->company_address,
        ]);

        return redirect("/company");
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        Alert::success('Success delete', 'Success Message');
        $x = Company::where("id", $id)->delete();
        return redirect("/company"); 
    }
}
