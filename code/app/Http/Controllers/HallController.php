<?php

namespace App\Http\Controllers;
use App\Company;
use App\Hall;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class HallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hall=Hall::paginate(4);
        $company=Company::all();
        return view("admins.hall", [
          "x" => $hall,
          "y" => $company
      ]);
        
    }
    public function validateRequest($request)
    {
        $request->validate([
            'hall_name'     => 'required|min:5',
            'hall_address'  => 'required',
            'hall_type'     => 'required',
            'hall_price'     => 'required',
            'special_price'     => 'required',
            'persons_number' => 'required',
            'is_available'     => 'required',
            'hall_desc'     => 'required'
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
        // dd($request);
        toast('The hall has been added successfully  ','success');
      $this->validateRequest($request);
      if ($request->hasFile('hall_image')) {
        $file = $request->file('hall_image') ;
        $ext = $file->getClientOriginalExtension() ;
        $filename = time() . '.' . $ext ;
        $file->move('images', $filename);
    } else{
        $filename = 'profile.jpg';
    }
       
                    Hall::create([
                        'hall_name'     => $request->hall_name,
                        'hall_address'  =>  $request->hall_address,
                        'hall_type'     => $request->hall_type,
                        'hall_price'     => $request->hall_price,
                        'special_price'     => $request->special_price,
                        'persons_number' => $request->persons_number,
                        'is_available'   => $request->is_available,
                        'hall_image'     =>$filename ,
                        'company_id'     =>$request->select,
                        'hall_desc'     =>$request->hall_desc
                       
            ]);
         
                //  return "done";
                return redirect("/hall");
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hall  $hall
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $hall=Hall::paginate(2);
        return view("public.hall", [
          "hall" => $hall
      ]);
    }
    public function single($id)
    {
     
          
            $shop=Hall::find($id)->company;
            $show=Hall::find($id);
            $all=Hall::latest()->take(3)->get();
           return view('public.hall-single',[
           'company1'   => $shop,
           'hall' => $show,
           'all'   =>$all
           
       ]);
    
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hall  $hall
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $halledit = Hall::where("id", $id)->get()->first();
        $company=Company::all();
        return view("admins.hall-edit", [
            "hall" =>  $halledit,
            "company"  => $company
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hall  $hall
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        toast('The hall has been successfully updated ','success');
        $this->validateRequest($request);
      
        if ($request->hasFile('hall_image')) {
          $file = $request->file('hall_image') ;
          $ext = $file->getClientOriginalExtension() ;
          $filename = time() . '.' . $ext ;
          $file->move('images', $filename);
      } else{
          $filename = 'profile.jpg';
      }
        
      Hall::where("id", $id)->update([
        'hall_name'     => $request->hall_name,
                        'hall_address'  =>  $request->hall_address,
                        'hall_type'     => $request->hall_type,
                        'hall_price'     => $request->hall_price,
                        'special_price'     => $request->special_price,
                        'persons_number' => $request->persons_number,
                        'is_available'   => $request->is_available,
                        'hall_image'     =>$filename ,
                        'company_id'     =>$request->select,
                        'hall_desc'     =>$request->hall_desc

                       
        ]);

        return redirect("/hall");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hall  $hall
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        Alert::success('Success delete', 'Success Message');
        $x = Hall::where("id", $id)->delete();
        return redirect("/hall"); 
    }

}
