<?php

namespace App\Http\Controllers;

use App\Suit;
use App\Suit_shop;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class SuitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suit = Suit::paginate(4);
        $shop = Suit_shop::all();
        return view("admins.suit", [
            "x" => $suit,
            "y" => $shop
        ]);
    }
    public function validateRequest($request)
    {
        $request->validate([
            'suit_name'     => 'required|min:5',
            'suit_size'  => 'required',
            'suit_color'     => 'required',
            'suit_price'     => 'required',
            'special_price'     => 'required',
            'is_available'     => 'required',
            'suit_desc'     => 'required',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $Suit = Suit::paginate(6);
        return view("public.suits", [
            "x" => $Suit
        ]);
    }

    public function single($id)
    {


        $all = Suit::latest()->take(4)->get();
        $shop = Suit::find($id)->suitShop;
        // dd($shop);
        $show = Suit::find($id);
        return view('public.suit-single', [
            'shop'   => $shop,
            'suit' => $show,
            'all' => $all

        ]);
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
        toast('Suit added successfully ','success');
        $this->validateRequest($request);
        if ($request->hasFile('suit_image')) {
            $file = $request->file('suit_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('images', $filename);
        } else {
            $filename = 'profile.jpg';
        }

        Suit::create([
            'suit_name'      => $request->suit_name,
            'suit_size'      => $request->suit_size,
            'suit_color'     => $request->suit_color,
            'suit_price'     => $request->suit_price,
            'special_price'     => $request->special_price,
            'suit_image'     => $filename,
            'is_available'    => $request->is_available,
            'suit_shop_id'    => $request->select,
            'suit_desc'      => $request->suit_desc

        ]);

        //  return "done";
        return redirect("/suit");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Suit  $suit
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Suit  $suit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $suitedit = Suit::where("id", $id)->get()->first();
        $shop = Suit_shop::all();
        return view("admins.suit-edit", [
            "suit" => $suitedit,
            "shop"  => $shop
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Suit  $suit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        toast('The suit has been successfully updated ','success');
        $this->validateRequest($request);

        if ($request->hasFile('suit_image')) {
            $file = $request->file('suit_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('images', $filename);
        } else {
            $filename = 'profile.jpg';
        }

        Suit::where("id", $id)->update([
            'suit_name'      => $request->suit_name,
            'suit_size'      => $request->suit_size,
            'suit_color'     => $request->suit_color,
            'suit_price'     => $request->suit_price,
            'special_price'     => $request->special_price,
            'suit_image'     => $filename,
            'is_available'    => $request->is_available,
            'suit_shop_id'    => $request->select,
            'suit_desc'      => $request->suit_desc
        ]);

        return redirect("/suit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Suit  $suit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alert::success('Success delete', 'Success Message');
        $x = Suit::where("id", $id)->delete();
        return redirect("/suit");
    }
}
