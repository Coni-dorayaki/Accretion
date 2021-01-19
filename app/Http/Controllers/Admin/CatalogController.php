<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Catalog;

class CatalogController extends Controller
{
    public function index(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          $posts = Catalog::where('name', $cond_title)->get();
      } else {
          $posts = Catalog::all();
      }
      return view('admin.catalog.index', ['posts' => $posts, 'cond_title' => $cond_title]);
  }

  
  public function add()
  {
      return view('admin.catalog.create');
  }
  
  public function create(Request $request)
  {
      $this->validate($request, Catalog::$rules);
      
      $catalog = new Catalog;
      $form = $request->all();
      
      if(isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $catalog->image_path = basename($path);
      } else {
          $catalog->image_path = null;
      }
      
      unset($form['_token']);
      
      unset($form['image']);
      
      $catalog->fill($form);
      $catalog->save();
      return redirect('admin/catalog');
  }  
}
