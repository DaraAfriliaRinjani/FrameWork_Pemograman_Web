<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Kalau mau mengatur field yang boleh diisi
    protected $fillable = ['title', 'content'];
}
