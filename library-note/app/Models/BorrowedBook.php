<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BorrowedBook extends Model
{
    protected $table = 'borrowed_books'; // Nama tabel di database
    protected $fillable = ['title', 'author', 'borrowed_at'];
    public $timestamps = false; // Karena kita tidak pakai created_at dan updated_at
}
