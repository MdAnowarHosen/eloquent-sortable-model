<?php

namespace LaraBangla\EloquentSortable\Test;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use LaraBangla\EloquentSortable\Sortable;
use LaraBangla\EloquentSortable\SortableTrait;

class DummyWithGlobalScope extends Model implements Sortable
{
    use SortableTrait;

    protected $table = 'dummies';
    protected $guarded = [];
    public $timestamps = false;

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        parent::addGlobalScope('ActiveScope', function (Builder $builder) {
            $builder->where('is_active', true);
        });
    }
}
