<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicePages extends Model
{
    use HasFactory;
    protected $table = 'service_pages';
    protected $guarded = [];
    protected $casts = [
        'fotos_slider' => 'array',
    ];



    public static function getSlug($value)
    {
        $result = self::where('slug', $value)->first();

        return $result;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cidade()
    {
        return $this->belongsTo(Cityes::class, 'citye_id');
    }
    public function serviceType()
    {
        return $this->belongsTo(ServiceType::class, 'service_type_id');
    }
    public function categoria()
    {
        return $this->belongsToMany(Categoria::class, 'categoria_service_pages');
    }

    
}
