<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use HasFactory;
    use SoftDeletes ;

    // Relaciones
    public function conversation() {
        return $this->belongsTo( Conversation::class );
    }

    public function user_sender() {
        return $this->belongsTo( User::class, 'sender_id') ;
    }

}
