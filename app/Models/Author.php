<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticable;

class Author extends Authenticable
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $fillable = [
        'first_name',
        'last_bane',
        'email',
        'password'
    ];

    protected $hidden = [
        'password'
    ];

    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }
}
