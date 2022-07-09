<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class ProductGallery extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'products_galleries';
    
    protected $fillable = [
        'products_id',
        'url',
    ];

    // menyambungkan table url
    public function getUrlAttriute($url)
    {
        return config('app.url') . Storage::url($url);
    }
}
