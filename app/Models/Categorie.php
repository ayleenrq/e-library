<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Categorie extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $primaryKey = 'id_categorie';
    protected $fillable = ['id_categorie', 'name'];

    public function books()
    {
        return $this->hasMany(Book::class, 'id_categorie');
    }
}
