<?php

namespace App\Http\Controllers;

use App\FlowerShop;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class FlowerShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $shop=FlowerShop::paginate(4);
        return view("admins.flowerShop", [
          "x" => $shop
      ]);
    }

    public function validateRequest($request)
    {
        $request->validate([
            'shop_name'      => 'required',
            'shop_email'     => 'required|email',
            'shop_phone'     => 'required',
            'shop_address'  => 'required',
           
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
        toast(' The store has been added successfully ','success');  
      $this->validateRequest($request);
      
       
                   FlowerShop::create([
                    'shop_name'     =>$request->shop_name,
                    'shop_email'    => $request->shop_email,
                    'shop_phone'    =>$request->shop_phone,
                    'shop_address'  =>$request->shop_address
            ]);
         
                //  return "done";
               
                return redirect("/flowershop");
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FlowerShop  $flowerShop
     * @return \Illuminate\Http\Response
     */
    public function show(FlowerShop $flowerShop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FlowerShop  $flowerShop
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shopedit = FlowerShop::where("id", $id)->get()->first();

        return view("admins.flowershop-edit", [
            "shop" => $shopedit
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FlowerShop  $flowerShop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        toast('The shop has been successfully updated ','success');
        $this->validateRequest($request);
      
     
        
        FlowerShop::where("id", $id)->update([
            'shop_name'     =>$request->shop_name,
            'shop_email'    => $request->shop_email,
            'shop_phone'    =>$request->shop_phone,
            'shop_address'  =>$request->shop_address
        ]);

        return redirect("/flowershop");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FlowerShop  $flowerShop
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        Alert::success('Success delete', 'Success Message');
        $x = FlowerShop::where("id", $id)->delete();
        return redirect("/flowershop"); 
    }
}
