<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{

    /**
     * The relationships to always eager-load.
     *
     * @var array
     */
    protected $with = ['creator'];

    /**
     * A thread belongs to a creator.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function path()
    {
        return "/words/" . $this->id;
    }



}
