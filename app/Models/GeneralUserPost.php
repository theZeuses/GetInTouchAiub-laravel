<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralUserPost extends Model
{
    use HasFactory;
    protected $table = "gupost";
    public $timestamps = false;
}
