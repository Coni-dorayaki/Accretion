<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'login_id', 'name','companyName','useMachine', 'comment'
    ];

    protected $guarded = [
        'create_at', 'update_at'
    ];
}
