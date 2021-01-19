<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Learning;

class LearningController extends Controller
{
    public function index(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          $posts = Learning::where('machineClass', $cond_title)->get();
      } else {
          $posts = Learning::all();
      }
      return view('user.learning.index', ['posts' => $posts, 'cond_title' => $cond_title]);
  }
}
