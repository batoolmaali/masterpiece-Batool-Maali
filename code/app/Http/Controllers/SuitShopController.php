<?php

namespace App\Http\Controllers;

use App\Suit_shop;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SuitShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shop = Suit_shop::paginate(4);
        return view("admins.suitShop", [
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


        Suit_shop::create([
            'shop_name'     => $request->shop_name,
            'shop_email'    => $request->shop_email,
            'shop_phone'    => $request->shop_phone,
            'shop_address'  => $request->shop_address
        ]);

        //  return "done";
        return redirect("/shopsuit");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Suit_shop  $suit_shop
     * @return \Illuminate\Http\Response
     */
    public function show(Suit_shop $suit_shop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Suit_shop  $suit_shop
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shopedit = Suit_shop::where("id", $id)->get()->first();

        return view("admins.shopsuit-edit", [
            "shop1" => $shopedit
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Suit_shop  $suit_shop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        toast('The shop has been successfully updated ','success');
        $this->validateRequest($request);



        Suit_shop::where("id", $id)->update([
            'shop_name'     => $request->shop_name,
            'shop_email'    => $request->shop_email,
            'shop_phone'    => $request->shop_phone,
            'shop_address'  => $request->shop_address
        ]);

        return redirect("/shopsuit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Suit_shop  $suit_shop
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { Alert::success('Success delete', 'Success Message');
        $x = Suit_shop::where("id", $id)->delete();
        return redirect("/shopsuit");
    }
}
