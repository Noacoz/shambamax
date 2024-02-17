<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory; 
    protected $fillable = ['user_id','owner','phone','county','ward','town','name','photo','category','rate', 'frequency'];
}
