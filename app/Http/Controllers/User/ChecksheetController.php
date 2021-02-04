<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Checksheet;

class ChecksheetController extends Controller
{
    public function index(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          $posts = Checksheet::where('date', $cond_title)->get();
      } else {
          $posts = Checksheet::all();
      }
      return view('user.checksheet.index', ['posts' => $posts, 'cond_title' => $cond_title]);
  }

  
  public function checkfront()
  {
      return view('user.checksheet.check');
  }
  
  public function checksend(Request $request)
  {
      $this->validate($request, Checksheet::$rules);
      
      $checksheet = new Checksheet;
      $checksheet->companyName = $request->user()->companyName;
      $checksheet->name = $request->user()->name;
      $form = $request->all();
      
      if(isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $checksheet->image_path = basename($path);
      } else {
          $checksheet->image_path = null;
      }
      
      unset($form['_token']);
      
      unset($form['image']);
      
      $checksheet->fill($form);
      $checksheet->save();
      return redirect('user/checksheet');
  }  
  
  
  public function show(Request $request, $id)
     {
        $checksheet = Checksheet::findOrFail($id);
 
      return view('user.checksheet.display', [
            'checksheet' => $checksheet,
       ]);
     }
}
