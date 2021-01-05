<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WarningUser extends Model
{
    use HasFactory;
    protected $table = "warninguser";
    public $timestamps = false;
}
