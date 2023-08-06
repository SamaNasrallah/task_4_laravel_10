<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';
    protected $fillable = ['course_title', 'category_id', 'details', 'hours', 'start_date', 'teacher'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id'); 
    }
}
