<?php

namespace App\Models;

use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cityes extends Model
{
    use HasFactory;
    protected $table = 'cityes';
    protected $guarded = [];

    protected $casts = [
        'galeria' => 'array',
    ];

    public static function getData($id)
    {
        $result = ServicePages::where('citye_id', $id)->distinct()->get();
        $result = $result->unique('service_type_id');

        return $result;
    }


    // Função para extrair o ID do YouTube
    public static function extractYoutubeId($url)
    {
        if (filter_var($url, FILTER_VALIDATE_URL)) {
            $urlParts = parse_url($url);
            if (isset($urlParts['host']) && (strpos($urlParts['host'], 'youtube.com') !== false || strpos($urlParts['host'], 'youtu.be') !== false)) {
                if ($urlParts['host'] === 'youtu.be') {
                    return ltrim($urlParts['path'], '/');
                }
                if (isset($urlParts['query'])) {
                    parse_str($urlParts['query'], $queryParams);
                    return $queryParams['v'] ?? null;
                }
                if (isset($urlParts['path'])) {
                    $pathSegments = explode('/', trim($urlParts['path'], '/'));
                    return end($pathSegments);
                }
            }
        }
        return null; // Retorna null caso o ID não seja encontrado
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function servicePages()
    {
        return $this->hasMany(ServicePages::class, 'citye_id');
    }
}
