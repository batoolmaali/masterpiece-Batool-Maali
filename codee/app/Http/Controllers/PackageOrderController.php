<?php

namespace App\Http\Controllers;

use App\PackageOrder;
use Illuminate\Http\Request;

class PackageOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // dd($request->id);
        PackageOrder::where("user_id", auth()->user()->id)->where("package_id", "!=", null)->get();
        PackageOrder::create(["user_id" => auth()->user()->id, "package_id" => $request->id]);

        // return "done";
        return redirect("/packageorder");
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\PackageOrder  $packageOrder
     * @return \Illuminate\Http\Response
     */

    public function read()
    {
        $orders = auth()->user()->packageOrds()->with("flower", "dress", "touristDestination", "suit", "hall", "Photographer","package")->get();

        // dd($orders);
        // foreach ($orders as $order) {
        //     dump($order->flower->flower_name);
        // }

        // dd("a");
        return view("public.packageOrders", [
            "x" =>  $orders
        ]);
    }
    public function show(PackageOrder $packageOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PackageOrder  $packageOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(PackageOrder $packageOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PackageOrder  $packageOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PackageOrder $packageOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PackageOrder  $packageOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $x = PackageOrder::where("id", $id)->delete();
        return redirect("/packageorder");
    }
}
