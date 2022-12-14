<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $fillable=['content'];

    public function user()
    {
        //在用户模型中。指明一个用户拥有多条微博
        return $this->belongsTo(User::class);
    }
}
