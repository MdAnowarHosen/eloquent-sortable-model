<?php

namespace LaraBangla\EloquentSortable\Test;

use Illuminate\Database\Eloquent\Model;
use LaraBangla\EloquentSortable\Sortable;
use LaraBangla\EloquentSortable\EloquentSortable;

class Dummy extends Model implements Sortable
{
    use SortableTrait;

    protected $table = 'dummies';
    protected $guarded = [];
    public $timestamps = false;
}
