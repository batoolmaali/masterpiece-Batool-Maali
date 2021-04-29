<?php

namespace App\Http\Controllers;

use App\Dress;
use App\Flower;
use App\TourismOffices;
use App\TouristDestination;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class TouristDestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tourist = TouristDestination::paginate(4);
        $office = TourismOffices::all();
        return view("admins.Tourist_destinations", [
            "x" => $tourist,
            "y" => $office
        ]);
    }
    public function validateRequest($request)
    {
        $request->validate([
            'city_name'              => 'required|min:5',
            'price'                  => 'required',
            'max_pacenger_count'     => 'required',
            'current_pacenger_count' => 'required',
            'number_of_days'         => 'required',
            'is_available'           => 'required',
            'special_price'           => 'required',
            'city_desc'           => 'required',
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
        toast('City has been added successfully ','success');
        $this->validateRequest($request);
        if ($request->hasFile('city_image')) {
            $file = $request->file('city_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('images', $filename);
        } else {
            $filename = 'profile.jpg';
        }

        TouristDestination::create([
            'city_name'             => $request->city_name,
            'price'                  =>  $request->price,
            'max_pacenger_count'     => $request->max_pacenger_count,
            'current_pacenger_count'  => $request->current_pacenger_count,
            'number_of_days'          => $request->number_of_days,
            'persons_number'          => $request->persons_number,
            'is_available'            => $request->is_available,
            'city_image'              => $filename,
            'tourism_office_id'       => $request->select,
            'special_price'           => $request->special_price,
            'city_desc'              => $request->city_desc

        ]);

        //  return "done";
        return redirect("/Tourist_destinations");
    }

    public function public()
    {
        $flower = Flower::first()->take(3)->get();
        $tourist = TouristDestination::first()->take(3)->get();
        return view('public.index', [
            "x" => $tourist,
            "y" => $flower
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TouristDestination  $touristDestination
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $tourist = TouristDestination::paginate(6);
        return view('public.tourist', [
            "x" => $tourist
        ]);
    }
    public function single($id)
    {
        //    $shop=TourismOffices::find($id);

        $office = TouristDestination::find($id)->Office;
        //   dd($office);
        $show = TouristDestination::find($id);
        $all = TouristDestination::latest()->take(4)->get();
        return view('public.tourist1-single', [
            'office'   => $office,
            'city' => $show,
            'all' => $all,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TouristDestination  $touristDestination
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $touristedit = TouristDestination::where("id", $id)->get()->first();
        $office = TourismOffices::all();
        return view("admins.Tourist-edit", [
            "tourist" =>  $touristedit,
            "office"  => $office
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TouristDestination  $touristDestination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        toast('The city has been successfully updated ','success');
        $this->validateRequest($request);

        if ($request->hasFile('city_image')) {
            $file = $request->file('city_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('images', $filename);
        } else {
            $filename = 'profile.jpg';
        }

        TouristDestination::where("id", $id)->update([
            'city_name'             => $request->city_name,
            'price'                  =>  $request->price,
            'max_pacenger_count'     => $request->max_pacenger_count,
            'current_pacenger_count'  => $request->current_pacenger_count,
            'number_of_days'          => $request->number_of_days,
            'is_available'            => $request->is_available,
            'city_image'              => $filename,
            'tourism_office_id'       => $request->select,
            'special_price'           => $request->special_price,
            'city_desc'              => $request->city_desc
        ]);

        return redirect("/Tourist_destinations");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TouristDestination  $touristDestination
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alert::success('Success delete', 'Success Message');
        $x = TouristDestination::where("id", $id)->delete();
        return redirect("/Tourist_destinations");
    }
}
