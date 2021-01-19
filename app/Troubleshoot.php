<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Troubleshoot extends Model
{
    protected $table = 'troubleshoots';
    protected $guarded = array('id');
    
    public static $rules = array(
        'title' => 'required',
        'machineClass' => 'required',
        'body' => 'required',
    );
    
    public function user()
    {
    return $this->belongsTo('App\User');
        
    }
    
    public function admin()
    {
    return $this->belongsTo('App\Admin');
        
    }
}
