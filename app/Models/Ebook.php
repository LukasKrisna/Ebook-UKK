<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ebook extends Model
{
    use HasFactory;

    protected $table = 'ebook_ukk';
    protected $primaryKey = 'id';
    protected $fillable = ['judul', 'pengarang', 'penerbit', 'deskripsi', 'persediaan', 'gambar'];
}
