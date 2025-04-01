<?php

declare(strict_types=1);

namespace App\Modules\Blog\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return \App\Modules\Blog\database\factories\PostFactory::new();
    }
    
}
