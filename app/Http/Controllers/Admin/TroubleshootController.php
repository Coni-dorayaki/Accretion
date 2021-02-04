<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Troubleshoot;

class TroubleshootController extends Controller
{
    public function index(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          $posts = Troubleshoot::where('machineClass', $cond_title)->get();
      } else {
          $posts = Troubleshoot::all();
      }
      return view('admin.troubleshooting.index', ['posts' => $posts, 'cond_title' => $cond_title]);
  }

  
  public function add()
  {
      return view('admin.troubleshooting.create');
  }
  
  public function create(Request $request)
  {
      $this->validate($request, Troubleshoot::$rules);
      
      $troubleshoot = new Troubleshoot;
      $form = $request->all();
      
      if(isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $troubleshoot->image_path = basename($path);
      } else {
          $troubleshoot->image_path = null;
      }
      
      unset($form['_token']);
      
      unset($form['image']);
      
      $troubleshoot->fill($form);
      $troubleshoot->save();
      return redirect('admin/troubleshooting');
  }  
  
  public function show(Request $request, $id)
     {
        $troubleshoot = Troubleshoot::findOrFail($id);
 
      return view('admin.troubleshooting.display', [
            'troubleshoot' => $troubleshoot,
       ]);
     }
}
