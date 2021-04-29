<?php

namespace App\Http\Controllers;

use App\TourismOffices;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class TourismOfficesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $office=TourismOffices::paginate(4);
        return view("admins.tourism-offices", [
          "x" =>  $office
      ]);
    }
    public function validateRequest($request)
    {
        $request->validate([
            'office_name'      => 'required',
            'office_email'     => 'required|email',
            'office_phone'     => 'required',
             'office_address'  => 'required',
           
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
        toast('The office has been added successfully ','success');
      $this->validateRequest($request);
      
       
                   TourismOffices::create([
                    'office_name'     =>$request->office_name,
                    'office_email'    => $request->office_email,
                    'office_phone'    =>$request->office_phone,
                    'office_address'  =>$request->office_address,
               
            ]);
         
                //  return "done";
                return redirect("/tourism-offices");
      
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\TourismOffices  $tourismOffices
     * @return \Illuminate\Http\Response
     */
    public function show(TourismOffices $tourismOffices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TourismOffices  $tourismOffices]
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $officedit = TourismOffices::where("id", $id)->get()->first();

        return view("admins.tourismOffices-edit", [
            "office" => $officedit
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TourismOffices  $tourismOffices
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        toast('The office has been successfully updated ','success');
        $this->validateRequest($request);
      
     
        
        TourismOffices::where("id", $id)->update([
            'office_name'     =>$request->office_name,
            'office_email'    => $request->office_email,
            'office_phone'    =>$request->office_phone,
            'office_address'  =>$request->office_address,
        ]);

        return redirect("/tourism-offices");
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TourismOffices  $tourismOffices
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        Alert::success('Success delete', 'Success Message');
        $x = TourismOffices::where("id", $id)->delete();
        return redirect("/tourism-offices"); 
    }
}
