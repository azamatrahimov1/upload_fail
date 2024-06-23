<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Attachment;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'body'];

    public function images()
    {
        return $this->morphMany(Attachment::class, 'attachment');
    }

}
