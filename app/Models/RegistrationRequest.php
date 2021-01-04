<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class RegistrationRequest extends Model
{

    protected $table = 'registrationrequest';
    protected $primaryKey = "id";
	public $timestamps = false;

}
