<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Question extends Model
{
    public function user()
    {
        return $this->belogsTo(User::class);

    }

    public function replies()
    {
        return $this->hasMany(Reply::class);

    }

    public function category()
    {
        return $this->belogsTo(Category::class);

    }


}
