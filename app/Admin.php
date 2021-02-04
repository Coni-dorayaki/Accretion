<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\AdminResetPassword;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $guard = 'admin';

    protected $fillable = [
        'name', 'email','companyName','belongs','password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    
    // Override default reset password
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new AdminResetPassword($token));
    }
    
    public function user()
    {
    return $this->hasMany('App\User');
        
    }
    
    public function checksheet()
    {
    return $this->hasMany('App\Checksheet');
        
    }
    
    public function information()
    {
    return $this->hasMany('App\Information');
        
    }
    
    public function catalog()
    {
    return $this->hasMany('App\Catalog');
        
    }
}

