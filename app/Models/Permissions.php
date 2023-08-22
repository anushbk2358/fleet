<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
   
    protected $table = 'permissions';
    protected $primaryKey = 'PERMISSION_ID';
    public $timestamps = false;
    protected $guarded = [];
}
