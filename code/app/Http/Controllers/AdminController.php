<?php

namespace App\Http\Controllers;

use Session;
use App\Booking;
use App\Dress;
use App\Flower;
use App\User;
use App\Post;
use App\Hall;
use App\TouristDestination;
use App\Photographer;
use App\TourismOffices;
use App\DressesShop;
use App\FlowerShop;
use App\Suit_shop;
use App\Company;
use App\Admin;
use App\Suit;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct()
    {



        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = Admin::paginate(1);
        return view("admins.admin", [
            "x" => $admin
        ]);
    }
    public function validateRequest($request)
    {
        $request->validate([
            'name'     => 'required|min:5',
            'password'  => 'required|min:8|max:16',
            'email'     => 'required|email',
            'role'     => 'required',

        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reports()
    {

        $office = TourismOffices::all();
        $dress = DressesShop::all();
        $flower = FlowerShop::all();
        $suit = Suit_shop::all();
        $company = Company::all();
        return view("admins.reports", [
            "x" =>  $office,
            "y" =>  $dress,
            "z" =>  $flower,
            "a" => $company,
            "b"=> $suit


        ]);
    }
    public function Statistics1()

    {
        $Dress = Dress::all()->count();
        $suit = Suit::all()->count();
        $admin = Admin::all()->count();
        $dress_count = DressesShop::all()->count();
        $flower_count = FlowerShop::all()->count();
        $Suit_shop = Suit_shop::all()->count();
        $office_count = TourismOffices::all()->count();
        $company_count = Company::all()->count();
        $post_count = Post::all()->count();
        $user_count = User::all()->count();
        $flower = Flower::all()->count();
        $hall_count = Hall::all()->count();
        $Photographer_count = Photographer::all()->count();
        $TouristDestination_count = TouristDestination::all()->count();
        $x = Booking::with('dress')->where("dress_id" ,"!=", null)->count();
        $y = Booking::with('flower')->where("flower_id" ,"!=", null)->count();
        $z = Booking::with('hall')->where("hall_id" ,"!=", null)->count();
        $a = Booking::with('suit')->where("suit_id" ,"!=", null)->count();
        $t = Booking::with('touristDestination')->where("tourist_destination_id" ,"!=", null)->count();
        $p = Booking::with('Photographer')->where("photographer_id" ,"!=", null)->count();
     
        return view("sat", [
            "x" => $dress_count,
            "y" => $flower_count,
            "z" =>  $office_count,
            "a" => $company_count,
            "s" =>$Suit_shop,
            "d"  => $post_count,
            "r"  => $user_count,
            "l"  => $suit,
            "m"  => $Dress,
            "f"  => $flower,
            "t"  => $TouristDestination_count,
            "h"  => $hall_count,
            "p"  => $Photographer_count,
            "n"  => $admin,
            'dress' => $x,
            'flower' => $y,
            'hall' => $z,
            'suit' => $a,
            'city' => $t,
            'Photographer' => $p,

        ]);
    }
    public function Statistics()

    {
        $Dress = Dress::all()->count();
        $suit = Suit::all()->count();
        $admin = Admin::all()->count();
        $Suit_shop = Suit_shop::all()->count();
        $dress_count = DressesShop::all()->count();
        $flower_count = FlowerShop::all()->count();
        $office_count = TourismOffices::all()->count();
        $company_count = Company::all()->count();
        $post_count = Post::all()->count();
        $user_count = User::all()->count();
        $flower = Flower::all()->count();
        $hall_count = Hall::all()->count();
        $Photographer_count = Photographer::all()->count();
        $TouristDestination_count = TouristDestination::all()->count();
        $x = Booking::with('dress')->where("dress_id" ,"!=", null)->count();
        $y = Booking::with('flower')->where("flower_id" ,"!=", null)->count();
        $z = Booking::with('hall')->where("hall_id" ,"!=", null)->count();
        $a = Booking::with('suit')->where("suit_id" ,"!=", null)->count();
        $t = Booking::with('touristDestination')->where("tourist_destination_id" ,"!=", null)->count();
        $p = Booking::with('Photographer')->where("photographer_id" ,"!=", null)->count();
     
        return view("admins.sat", [
            "x" => $dress_count,
            "y" => $flower_count,
            "z" =>  $office_count,
            "a" => $company_count,
            "d"  => $post_count,
            "r"  => $user_count,
            "l"  => $suit,
            "m"  => $Dress,
            "f"  => $flower,
            "t"  => $TouristDestination_count,
            "h"  => $hall_count,
            "p"  => $Photographer_count,
            "n"  => $admin,
            'dress' => $x,
            'flower' => $y,
            'hall' => $z,
            'suit' => $a,
            'city' => $t,
            'Photographer' => $p,
            "s" =>$Suit_shop,

        ]);
    }

    public function Stock()

    {
        $Dress = Dress::all()->count();
        $suit = Suit::all()->count();
        $flower = Flower::all()->count();
        $x = Booking::with('dress')->where("dress_id" ,"!=", null)->count();
        $y = Booking::with('flower')->where("flower_id" ,"!=", null)->count();
        $a = Booking::with('suit')->where("suit_id" ,"!=", null)->count();

        $stockF= $flower-$y;
        $stockD= $Dress-$x;
        $stockS= $suit-$a;
        // dd($stockS);
        return view("admins.Stock", [
            "d" => $x,
            "f" => $y,
            "s" => $a,
            "dress" => $Dress,
            "suit" => $suit,
            "flower" =>$flower,
            "stockF"=>$stockF,
            "stockD"=>$stockD,
            "stockS"=>$stockS,
          
          

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
        toast('Admin was added successfully','success');
        $this->validateRequest($request);
        if ($request->hasFile('admin_image')) {
            $file = $request->file('admin_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('images', $filename);
        } else {
            $filename = 'profile.jpg';
        }

     
        Admin::create([
            // $password= strval($request->password),
            "name"    => $request->name,
            "email"       => $request->email,
            "password"    => Hash::make($request->password),
            "role"       => $request->role,
            "admin_image" => $filename,
       
    ]);

        //  return "done";
        return redirect("/admin");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function post()
    {
        $post = Post::paginate(4);
        return view("admins.post", [
            "x" =>  $post,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $adminedit = admin::where("id", $id)->get()->first();

        return view("admins.admin-edit", [
            "admin" => $adminedit
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        toast('The admin has been successfully updated ','success');
        $this->validateRequest($request);

        if ($request->hasFile('admin_image')) {
            $file = $request->file('admin_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('images', $filename);
        } else {
            $filename = 'profile.jpg';
        }

        Admin::where("id", $id)->update([
            // $password= strval($request->password),
            "name"    => $request->name,
            "email"       => $request->email,
            "password"    => Hash::make($request->password),
            "role"       => $request->role,
            "admin_image" => $filename,
        ]);

        return redirect("/admin");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alert::success('Success delete', 'Success Message');
        $x = admin::where("id", $id)->delete();
        return redirect("/admin");
    }
}
