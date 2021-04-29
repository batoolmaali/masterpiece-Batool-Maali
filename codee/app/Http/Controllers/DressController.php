<?php

namespace App\Http\Controllers;

use App\DressesShop;
use App\Dress;
use App\Flower;
use App\Suit;
use App\Hall;
use App\Photographer;
use App\TouristDestination;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Dress = Dress::paginate(8);
        $shop = DressesShop::all();
        return view("admins.dresses", [
            "x" => $Dress,
            "y" => $shop
        ]);
    }
    public function validateRequest($request)
    {
        $request->validate([
            'dress_name'     => 'required|min:5',
            'dress_size'  => 'required',
            'dress_color'     => 'required',
            'dress_price'     => 'required',
            'special_price'     => 'required',
            'is_available'     => 'required',
            'dress_desc'     => 'required',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function public()
    {
        $Dress = Dress::paginate(10);
        return view('public.index', [
            "y" => $Dress,
           
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
        toast('The dress has been added successfully ','success');
        $this->validateRequest($request);
        if ($request->hasFile('dress_image')) {
            $file = $request->file('dress_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('images', $filename);
        } else {
            $filename = 'profile.jpg';
        }

        Dress::create([
            'dress_name'      => $request->dress_name,
            'dress_size'      => $request->dress_size,
            'dress_color'     => $request->dress_color,
            'dress_price'     => $request->dress_price,
            'special_price'     => $request->special_price,
            'dress_image'     => $filename,
            'is_available'    => $request->is_available,
            'dresses_shop_id'    => $request->select,
            'dress_desc'      => $request->dress_desc

        ]);

        //  return "done";
        return redirect("/dresses");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dress  $dress
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $dress = Dress::paginate(10);
        return view("public.dressestest", [
            "x" => $dress
        ]);
    }

    public function single($id)
    {


        $all = Dress::latest()->take(4)->get();
        $shop = Dress::find($id)->DressesShop;
        // dd($shop);
        $show = Dress::find($id);
        return view('public.single-dress', [
            'shop'   => $shop,
            'dress' => $show,
            'all' => $all

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dress  $dress
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dressedit = Dress::where("id", $id)->get()->first();
        $shop = DressesShop::all();
        return view("admins.dresses-edit", [
            "dress" => $dressedit,
            "shop"  => $shop
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dress  $dress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        toast('The dress has been successfully updated ','success');
        $this->validateRequest($request);

        if ($request->hasFile('dress_image')) {
            $file = $request->file('dress_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('images', $filename);
        } else {
            $filename = 'profile.jpg';
        }

        Dress::where("id", $id)->update([
            'dress_name'      => $request->dress_name,
            'dress_size'      => $request->dress_size,
            'dress_color'     => $request->dress_color,
            'dress_price'     => $request->dress_price,
            'special_price'     => $request->special_price,
            'dress_image'     => $filename,
            'is_available'    => $request->is_available,
            'dresses_shop_id'    => $request->select,
            'dress_desc'      => $request->dress_desc
        ]);

        return redirect("/dresses");
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dress  $dress
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alert::success('Success delete', 'Success Message');
        $x = Dress::where("id", $id)->delete();
        return redirect("/dresses");
    }

    public function search( Request $request) {

        $request->validate([

            'q' => 'required'
        ]);


        $q = $request->q;
// dd($request->q);
        $filteredDress = Dress::where('dress_name', 'like', '%' . $q . '%')
                                ->orWhere('dress_color', 'like', '%' . $q . '%')
                                ->orWhere('dress_desc', 'like', '%' . $q . '%')
                                ->orWhere('dress_size', 'like', '%' . $q . '%')->get();
                                // dd( $filteredpost);
        $filteredflower =Flower::where('flower_name', 'like', '%' . $q . '%')
                                ->orWhere('flower_color', 'like', '%' . $q . '%')
                                ->orWhere('flower_desc', 'like', '%' . $q . '%')
                                ->orWhere('flower_type', 'like', '%' . $q . '%')->get();
                                // dd( $filteredpost);
         $filteredsuit =Suit::where('suit_name', 'like', '%' . $q . '%')
                                ->orWhere('suit_color', 'like', '%' . $q . '%')
                                ->orWhere('suit_desc', 'like', '%' . $q . '%')
                                ->orWhere('suit_size', 'like', '%' . $q . '%')->get();
                                // dd( $filteredpost);
        $filteredshall =Hall::where('hall_name', 'like', '%' . $q . '%')
                                ->orWhere('hall_address', 'like', '%' . $q . '%')
                                ->orWhere('hall_desc', 'like', '%' . $q . '%')
                                ->orWhere('hall_type', 'like', '%' . $q . '%')->get();
                                // dd( $filteredpost);
        $filteredphoto =Photographer::where('photographer_name', 'like', '%' . $q . '%')
                                ->orWhere('Photographer_address', 'like', '%' . $q . '%')
                                ->orWhere('Photo_desc', 'like', '%' . $q . '%')
                                ->orWhere('Photographer_email', 'like', '%' . $q . '%')->get();
                                // dd( $filteredphoto);    
        $filteredcity =TouristDestination::where('city_name', 'like', '%' . $q . '%')->get();
                                
                                // dd( $filteredphoto);               

        if ( $filteredDress ->count()) {

            return view('search.search-dress')->with([
                'dress' => $filteredDress ,
             
            ]);
        }


        elseif ($filteredflower->count()) {

            return view('search.search-flower')->with([
              
                'flower' =>  $filteredflower
            ]);
            }
            elseif ($filteredsuit->count()) {

                return view('search.search-suit')->with([
                  
                    'suit' =>   $filteredsuit
                ]);
                } 

                elseif ($filteredshall->count()) {

                    return view('search.search-hall')->with([
                      
                        'hall' => $filteredshall
                    ]);
                    } 

                    elseif ($filteredphoto->count()) {

                        return view('search.search-photo')->with([
                          
                            'photo' => $filteredphoto
                        ]);
                        } 
                        elseif ($filteredcity->count()) {

                            return view('search.search-city')->with([
                              
                                'city' => $filteredcity
                            ]);
                            } 
            
            
            
            else{
            
        return view('NO-Result');
    }




    }
}
