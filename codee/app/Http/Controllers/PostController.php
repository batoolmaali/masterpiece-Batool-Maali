<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use App\Like;
use App\User;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct()
    {



        $this->middleware('auth:web');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $comments = Comment::all();
        $posts = Post::with("user","comments.user")->orderByDesc('id')->get();;
     
        //   dd($posts);
        $users = User::all();

        return view("public.posts", [
            "x" => $posts,
         
            "z" => $users,

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
        // $this->createPublic($request);

        if ($request->hasFile('post_image')) {

            $file = $request->file('post_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('images/', $filename);
            $user = auth()->user();

            Post::create([
                'post_desc'          => $request->post_desc,
                'post_image'         => $filename,
                'post_title'         => $request->post_title,
                 'user_id'            => $user->id,


            ]);
        }
        // return "done";
        return redirect("/post");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function like($id)
    {
    //   return $id; 
    $posts = Post::all();
    $post_id=$id;
    $user = auth()->user();
    $like = new like();
    $like->post_id=$post_id;
    $like->user_id=$user->id;
    $like->like=1;
    $like->save();
    //   return view("post", [
    //       "x"=>$posts,
       
    //    ]); 
    return redirect("/post");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post, $id)
    {
        $post_by_id = Post::destroy($id);


        return redirect()->back();
    }
    public function destroyPost(Post $post, $id)
    {
        $post = Post::destroy($id);


        return redirect()->back();
    }

    public function search( Request $request) {

        $request->validate([

            'q' => 'required'
        ]);


        $q = $request->q;
        // dd($request->q);
        $filteredpost = Post::where('post_title', 'like', '%' . $q . '%')
                                ->orWhere('post_desc', 'like', '%' . $q . '%')->get();
      
                              
                            

        if ( $filteredpost->count()) {

            return view('public.search-post')->with([
                'posts' => $filteredpost,
             
            ]);
        }
    else{
            
        return view('public.NO-Result');
    }




    }




}
