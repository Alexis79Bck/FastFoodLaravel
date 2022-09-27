<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageStructure extends Model
{
    use HasFactory;
    protected $fillable = [
        'section', 'element', 'class','content'
    ];
}
