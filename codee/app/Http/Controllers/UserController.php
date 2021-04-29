<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\User;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $user=User::paginate(2);
        return view("admins.user", [
          "x" => $user
      ]);
    }
    public function sendemail()
    {
        // $user_id = auth()->user('name');
        // $to_name=$user_id;
        $to_name="batool";
        $to_email="batoooltest@gmail.com";
        $data=array("name"=>"batool","body"=>"Dear customer,
        Thank you for your booking..
   
         We will contact you within the next 48 hours and arrange an appointment with you during the week. 
      
        Best Regards..
       
        Paradise");
        Mail::send('mail',$data,function($message) use( $to_name,$to_email){
            $message->to($to_email)
            ->subject('Confirmation Email');
        });
        // return "email send";
        return view("public.email", [
  
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
            $user = User::where("id", $id)->get()->first();
    
            return view("profile-deit", [
                "user" => $user
            ]);
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    
    
        if ($request->hasFile('image')){

            $file = $request->file('image') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = time() . '.' . $ext ;
            $file->move('images/', $filename);
            
        }
      
        user::where("id", $id)->update([
            'name' =>$request->name,
            'email' =>$request->email,
            'password' => $request->password,
            'phone' =>$request->phone,
            'image' => $filename,
        ]);
        return redirect("/profile");
    }


   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alert::success('Success delete', 'Success Message');
        $x = User::where("id", $id)->delete();
        return redirect("/user"); 
    }

    public function single($id){
        $user=User::find($id);
        return view('profile', [
            'user' => $user,
        ]);
    }
}
