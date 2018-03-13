<?php

namespace App;

class Tag extends Model
{

    public function getRouteKeyName()
    {
        return 'name';
    }

    /**
     * Get the posts associated with the tag.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_tag', 'post_id', 'tag_id');
    }
}
