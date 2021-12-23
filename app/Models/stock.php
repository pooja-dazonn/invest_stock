<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stock extends Model
{
    use HasFactory;
    protected $table = 'stocks';
    protected $fillable=[ 'company' , 'y_price','t_price', 'date','duration' ];
    public $timestamps = false;
}
