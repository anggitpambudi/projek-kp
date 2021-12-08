<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'member';
    use HasFactory;
    protected $fillable = ['name','job','office','age'];

    public $timestamps = false;
}
