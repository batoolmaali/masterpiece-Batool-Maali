<?php

namespace App\Http\Controllers;

use App\Photographer;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class PhotographerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Photographer::paginate(4);
        return view("admins.photographers", [
            "x" => $company
        ]);
    }
    public function validateRequest($request)
    {
        $request->validate([
            'photographer_name'      => 'required|min:5',
            'photographer_email'     => 'required|email',
            'photographer_phone'     => 'required',
            'photographer_address'   => 'required',
            'is_available'           => 'required',
            'photo_desc'           => 'required',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function single($id)
    {


        $show = Photographer::find($id);
        $all = Photographer::latest()->take(3)->get();
        return view('public.photo-single', compact('show', 'all'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        toast('Photographer added successfully','success');  
        $this->validateRequest($request);
        if ($request->hasFile('photographer_image')) {
            $file = $request->file('photographer_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('images', $filename);
        } else {
            $filename = 'profile.jpg';
        }

        Photographer::create([
            'photographer_name'      => $request->photographer_name,
            'photographer_email'     => $request->photographer_email,
            'photographer_phone'     => $request->photographer_phone,
            'photographer_address'   => $request->photographer_address,
            'is_available'           => $request->is_available,
            'photo_desc'            => $request->photo_desc,
            'photographer_image'      => $filename,
        ]);

        //  return "done";
        return redirect("/photographers");
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Photographer  $photographer
     * @return \Illuminate\Http\Response
     */

    public function show()
    {
        $photo = Photographer::paginate(3);
        return view("public.photographer", [
            "x" => $photo
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Photographer  $photographer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $photodit = Photographer::where("id", $id)->get()->first();

        return view("admins.photographers-edit", [
            "photo" => $photodit
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Photographer  $photographer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        toast('Photographer has been successfully updated ','success'); 
        $this->validateRequest($request);

        if ($request->hasFile('photographer_image')) {
            $file = $request->file('photographer_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('images', $filename);
        } else {
            $filename = 'profile.jpg';
        }

        Photographer::where("id", $id)->update([
            'photographer_name'      => $request->photographer_name,
            'photographer_email'     => $request->photographer_email,
            'photographer_phone'     => $request->photographer_phone,
            'photographer_address'   => $request->photographer_address,
            'is_available'           => $request->is_available,
            'photo_desc'            => $request->photo_desc,
            'photographer_image'      => $filename,
        ]);

        return redirect("/photographers");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photographer  $photographer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alert::success('Success delete', 'Success Message');
        $x = Photographer::where("id", $id)->delete();
        return redirect("/photographers");
    }
}
