<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Dress;
use Illuminate\Http\Request;

class BookingController extends Controller
{

   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function order()
    {
       
        // $dress = Booking::all();
        // $x = Dress::all()->Bookings()->first()->dress;
        // $x = Dress::with('bookings')->get();
        $x = Booking::with('dress')->where("dress_id" ,"!=", null)->get();
        $y = Booking::with('flower')->where("flower_id" ,"!=", null)->get();
        $z = Booking::with('hall')->where("hall_id" ,"!=", null)->get();
        $a = Booking::with('suit')->where("suit_id" ,"!=", null)->get();
        $t = Booking::with('touristDestination')->where("tourist_destination_id" ,"!=", null)->get();
        $p = Booking::with('Photographer')->where("photographer_id" ,"!=", null)->get();
        // dd($x);

        return view('admins.order', [
            'x' => $x,
            'y' => $y,
            'z' => $z,
            'a' => $a,
            't' => $t,
            'p' => $p,
            

        ]);
    }

    public function Tourist_destinations(Request  $request)
    {
        // dd($request->id);
        Booking::where("user_id", auth()->user()->id)->where("tourist_destination_id", "!=", null)->get();
        Booking::create(["user_id" => auth()->user()->id, "Tourist_destination_id" => $request->id]);
        return redirect("/book");
        // return "done";
        //        dd(Order::where("user_id", auth()->user()->id)->where("hall_id" ,"!=", null)->get());
        //        dd(Order::where("user_id", auth()->user()->id)->get());
        //        dd(auth()->user()->orders);
        //        dd(auth()->user()->orders()->where("hall_id" ,"!=", null)->get());
        //        dd(auth()->user()->orders()->with('dress')->first());
        //        dd(auth()->user()->orders()->first()->dress);
    }
    public function flower(Request  $request)
    {
        // dd($request->id);
        Booking::where("user_id", auth()->user()->id)->where("flower_id", "!=", null)->get();
        Booking::create(["user_id" => auth()->user()->id, "flower_id" => $request->id]);

        // return "done";
        return redirect("/book");
        // read hall only
        //        dd(Order::where("user_id", auth()->user()->id)->where("hall_id" ,"!=", null)->get());
        // all order user
        //        dd(Order::where("user_id", auth()->user()->id)->get());
        // all order user relations
        //        dd(auth()->user()->orders);
        // read only hull relations
        //        dd(auth()->user()->orders()->where("hall_id" ,"!=", null)->get());

        //        dd(auth()->user()->orders()->with('dress')->first());

        //        dd(auth()->user()->orders()->first()->dress);
    }
    public function dress(Request  $request)
    {
        // dd($request->id);
        Booking::where("user_id", auth()->user()->id)->where("dress_id", "!=", null)->get();
        Booking::create(["user_id" => auth()->user()->id, "dress_id" => $request->id]);

        // return "done";
        return redirect("/book");
    }
    public function hall(Request  $request)
    {
        // dd($request->id);
        Booking::where("user_id", auth()->user()->id)->where("hall_id", "!=", null)->get();
        Booking::create(["user_id" => auth()->user()->id, "hall_id" => $request->id]);

        // return "done";
        return redirect("/book");
    }
    public function suit(Request  $request)
    {
        // dd($request->id);
        Booking::where("user_id", auth()->user()->id)->where("suit_id", "!=", null)->get();
        Booking::create(["user_id" => auth()->user()->id, "suit_id" => $request->id]);

        // return "done";
        return redirect("/book");
    }
    public function  Photographer(Request  $request)
    {
        // dd($request->id);
        Booking::where("user_id", auth()->user()->id)->where("photographer_id", "!=", null)->get();
        Booking::create(["user_id" => auth()->user()->id, "photographer_id" => $request->id]);

        // return "done";
        return redirect("/book");
    }

    /**
     * Show the form for creating a new resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function read()
    {
        $orders = auth()->user()->bookings()->with("flower", "dress", "touristDestination", "suit", "hall", "Photographer")->get();

        // dd($orders);
        // foreach ($orders as $order) {
        //     dump($order->flower->flower_name);
        // }

        // dd("a");
        return view("public.order", [
            "x" =>  $orders
        ]);
    }




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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $x = Booking::where("id", $id)->delete();
        return redirect("/book");
    }
}
