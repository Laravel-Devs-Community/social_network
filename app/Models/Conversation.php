<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Conversation extends Model
{
    use HasFactory;
    use SoftDeletes ;

    // Relaciones
    public function user_sender() {
        return $this->belongsTo( User::class, 'sender_id') ;
    }

    public function user_to() {
        return $this->belongsTo( User::class, 'to_id') ;
    }

}
