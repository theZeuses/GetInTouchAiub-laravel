<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralUserPostRequest extends Model
{
    protected $table = 'gupostrequest';
    protected $primaryKey = "id";
    public $timestamps = false;
    //use HasFactory;
}
