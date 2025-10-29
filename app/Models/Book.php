<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';
    protected $primaryKey = 'id_book';
    protected $fillable = ['id_book', 'id_category', 'title', 'author', 'publisher', 'year_published', 'isbn', 'pages', 'stock', 'location'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category');
    }
}
