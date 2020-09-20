<?php

namespace App\Http\Controllers;
use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
	public function create()
	{
		$comment = new Comment;
		$comment->content = request()->content;
		$comment->disease_id = request()->disease_id;
		$comment->save();
		return back();
	}
	 public function store(Request $request)
    {
        
         // Validation
        $request->validate([
           
            "content" => 'required',
           
         ]);

         // Data insert
        $comment = new Comment;
        $comment->content = $request->content;
        $comment->save();

        return back;
    }



	public function delete($id){
		$comment = Comment::find($id);
		$comment->delete();

		return back();
	}

	public function __construct()
	{
		$this->middleware('auth');
	}
}
