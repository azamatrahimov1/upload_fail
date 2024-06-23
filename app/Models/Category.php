<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Attachment;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    public function icon()
    {
        return $this->morphOne(Attachment::class, 'attachment');
    }

}
