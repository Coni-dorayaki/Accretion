<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Information;

class InformationController extends Controller
{
    public function index(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          $posts = Information::where('title', $cond_title)->get();
      } else {
          $posts = Information::all();
      }
      return view('user.information.index', ['posts' => $posts, 'cond_title' => $cond_title]);
  }
  
    public function show(Request $request, $id)
  {
        $information = Information::findOrFail($id);
 
      return view('user.information.display', [
            'information' => $information,
       ]);
  }
}
