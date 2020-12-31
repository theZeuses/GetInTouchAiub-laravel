<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentControlManagerRequestForAction extends Model
{
    use HasFactory;
    protected $table = 'ccrequestforaction';
    public $timestamps = false;
}
