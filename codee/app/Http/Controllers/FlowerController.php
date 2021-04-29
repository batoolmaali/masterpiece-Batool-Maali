<?php

namespace App\Http\Controllers;

use App\FlowerShop;
use App\Flower;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class FlowerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flower = Flower::paginate(8);
        $shop1 = FlowerShop::all();
        return view("admins.flower", [
            "x" =>  $flower,
            "y" => $shop1
        ]);
    }
    public function validateRequest($request)
    {
        $request->validate([
            'flower_name'     => 'required|min:5',
            'flower_color'  => 'required',
            'flower_type'     => 'required',
            'flower_price'     => 'required',
            'special_price'     => 'required',
            'is_available'     => 'required',
            'flower_desc'     => 'required',
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
    public function single($id)
    {
    

        $shop = Flower::find($id)->flowerShop;
        // dd($shop);
        $show = Flower::find($id);
        $all = Flower::latest()->take(4)->get();
        return view('public.flower-single', [
            'shop'   => $shop,
            'flower' => $show,
            'all'   => $all
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
        toast('The flower has been added successfully','success');
        $this->validateRequest($request);
        if ($request->hasFile('flower_image')) {
            $file = $request->file('flower_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('images', $filename);
        } else {
            $filename = 'profile.jpg';
        }

        Flower::create([
            'flower_name'     => $request->flower_name,
            'flower_color'  => $request->flower_color,
            'flower_type'     => $request->flower_type,
            'flower_price'     => $request->flower_price,
            'special_price'     => $request->special_price,
            'is_available'     => $request->is_available,
            'flower_image'     => $filename,
            'flower_shop_id'    => $request->select,
            'flower_desc'     => $request->flower_desc,

        ]);

        //  return "done";
        return redirect("/flower");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Flower  $flower
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $flower = Flower::paginate(10);
        return view("public.flowers", [
            "x" => $flower
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Flower  $flower
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $floweredit = Flower::where("id", $id)->get()->first();
        $shop = FlowerShop::all();
        return view("admins.flower-edit", [
            "flower" => $floweredit,
            "shop"  => $shop
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Flower  $flower
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        toast('The flower has been successfully updated ','success');
        $this->validateRequest($request);

        if ($request->hasFile('flower_image')) {
            $file = $request->file('flower_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('images', $filename);
        } else {
            $filename = 'profile.jpg';
        }

        Flower::where("id", $id)->update([
            'flower_name'     => $request->flower_name,
            'flower_color'  => $request->flower_color,
            'flower_type'     => $request->flower_type,
            'flower_price'     => $request->flower_price,
            'special_price'     => $request->special_price,
            'is_available'     => $request->is_available,
            'flower_image'     => $filename,
            'flower_shop_id'    => $request->select,
            'flower_desc'     => $request->flower_desc,
        ]);

        return redirect("/flower");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Flower  $flower
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alert::success('Success delete', 'Success Message');
        $x = Flower::where("id", $id)->delete();
        return redirect("/flower");
    }
}
