<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Admin;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function index()
    {
        $comments = Comment::get();
        return view('talk', ['comments' => $comments]);
    }
    
    public function add(Request $request)
    {
          $user = Auth::user();
          $comment = $request->input('comment');
          Comment::create([
              'login_id' => $user->id,
              'name' => $user->name,
              'companyName' => $user->companyName,
              'useMachine' => $user->useMachine,
              'comment' => $comment
    ]);
    return redirect()->route('talk');
    
    }
    
    public function indexAdmin()
    {
        $comments = Comment::get();
        return view('admin.chat.talk', ['comments' => $comments]);
    }
    
    public function addAdmin(Request $request)
    {
          $admin = Auth::guard('admin')->user();
          $comment = $request->input('comment');
          Comment::create([
              'login_id' => $admin->id,
              'name' => $admin->name,
              'companyName' => $admin->companyName,
              'useMachine' => $admin->belongs,
              'comment' => $comment
    ]);
    return redirect()->route('talkAdmin');
    
    }
    
    public function getData()
    {
         $comments = Comment::orderBy('created_at', 'desc')->get();
         $json = ["comments" => $comments];
          return response()->json($json);
    }
}
