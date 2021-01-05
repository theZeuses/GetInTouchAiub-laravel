<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminPost extends Model
{
    protected $table = 'adminpost';
    protected $primaryKey = "id";
    public $timestamps = false;
   // use HasFactory;
}
