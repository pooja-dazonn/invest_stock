<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leade extends Model
{
    use HasFactory;
    protected $table = 'leades';
protected $fillable = ['name','email','mobile','city','category'];

}
