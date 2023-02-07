<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\App;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'message',
        'user_id'
];

public function user()
{
    return $this->belongsTo(User::class);
}

}
