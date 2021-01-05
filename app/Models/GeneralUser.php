<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralUser extends Model
{
    use HasFactory;
    protected $table = 'generaluser';
    protected $primaryKey = "id";
    public $timestamps = false;
}
