<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    protected $fillable = ['lang','type','airport','port','date','time','origin','destination','name','email','phone','email_confirmation_code','deletion_code','deletion_at'];
}
