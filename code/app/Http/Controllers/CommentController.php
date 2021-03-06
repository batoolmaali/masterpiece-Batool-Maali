<?php

namespace App\Http\Controllers;
use App\Post;
use App\User;
use App\Comment;
use App\Notifications\replied;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;

class CommentController extends Controller
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
    public function store(request $request, $id)
    {
        // $u=User::find($id);
        $post=Post::find($id);
        $user = auth()->user();
        Comment::create([
            'comment_desc'          => $request->comment_desc,
            'post_id'               => $id,
            'user_id'               => $user->id
          
        ]);
        $commented_on_user = Post::find($id)->user; 

        // Notification::send($u,new replied($post));
    
        $commented_on_user->notify(new replied($post));
        //   return "done";
     return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment, $id)
    {
        
        $comment_by_id=Comment::destroy($id);
    
    
        return redirect()->back();

    }
}
