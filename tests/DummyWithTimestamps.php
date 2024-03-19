<?php

namespace LaraBangla\EloquentSortable\Test;

use Illuminate\Database\Eloquent\Model;
use LaraBangla\EloquentSortable\Sortable;
use LaraBangla\EloquentSortable\SortableTrait;

class DummyWithTimestamps extends Model implements Sortable
{
    use SortableTrait;

    protected $table = 'dummies';
    protected $guarded = [];
}
