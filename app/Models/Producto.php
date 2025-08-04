<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Producto extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;


    protected $table = 'producto';

    protected $guarded = [];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
