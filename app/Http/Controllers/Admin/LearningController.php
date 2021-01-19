<?php

namespace App\Http\Controllers\Admin;

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
      return view('admin.learning.index', ['posts' => $posts, 'cond_title' => $cond_title]);
  }

  
  public function add()
  {
      return view('admin.learning.create');
  }
  
  public function create(Request $request)
  {
      $this->validate($request, Learning::$rules);
      
      $learning = new Learning;
      $form = $request->all();
      
      if(isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $learning->image_path = basename($path);
      } else {
          $learning->image_path = null;
      }
      
      unset($form['_token']);
      
      unset($form['image']);
      
      $learning->fill($form);
      $learning->save();
      return redirect('admin/learning');
  }  
}
