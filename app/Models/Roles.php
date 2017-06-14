<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    // The table associated with the model
    protected $table = 'roles';

    // roles should not be timestamped
    public $timestamps = false;

}
