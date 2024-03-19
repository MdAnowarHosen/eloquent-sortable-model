<?php

namespace LaraBangla\EloquentSortable\Test;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use LaraBangla\EloquentSortable\Sortable;
use LaraBangla\EloquentSortable\SortableTrait;

class DummyWithSoftDeletes extends Model implements Sortable
{
    use SoftDeletes;
    use SortableTrait;

    protected $table = 'dummies';
    protected $guarded = [];
    public $timestamps = false;
}
