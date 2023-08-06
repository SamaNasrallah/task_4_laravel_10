<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable = ['name_arabic', 'name_english', 'birth_date', 'educational_stage', 'major', 'email','phone','address','details','is_active'];

}
