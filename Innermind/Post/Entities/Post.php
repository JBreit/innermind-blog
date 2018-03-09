<?php

namespace Innermind\Post\Entities;

use Innermind\Support\Models\Model;
use Innermind\User\Entities\User;
use Carbon\Carbon;

class Post extends Model
{
    protected $table = 'posts';

    protected function comments()
    {
        return $this->hasMany(Comment::class);
    }

    protected function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, $filters)
    {
        if (isset($filters['month'])) {
            $query->whereMonth('created_at', Carbon::parse($filters['month'])->month);
        }

        if (isset($filters['year'])) {
            $query->whereYear('created_at', $filters['year']);
        }

        // if (isset($filters['recent'])) {
        //     $query->where( 'created_at', '>', Carbon::now()->subDays(14));
        // }
    }
}