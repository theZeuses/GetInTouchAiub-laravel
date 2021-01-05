<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentControlManagerNotice extends Model
{
    use HasFactory;
    protected $table = 'ccnotice';
    public $timestamps = false;
}
