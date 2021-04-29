<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
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


    public function read()
    {
        $orders = Package::with("flower", "dress", "touristDestination", "suit", "hall", "Photographer")->get();

        // dd($orders);
        // foreach ($orders as $order) {
        //     dump($order->flower->flower_name);
        // }

       
        return view("public.packages", [
            "x" =>  $orders
        ]);
    }
    public function create()
    {
        //
    }
    public function read1()
    {
        $orders = Package::with("flower", "dress", "touristDestination", "suit", "hall", "Photographer")->get();
        return view("indexs", [
            "x" =>  $orders
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
        //
    }
    public function show()
    {
        $package = Package::all();
        // $x = Dress::all()->Bookings()->first()->dress;
        return view('admins.packages', [
            'x' => $package,


        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Package::destroy($id);


        return redirect()->back();
    }
}
