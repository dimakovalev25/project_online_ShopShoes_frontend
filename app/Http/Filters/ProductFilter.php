<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class ProductFilter extends AbstractFilter
{

    const CATEGORIES = 'categories';
    const PRICES = 'prices';
    const TAGS = 'tags';

    protected function getCallbacks(): array
    {
        return [
            self::CATEGORIES => [$this, 'categories'],
            self::TAGS => [$this, 'tags'],
            self::PRICES => [$this, 'prices']
        ];
    }

    protected function categories(Builder $builder, $value)
    {
        $builder->whereIn('category_id', $value);
    }

    protected function price(Builder $builder, $value)
    {
        $builder->whereBetween('price', $value);

    }

    protected function tags(Builder $builder, $value)
    {
        $builder->whereHas('tags', function ($b) use ($value){
            $b->whereIn('tag_id', $value);
        });
    }

}