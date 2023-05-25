<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// define( '_REACTION_LIKE', 1 );
// define( '_REACTION_DISLIKE', 2 );

class Reaction extends Model
{
    use HasFactory;
    use SoftDeletes ;

    const LIKE = 1 ;
    const DISLIKE = 2 ;

    // Relaciones
    public function user() {
        return $this->belongsTo( User::class );
    }
}
