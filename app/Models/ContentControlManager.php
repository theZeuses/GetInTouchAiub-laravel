<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentControlManager extends Model
{
    use HasFactory;
    protected $table = 'contentcontrolmanager';
    protected $primaryKey = "id";
    public $timestamps = false;
}
