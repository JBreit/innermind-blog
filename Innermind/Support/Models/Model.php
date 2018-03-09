<?php

namespace Innermind\Support\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

abstract class Model extends Eloquent
{
    protected $guarded = [];
}