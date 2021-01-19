<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    protected $table = 'catalogs';
    protected $guarded = array('id');
    
    public static $rules = array(
        'name' => 'required',
        'number' => 'required',
        'price' => 'required',
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
