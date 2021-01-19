<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checksheet extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'date' => 'required',
        'temp' => 'required',
        'humi' => 'required',
        'clean' => 'required',
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
