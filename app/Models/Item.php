<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'category_id'];

    public function category() {
        return $this->belongsTo(Category::class);
    }   
}
