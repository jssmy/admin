<?php

namespace App\Http\Filters;


trait QueryFilter {

    public function scopeFilter($query, Filter $filter)
    {
        return $filter->apply($query);
    }

}