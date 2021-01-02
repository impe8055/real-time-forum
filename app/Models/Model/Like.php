<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $fillable = [ 'reply_id', 'user_id' ];

    public function likes()
    {
        return $this->hasMany(App\Models\Model\Like::class);
    }
}
