<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notification extends Model
{
    use HasFactory;
    use SoftDeletes ;

    // Types
    const TYPE_NEW_MESSAGE  = 1 ;
    const TYPE_NEW_COMMENT  = 2 ;
    const TYPE_NEW_REACTION = 3 ;

    // Status
    const STATUS_NEW  = 1 ;
    const STATUS_READ = 2 ;

    // Relaciones
    public function user() {
        return $this->belongsTo( User::class ) ;
    }

}
