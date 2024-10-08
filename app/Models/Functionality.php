<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Functionality extends Model
{
    use HasFactory;
    protected $table = "functionality";
    protected $fillable = ['function_id', 'function_name'];
}
