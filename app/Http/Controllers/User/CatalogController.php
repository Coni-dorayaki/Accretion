<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Catalog;

class CatalogController extends Controller
{
    public function index(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          $posts = Catalog::where('title', $cond_title)->get();
      } else {
          $posts = Catalog::all();
      }
      return view('user.catalog.index', ['posts' => $posts, 'cond_title' => $cond_title]);
  }
}
