<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GeneralUser extends Model
{
    protected $table = 'generaluser';
    protected $primaryKey = "id";
    public $timestamps = false;
}
