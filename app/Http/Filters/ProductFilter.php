<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class ProductFilter extends AbstractFilter
{

    const CATEGORIES = 'categories';
    const PRICES = 'prices';
    const BRANDS = 'brands';

    protected function getCallbacks(): array
    {
        return [
            self::CATEGORIES => [$this, 'categories'],
            self::PRICES => [$this, 'prices'],
            self::BRANDS => [$this, 'brands']
        ];
    }

    protected function categories(Builder $builder, $value)
    {
        $builder->whereIn('category_id', $value);
    }


    protected function brands(Builder $builder, $value)
    {
        $builder->whereIn('brand', $value);
    }

    protected function prices(Builder $builder, $value)
    {
        $builder->whereBetween('price', $value);

    }



}