<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categoria';
    protected $guarded = [];

    public function servicePages()
    {
        return $this->belongsToMany(ServicePages::class);
    }

    public static function getSlug($slug)
    {
        $tag = self::where('slug', $slug)->first();
        
        return $tag->servicePages()->with('cidade');
    }
}
