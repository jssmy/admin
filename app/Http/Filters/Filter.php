<?php

namespace App\Http\Filters;

use Illuminate\Http\Request;

abstract class Filter extends FilterSchema
{
    /**
     * @var Request
     */
    public $request;
    
    /**
     * The Eloquent builder.
     *
     * @var \Illuminate\Database\Eloquent\Builder
     */
    protected $builder;
    
    /**
     * Registered filters to operate upon.
     *
     * @var array
     */
     protected $filters = [];
    /**
     * Create a new ThreadFilters instance.
     *
     * @param Request $request
     */

    public $scopes;

    protected $scopeDefault = 'byField';

    protected $scopeParam = 'scope';

    protected $parameters ;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->scopes = $this->filters;
        $this->schema();
    }
    /**
     * Apply the filters.
     *
     * @param  \Illuminate\Database\Eloquent\Builder $builder
     * @return \Illuminate\Database\Eloquent\Builder
     */

    public function apply($builder)
    {
        $this->builder = $builder;

        foreach ($this->getParameters() as $key => $parameter) {
            $method = $parameter->{$this->scopeParam} ?: $this->scopeDefault;

            if ((in_array($method, $this->filters) || $method == $this->scopeDefault)) {
                $this->$method($parameter);
            }
        }

        return $this->builder;
    }

    /**
     * Fetch all relevant filters from the request.
     *
     * @return array
     */
    public function getFilters()
    {
        $filters = $this->request->filters ? : [];
        return array_filter($filters);
    }

    public function schema()
    {
        foreach ($this->getFilters() as $filter){
            $this->parameters[] = new FilterSchema($filter);
        }
    }
    
    public function hasFilter($filter)
    {
        return isset($this->getFilters()[$filter]) ? true : false;
    }

    protected function byField(FilterSchema $filter)
    {
        if (is_array($filter->value)) {
            $whereInclude = ($filter->originalOperator == 'neq') ? 'whereNotIn' : 'whereIn';

            return $this->builder->$whereInclude($filter->field, $filter->value);
        }

        return $this->builder->where($filter->field, $filter->operator, $filter->value);
    }

    /* [{'scope' : 'methodName', 'value': 'value'},  filtro personalizados
        {'field' : 'fieldName', 'operator': 'eq' , 'value': 'value' }  filtro por campos
       ] */
    public function getParameters()
    {
        $parameters = collect($this->parameters)->filter(function ($item){
                            if ($item->emptyValue == false) {
                                if (is_array($item->value)) {
                                    if (collect($item->value)->filter()->isEmpty()) {
                                        return false;
                                    }
                                } else if ($item->value == '') {
                                    return false;
                                }
                            }
                            return true;
                      });

        return $parameters;
    }

}