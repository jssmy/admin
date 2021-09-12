<?php

namespace App\Http\Filters;


class FilterSchema
{
    protected $attributes;
    protected $originalOperator;
    protected $originalValue;

    public function __construct($filter)
    {
        $this->attributes = $filter;
        $this->originalOperator = $filter['operator'] ?? null;
        $this->originalValue = $filter['value'] ?? null;
    }

    public function __get($key)
    {
        if ($key == 'operator' && isset($this->attributes['field'])) {
            return $this->getOperator();
        } else if ($key == 'value' && isset($this->attributes['value']) && isset($this->attributes['operator'])) {
            return $this->getFormatValue();
        } else if (array_key_exists($key, $this->getAttributes())) {
            return data_get($this->getAttributes(), $key);
        }

        return null;
    }

    public function getAttributes()
    {
        return $this->attributes;
    }

    protected function operator()
    {
        return ['lte' => '<=',
                'gte' => '>=',
                'lt' => '<',
                'gt' => '>',
                'eq' => '=',
                'neq' => '!=',
                'contains' => 'like',
                'notcontains' => 'not like',
                'startswith' => 'like',
                'endswith' => 'like'];
    }

    public function getOperator()
    {
        return isset($this->attributes['operator']) ? $this->operator()[$this->attributes['operator']] : $this->operator()['eq'];
    }

    public function getFormatValue()
    {
        if ($this->attributes['operator'] == 'contains' || $this->attributes['operator'] == 'notcontains') {
            return "%".$this->attributes['value']."%";
        } else if ($this->attributes['operator'] == 'startswith') {
            return "%".$this->attributes['value'];
        } else if ($this->attributes['operator'] == 'endswith') {
            return "%".$this->attributes['value']."%";
        } else {
            return $this->attributes['value'];
        }
    }
}