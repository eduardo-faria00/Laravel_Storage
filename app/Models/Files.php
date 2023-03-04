<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function likes()
    {
        return $this->hasMany(Likes::class);
    }

    public function dislikes()
    {
        return $this->hasMany(Dislikes::class);
    }

    public function like()
    {
        return $this->likes()->updateOrCreate(
            ['user_id' => auth()->user()->id],
            ['weight' => 1]
        );
    }

    public function dislike()
    {
        return $this->dislikes()->updateOrCreate(
            ['user_id' => auth()->user()->id],
            ['weight' => 1]
        );
    }

    public function unlike($table)
    {
        return $this->$table->updateOrCreate(
            ['user_id' => auth()->user()->id],
            ['weight' => 0]
        );
    }
}
