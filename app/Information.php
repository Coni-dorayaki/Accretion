<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $table = 'informations';
    protected $guarded = array('id');
    
    public static $rules = array(
        'title' => 'required',
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
