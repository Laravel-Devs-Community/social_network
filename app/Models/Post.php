<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes ;

    protected $fillable = [
        'text',
        'photo'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            // Accede al usuario autenticado y establece el valor del campo user_id
            $post->user_id = auth()->id();
        });
    }
    
    // Relaciones
    public function user() {
        return $this->belongsTo( User::class );
    }

    // Scopes
    public function scopeDeMiFeed( $query ) {
        $ids = [\Auth::user()->id];
        return $query->whereIn('user_id',$ids);
    }
    
    // Campos lindos
    public function creadoLindo() {
        return \Carbon\Carbon::parse($this->created_at)->diffForHumans();
    }
}
