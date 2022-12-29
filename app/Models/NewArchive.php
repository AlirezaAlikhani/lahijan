<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewArchive extends Model
{
    use HasFactory;

    protected $table = 'news_archive';

    protected $fillable = [
        'title',
        'body',
        'image',
        'view_count',
        'created_at',
    ];
}
