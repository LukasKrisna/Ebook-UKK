<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ebook extends Model
{
    use HasFactory;

    protected $table = 'ebooks';
    protected $primaryKey = 'id';
    protected $fillable = ['judul', 'pengarang', 'penerbit', 'deskripsi', 'persediaan', 'gambar'];
}
