<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteBlog extends Model
{
    protected $guarded = [];
    protected $table = 'site_blog';
    use HasFactory;
}