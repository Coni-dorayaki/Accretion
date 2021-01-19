<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Checksheet;

class ChecksheetController extends Controller
{
    public function index(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          $posts = Checksheet::where('companyName', $cond_title)->get();
      } else {
          $posts = Checksheet::all();
      }
      return view('admin.checksheet.checkLog', ['posts' => $posts, 'cond_title' => $cond_title]);
  }
}
