<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Troubleshoot;

class TroubleshootingController extends Controller
{
    public function index(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          $posts = Troubleshoot::where('machineClass', $cond_title)->get();
      } else {
          $posts = Troubleshoot::all();
      }
      return view('user.troubleshooting.index', ['posts' => $posts, 'cond_title' => $cond_title]);
  }
  
      public function show(Request $request, $id)
     {
        $troubleshoot = Troubleshoot::findOrFail($id);
 
      return view('user.troubleshooting.display', [
            'troubleshoot' => $troubleshoot,
       ]);
     }
}
