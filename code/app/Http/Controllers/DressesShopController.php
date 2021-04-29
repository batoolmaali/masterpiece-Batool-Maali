<?php

namespace App\Http\Controllers;

use App\DressesShop;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DressesShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shop=DressesShop::paginate(4);
        return view("admins.shopdresses", [
          "y" => $shop
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
      
       
                    DressesShop::create([
                    'shop_name'     =>$request->shop_name,
                    'shop_email'    => $request->shop_email,
                    'shop_phone'    =>$request->shop_phone,
                    'shop_address'  =>$request->shop_address
            ]);
         
                //  return "done";
                return redirect("/shopdresses");
      
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\DressesShop  $dressesShop
     * @return \Illuminate\Http\Response
     */
    public function show(DressesShop $dressesShop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DressesShop  $dressesShop
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shopedit = DressesShop::where("id", $id)->get()->first();

        return view("admins.shopdresses-edit", [
            "shop1" => $shopedit
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DressesShop  $dressesShop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        toast('The shop has been successfully updated ','success');
        $this->validateRequest($request);
      
     
        
        DressesShop::where("id", $id)->update([
            'shop_name'     =>$request->shop_name,
            'shop_email'    => $request->shop_email,
            'shop_phone'    =>$request->shop_phone,
            'shop_address'  =>$request->shop_address
        ]);

        return redirect("/shopdresses");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FlowerShop  $flowerShop
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){

        Alert::success('Success delete', 'Success Message');
        $x = DressesShop::where("id", $id)->delete();
        return redirect("/shopdresses"); 
    }
}
