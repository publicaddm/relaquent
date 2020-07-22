<?php

namespace Publica\Relaquent\Model\Concerns;

use Illuminate\Database\Query\Builder as QueryBuilder;
use Publica\Relaquent\QueryBuilder\EloquentQueryBuilder;

trait UsesRelaquentQueryBuilder
{
    // =======================================================================//
    //          Overrides
    // =======================================================================//

    /**
     * @param QueryBuilder $query
     *
     * @return EloquentQueryBuilder
     */
    public function newEloquentBuilder($query): EloquentQueryBuilder
    {
        return new EloquentQueryBuilder($query);
    }
}
