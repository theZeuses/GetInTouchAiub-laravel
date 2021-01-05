<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountController extends Model
{
    protected $table = 'accountcontrolmanager';
    protected $primaryKey = "id";
    public $timestamps = false;
    //use HasFactory;
}
