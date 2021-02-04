<?php

namespace App\Http\Controllers\Admin;

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
      return view('admin.information.index', ['posts' => $posts, 'cond_title' => $cond_title]);
  }

  
  public function add()
  {
      return view('admin.information.create');
  }
  
  public function create(Request $request)
  {
      $this->validate($request, Information::$rules);
      
      $information = new Information;
      $form = $request->all();
      
      if(isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $information->image_path = basename($path);
      } else {
          $information->image_path = null;
      }
      
      unset($form['_token']);
      
      unset($form['image']);
      
      $information->fill($form);
      $information->save();
      return redirect('admin/information');
  }  
  
   public function show(Request $request,$id)
    {
        $information = Information::findOrFail($id);
        return view('admin.information.display',[
            'information'=>$information
        ]);
    }
}
